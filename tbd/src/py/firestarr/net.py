import datetime
import os
import ssl
import time
import urllib.parse
from functools import cache
from io import StringIO
from urllib.error import HTTPError

import dateutil
import dateutil.parser
import requests
import tqdm_util
from common import (
    FLAG_DEBUG,
    do_nothing,
    ensure_dir,
    fix_timezone_offset,
    lock_for,
    logging,
    remove_on_exception,
)
from filelock import FileLock
from urllib3.exceptions import InsecureRequestWarning

# So HTTPS transfers work properly
ssl._create_default_https_context = ssl._create_unverified_context

# Suppress only the single warning from urllib3 needed.
requests.packages.urllib3.disable_warnings(category=InsecureRequestWarning)

VERIFY = False
# VERIFY = True

# pretend to be something else so servers don't block requests
HEADERS = {
    "User-Agent": " ".join(
        [
            "Mozilla/5.0 (Windows NT 10.0; Win64; x64)",
            "AppleWebKit/537.36 (KHTML, like Gecko)",
            "Chrome/106.0.0.0 Safari/537.36 Edg/106.0.1370.34",
        ]
    ),
}
# HEADERS = {'User-Agent': 'WeatherSHIELD/0.93'}
RETRY_MAX_ATTEMPTS = 0
RETRY_DELAY = 2

# HACK: list of url parameters to not mask
#   just to make sure we mask everything unless we know it's safe in logs
SAFE_PARAMS = ["model", "lat", "lon", "ens_val", "where", "outFields", "f"]
MASK_PARAM = "#######"
WAS_MASKED = set()


@cache
def _save_http_cached(url, save_as):
    modlocal = None
    logging.debug(f"Opening {url}")
    response = requests.get(
        url,
        stream=True,
        verify=VERIFY,
        headers=HEADERS,
    )
    if 200 != response.status_code:
        raise HTTPError(
            mask_url(url),
            response.status_code,
            f"Error saving {save_as}",
            response.headers,
            StringIO(response.text),
        )
    if os.path.isfile(save_as) and "last-modified" in response.headers.keys():
        mod = response.headers["last-modified"]
        modtime = dateutil.parser.parse(mod)
        modlocal = fix_timezone_offset(modtime)
        filetime = os.path.getmtime(save_as)
        filedatetime = datetime.datetime.fromtimestamp(filetime)
        if modlocal == filedatetime:
            return save_as
    ensure_dir(os.path.dirname(save_as))
    save_as = tqdm_util.wrap_write(
        response.iter_content(chunk_size=4096),
        save_as,
        "wb",
        desc=url.split("?")[0] if "?" in url else url,
        total=int(response.headers.get("content-length", 0)),
    )
    if modlocal is not None:
        tt = modlocal.timetuple()
        usetime = time.mktime(tt)
        os.utime(save_as, (usetime, usetime))
    return save_as


CACHE_DOWNLOADED = {}
CACHE_LOCK_FILE = "/tmp/firestarr_cache.lock"


def save_http(
    url,
    save_as,
    keep_existing,
    fct_pre_save,
    fct_post_save,
):
    if not save_as:
        raise RuntimeError("Expected save_as to be specified")

    def do_save(save_as_):
        # if any existing file and keep_existing then assume current
        if save_as_ not in CACHE_DOWNLOADED:
            with lock_for(save_as_, remove_after=True, remove_on_exception=True):
                with remove_on_exception(save_as_, f"Failed getting {url}"):
                    if save_as_ not in CACHE_DOWNLOADED:
                        if not (os.path.isfile(save_as_) and keep_existing):
                            save_as_ = _save_http_cached(
                                (fct_pre_save or do_nothing)(url), save_as_
                            )
                        with FileLock(CACHE_LOCK_FILE, -1):
                            CACHE_DOWNLOADED[save_as_] = save_as_
                if save_as_ not in CACHE_DOWNLOADED:
                    raise RuntimeError(
                        "Expected to have result for {save_as_} in cache"
                    )
        return CACHE_DOWNLOADED[save_as_]

    return (fct_post_save or do_nothing)(do_save(save_as))


def mask_url(url):
    global WAS_MASKED
    r = urllib.parse.urlparse(url)
    if not FLAG_DEBUG and r.query:
        args = urllib.parse.parse_qs(r.query)
        for k in args.keys():
            if k not in SAFE_PARAMS:
                WAS_MASKED.add(k)
                args[k] = [MASK_PARAM]
        r = r._replace(query="&".join(f"{k}={','.join(v)}" for k, v in args.items()))
    return urllib.parse.urlunparse(r)


def try_save_http(
    url,
    save_as,
    keep_existing,
    fct_pre_save,
    fct_post_save,
    max_save_retries=RETRY_MAX_ATTEMPTS,
    check_code=False,
):
    save_tries = 0
    while True:
        try:
            with remove_on_exception(save_as):
                return save_http(
                    url, save_as, keep_existing, fct_pre_save, fct_post_save
                )
        except Exception as ex:
            logging.info(f"Caught {ex} in {__name__}")
            if isinstance(ex, KeyboardInterrupt):
                raise ex
            m = mask_url(url)
            # no point in retrying if URL doesn't exist or is forbidden
            if check_code and isinstance(ex, HTTPError) and ex.code in [403, 404]:
                # if we're checking for code then return None since file can't exist
                with FileLock(CACHE_LOCK_FILE, -1):
                    CACHE_DOWNLOADED[save_as] = None
                return None
            if FLAG_DEBUG or save_tries >= max_save_retries:
                logging.error(
                    f"Downloading {m} to {save_as} - Failed after {save_tries} attempts"
                )
                raise ex
            logging.warning(f"Downloading {m} to {save_as} - Retrying after:\n\t{ex}")
            time.sleep(RETRY_DELAY)
            save_tries += 1