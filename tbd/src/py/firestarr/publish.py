import datetime
import itertools
import os
import shutil
import time

import gis
from common import (
    CREATION_OPTIONS,
    DIR_OUTPUT,
    DIR_ZIP,
    FMT_DATE_YMD,
    FORMAT_OUTPUT,
    PUBLISH_AZURE_WAIT_TIME_SECONDS,
    call_safe,
    ensure_dir,
    list_dirs,
    listdir_sorted,
    logging,
    zip_folder,
)
from gdal_merge_max import gdal_merge_max
from tqdm_util import tqdm


def merge_safe(*args, **kwargs):
    return call_safe(gdal_merge_max, *args, **kwargs)


def publish_all(dir_current=None, changed_only=True, force=False, force_project=False):
    dir_current = find_latest_outputs(dir_current)
    changed = merge_dirs(
        dir_current, changed_only=changed_only, force=force, force_project=force_project
    )
    if changed or force:
        import publish_azure

        publish_azure.upload_dir(dir_current)
        # HACK: might be my imagination, but maybe there's a delay so wait a bit
        time.sleep(PUBLISH_AZURE_WAIT_TIME_SECONDS)
        import publish_geoserver

        publish_geoserver.publish_folder(dir_current)


def find_latest_outputs(dir_output=None):
    if dir_output is None:
        dir_default = DIR_OUTPUT
        dirs_with_initial = [
            x
            for x in list_dirs(dir_default)
            if os.path.isdir(os.path.join(dir_default, x, "initial"))
        ]
        if dirs_with_initial:
            dir_output = os.path.join(dir_default, dirs_with_initial[-1])
            logging.info("Defaulting to directory %s", dir_output)
            return dir_output
        else:
            raise RuntimeError(
                f'find_latest_outputs("{dir_output}") failed: No run found'
            )
    return dir_output


def merge_dirs(
    dir_input=None,
    changed_only=True,
    force=False,
    force_project=False,
    creation_options=CREATION_OPTIONS,
):
    any_change = False
    dir_input = find_latest_outputs(dir_input)
    # expecting dir_input to be a path ending in a runid of form '%Y%m%d%H%M'
    dir_base = os.path.join(dir_input, "initial")
    if not os.path.isdir(dir_base):
        raise RuntimeError(f"Directory {dir_base} missing")
    run_name = os.path.basename(dir_input)
    run_id = run_name[run_name.index("_") + 1 :]
    logging.info("Merging {}".format(dir_base))
    co = list(
        itertools.chain.from_iterable(map(lambda x: ["-co", x], creation_options))
    )
    dir_parent = os.path.dirname(dir_base)
    # want to put probability and perims together
    dir_out = ensure_dir(os.path.join(dir_parent, "combined"))
    files_by_for_what = {}
    for for_what in list_dirs(dir_base):
        dir_for_what = os.path.join(dir_base, for_what)
        files_by_for_what[for_what] = files_by_for_what.get(for_what, []) + [
            os.path.join(dir_for_what, x)
            for x in listdir_sorted(dir_for_what)
            if x.endswith(".tif")
        ]
    dirs_what = [os.path.basename(for_what) for for_what in files_by_for_what.keys()]
    for_dates = [
        datetime.datetime.strptime(_, FMT_DATE_YMD) for _ in dirs_what if "perim" != _
    ]
    date_origin = min(for_dates)
    for for_what, files in tqdm(
        files_by_for_what.items(), desc=f"Merging {dir_parent}"
    ):
        files = files_by_for_what[for_what]
        dir_in_for_what = os.path.basename(for_what)
        # HACK: forget about tiling and just do what we need now
        if "perim" == dir_in_for_what:
            dir_for_what = "perim"
            date_cur = for_dates[0]
            description = "perimeter"
        else:
            date_cur = datetime.datetime.strptime(dir_in_for_what, FMT_DATE_YMD)
            offset = (date_cur - date_origin).days + 1
            dir_for_what = f"day_{offset:02d}"
            description = "probability"
        dir_crs = ensure_dir(os.path.join(dir_parent, "reprojected", dir_in_for_what))

        def reproject(f):
            changed = False
            f_crs = os.path.join(dir_crs, os.path.basename(f))
            # don't project if file already exists, but keep track of file for merge
            if force_project or not os.path.isfile(f_crs):
                # FIX: this is super slow for perim tifs
                #       (because they're the full extent of the UTM zone?)
                b = gis.project_raster(
                    f,
                    f_crs,
                    resolution=100,
                    nodata=0,
                    crs=f"EPSG:{gis.CRS_COMPARISON}",
                )
                if b is None:
                    return b
                changed = True
            return changed, f_crs

        results_crs = [
            reproject(f)
            for f in tqdm(files, desc=f"Reprojecting for {dir_in_for_what}")
        ]
        # results_crs = pmap(reproject, files, desc=f"Reprojecting for {dir_in_for_what}")
        results_crs = [x for x in results_crs if x is not None]
        files_crs = [x[1] for x in results_crs]
        files_crs_changed = [x[1] for x in results_crs if x[0]]
        changed = 0 < len(files_crs_changed)
        file_root = os.path.join(
            dir_out, f"firestarr_{run_id}_{dir_for_what}_{date_cur.strftime('%Y%m%d')}"
        )
        file_tmp = f"{file_root}_tmp.tif"
        file_base = f"{file_root}.tif"
        # argv = (["", "-a_nodata", "-1"]
        #     + co
        #     + ["-o", file_tmp]
        #     + files_crs)
        # no point in doing this if nothing was added
        if force or changed or not os.path.isfile(file_base):
            # HACK: seems like currently making empty combined raster so delete first
            #       in case it's merging into existing and causing problems
            if os.path.isfile(file_tmp):
                os.remove(file_tmp)
            if changed_only and os.path.isfile(file_base):
                files_merge = files_crs_changed + [file_base]
            else:
                files_merge = files_crs
            merge_safe(
                (
                    [
                        "",
                        # "-n", "0",
                        "-a_nodata",
                        "-1",
                        "-d",
                        description,
                    ]
                    + co
                    + ["-o", file_tmp]
                    + files_merge
                )
            )
            if os.path.isfile(file_base):
                os.remove(file_base)
            if "GTiff" == FORMAT_OUTPUT:
                shutil.move(file_tmp, file_base)
            else:
                # HACK: reproject should basically just be copy?
                # convert to COG
                gis.project_raster(
                    file_tmp,
                    file_base,
                    nodata=-1,
                    resolution=100,
                    format=FORMAT_OUTPUT,
                    crs=f"EPSG:{gis.CRS_COMPARISON}",
                    options=creation_options
                    + [
                        # shouldn't need much precision just for web display
                        "NBITS=16",
                        # shouldn't need alpha?
                        # "ADD_ALPHA=NO",
                        # "SPARSE_OK=TRUE",
                        "PREDICTOR=YES",
                    ],
                )
                os.remove(file_tmp)
            changed = True
            any_change = any_change or changed
        else:
            logging.info(f"Output already exists for {file_base}")

    logging.info("Final results of merge are in %s", dir_out)
    run_id = os.path.basename(dir_input)
    file_zip = os.path.join(DIR_ZIP, f"{run_name}.zip")
    if any_change or not os.path.isfile(file_zip):
        logging.info("Creating archive %s", file_zip)
        zip_folder(file_zip, dir_out)
    return any_change
