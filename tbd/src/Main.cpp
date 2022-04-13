// Copyright (c) 2020-2021, Queen's Printer for Ontario.
//
// This program is free software: you can redistribute it and/or modify
// it under the terms of the GNU Affero General Public License as
// published by the Free Software Foundation, either version 3 of the
// License, or (at your option) any later version.
//
// This program is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU Affero General Public License for more details.
//
// You should have received a copy of the GNU Affero General Public License
// along with this program.  If not, see <https://www.gnu.org/licenses/>.

/*! \mainpage TBD Documentation
 *
 * \section intro_sec Introduction
 *
 * TBD is a probabilistic fire growth model.
 */
#include "stdafx.h"
#include "Model.h"
#include "Scenario.h"
#include "Test.h"
#include "TimeUtil.h"
#include "Log.h"
using tbd::logging::Log;
using tbd::sim::Settings;
static const char* BIN_NAME = nullptr;
static map<std::string, std::function<void()>> PARSE_FCT{};
static vector<std::pair<std::string, std::string>> PARSE_HELP{};
void show_usage_and_exit()
{
  cout << "Usage:" << BIN_NAME << " <output_dir> <yyyy-mm-dd> <lat> <lon> <HH:MM> [options] [-v | -q]" << endl
       << endl
       << " Run simulations and save output in the specified directory" << endl
       << endl
       << endl
       << "Usage: " << BIN_NAME << " test <output_dir> <numHours>"
       << "[slope [aspect [wind_speed [wind_direction]]]]" << endl
       << endl
       << " Run test cases and save output in the specified directory" << endl
       << endl
       << " Input Options" << endl;
  for (auto kv : PARSE_HELP)
  {
    printf("   %-25s %s\n", kv.first.c_str(), kv.second.c_str());
  }
  exit(-1);
}
const char* get_arg(const char* const name,
                    int* i,
                    const int argc,
                    const char* const argv[]) noexcept
{
  // check if we don't have any more arguments
  tbd::logging::check_fatal(*i + 1 >= argc, "Missing argument to --%s", name);
  // check if we have another flag right after
  tbd::logging::check_fatal('-' == argv[*i + 1][0],
                            "Missing argument to --%s",
                            name);
  return argv[++*i];
}
template <class T>
T parse_once(bool have_already, std::function<T()> fct)
{
  if (have_already)
  {
    show_usage_and_exit();
  }
  return fct();
}
bool parse_flag(bool have_already)
{
  return parse_once<bool>(have_already,
                          []
                          {
                            return true;
                          });
}
void register_argument(string v, string help, std::function<void()> fct)
{
  PARSE_FCT.emplace(v, fct);
  PARSE_HELP.emplace_back(v, help);
}
int main(const int argc, const char* const argv[])
{
#ifndef NDEBUG
  cout << "**************************************************\n";
  cout << "******************* DEBUG MODE *******************\n";
  cout << "**************************************************\n";
#endif
  // _CrtSetDbgFlag(_CRTDBG_ALLOC_MEM_DF | _CRTDBG_LEAK_CHECK_DF);
  Log::setLogLevel(tbd::logging::LOG_NOTE);
  auto bin = string(argv[0]);
  replace(bin.begin(), bin.end(), '\\', '/');
  const auto end = max(static_cast<size_t>(0), bin.rfind('/') + 1);
  bin = bin.substr(end, bin.size() - end);
  BIN_NAME = bin.c_str();
  register_argument("-h", "Show help", &show_usage_and_exit);
  auto save_intensity = false;
  auto have_confidence = false;
  auto have_output_date_offsets = false;
  string wx_file_name;
  string perim;
  size_t size = 0;
  tbd::wx::Ffmc* ffmc = nullptr;
  tbd::wx::Dmc* dmc = nullptr;
  tbd::wx::Dc* dc = nullptr;
  tbd::wx::AccumulatedPrecipitation* apcp_0800 = nullptr;
  // HACK: use a variable and ++ in case if arg indices change
  auto i = 1;
  // can be used multiple times
  register_argument("-v", "Increase output level", &Log::increaseLogLevel);
  // if they want to specify -v and -q then that's fine
  register_argument("-q", "Decrease output level", &Log::decreaseLogLevel);
  if (argc > 1 && 0 == strcmp(argv[1], "test"))
  {
    if (argc <= 3)
    {
      show_usage_and_exit();
    }
    return tbd::sim::test(argc, argv);
  }
  register_argument("-i",
                    "Save intensity maps for simulations",
                    [&save_intensity]
                    {
                      save_intensity = parse_flag(save_intensity);
                    });
  register_argument("-s",
                    "Run in synchronous mode",
                    []
                    {
                      Settings::setRunAsync(!parse_flag(!Settings::runAsync()));
                    });
  register_argument("--ascii",
                    "Save grids as .asc",
                    []
                    {
                      Settings::setSaveAsAscii(parse_flag(Settings::saveAsAscii()));
                    });
  register_argument("--no-intensity",
                    "Do not output intensity grids",
                    []
                    {
                      Settings::setSaveIntensity(!parse_flag(!Settings::saveIntensity()));
                    });
  register_argument("--no-probability",
                    "Do not output probability grids",
                    []
                    {
                      Settings::setSaveProbability(!parse_flag(!Settings::saveProbability()));
                    });
  register_argument("--occurrence",
                    "Output occurrence grids",
                    []
                    {
                      Settings::setSaveOccurrence(parse_flag(Settings::saveOccurrence()));
                    });
  register_argument("--wx",
                    "Input weather file",
                    [&wx_file_name, &i, argc, argv]
                    {
                      wx_file_name = parse_once<const char*>(!wx_file_name.empty(),
                                                             [&i, argc, argv]
                                                             {
                                                               return get_arg("wx", &i, argc, argv);
                                                             });
                    });

  register_argument("--confidence",
                    "Use specified confidence level",
                    [&have_confidence, &i, argc, argv]
                    {
                      Settings::setConfidenceLevel(parse_once<double>(have_confidence,
                                                                      [&i, argc, argv]
                                                                      {
                                                                        return stod(get_arg("confidence", &i, argc, argv));
                                                                      }));
                    });
  register_argument("--perim",
                    "Start from perimeter",
                    [&perim, &i, argc, argv]
                    {
                      perim = parse_once<const char*>(!perim.empty(),
                                                      [&i, argc, argv]
                                                      {
                                                        return get_arg("perim", &i, argc, argv);
                                                      });
                    });
  register_argument("--size",
                    "Start from size",
                    [&size, &i, argc, argv]
                    {
                      size = parse_once<size_t>(0 != size,
                                                [&i, argc, argv]
                                                {
                                                  return static_cast<size_t>(stoi(get_arg("size", &i, argc, argv)));
                                                });
                    });
  register_argument("--ffmc",
                    "Startup Fine Fuel Moisture Code",
                    [&ffmc, &i, argc, argv]
                    {
                      ffmc = parse_once<tbd::wx::Ffmc*>(nullptr != ffmc,
                                                        [&i, argc, argv]
                                                        {
                                                          return new tbd::wx::Ffmc(stod(get_arg("ffmc", &i, argc, argv)));
                                                        });
                    });
  register_argument("--dmc",
                    "Startup Duff Moisture Code",
                    [&dmc, &i, argc, argv]
                    {
                      dmc = parse_once<tbd::wx::Dmc*>(nullptr != dmc,
                                                      [&i, argc, argv]
                                                      {
                                                        return new tbd::wx::Dmc(stod(get_arg("dmc", &i, argc, argv)));
                                                      });
                    });
  register_argument("--dc",
                    "Startup Drought Code",
                    [&dc, &i, argc, argv]
                    {
                      dc = parse_once<tbd::wx::Dc*>(nullptr != dc,
                                                    [&i, argc, argv]
                                                    {
                                                      return new tbd::wx::Dc(stod(get_arg("dc", &i, argc, argv)));
                                                    });
                    });
  register_argument("--apcp_0800",
                    "Startup 0800 precipitation",
                    [&apcp_0800, &i, argc, argv]
                    {
                      apcp_0800 = parse_once<tbd::wx::AccumulatedPrecipitation*>(nullptr != apcp_0800,
                                                                                 [&i, argc, argv]
                                                                                 {
                                                                                   return new tbd::wx::AccumulatedPrecipitation(stod(get_arg("apcp_0800", &i, argc, argv)));
                                                                                 });
                    });
  register_argument("--output_date_offsets",
                    "Override output date offsets",
                    [&have_output_date_offsets, &i, argc, argv]
                    {
                      Settings::setOutputDateOffsets(parse_once<const char*>(have_output_date_offsets,
                                                                             [&i, argc, argv]
                                                                             {
                                                                               auto offsets = get_arg("output_date_offsets", &i, argc, argv);
                                                                               tbd::logging::warning("Overriding output offsets with %s", offsets);
                                                                               return offsets;
                                                                             }));
                      have_output_date_offsets = true;
                    });
  if (3 > argc)
  {
    show_usage_and_exit();
  }
  try
  {
    if (6 <= argc)
    {
      string output_directory(argv[i++]);
      replace(output_directory.begin(), output_directory.end(), '\\', '/');
      if ('/' != output_directory[output_directory.length() - 1])
      {
        output_directory += '/';
      }
      Settings::setOutputDirectory(output_directory);
      struct stat info
      {
      };
      if (stat(Settings::outputDirectory(), &info) != 0 || !(info.st_mode & S_IFDIR))
      {
        tbd::util::make_directory_recursive(Settings::outputDirectory());
      }
      const string log_file = (string(Settings::outputDirectory()) + "log.txt");
      tbd::logging::check_fatal(!Log::openLogFile(log_file.c_str()),
                                "Can't open log file");
      tbd::logging::note("Output directory is %s", Settings::outputDirectory());
      tbd::logging::note("Output log is %s", log_file.c_str());
      string date(argv[i++]);
      tm start_date{};
      start_date.tm_year = stoi(date.substr(0, 4)) - 1900;
      start_date.tm_mon = stoi(date.substr(5, 2)) - 1;
      start_date.tm_mday = stoi(date.substr(8, 2));
      const auto latitude = stod(argv[i++]);
      const auto longitude = stod(argv[i++]);
      const tbd::topo::StartPoint start_point(latitude, longitude);
      size_t num_days = 0;
      string arg(argv[i++]);
      tm start{};
      if (5 == arg.size() && ':' == arg[2])
      {
        try
        {
          // if this is a time then we aren't just running the weather
          start_date.tm_hour = stoi(arg.substr(0, 2));
          start_date.tm_min = stoi(arg.substr(3, 2));
          tbd::util::fix_tm(&start_date);
          // we were given a time, so number of days is until end of year
          start = start_date;
          const auto start_t = mktime(&start);
          auto year_end = start;
          year_end.tm_mon = 11;
          year_end.tm_mday = 31;
          const auto seconds = difftime(mktime(&year_end), start_t);
          // start day counts too, so +1
          // HACK: but we don't want to go to Jan 1 so don't add 1
          num_days = static_cast<size_t>(seconds / tbd::DAY_SECONDS);
          tbd::logging::debug("Calculated number of days until end of year: %d",
                              num_days);
          // +1 because day 1 counts too
          // +2 so that results don't change when we change number of days
          num_days = min(num_days, static_cast<size_t>(Settings::maxDateOffset()) + 2);
        }
        catch (std::exception&)
        {
          show_usage_and_exit();
        }
        while (i < argc)
        {
          if (PARSE_FCT.find(argv[i]) != PARSE_FCT.end())
          {
            PARSE_FCT[argv[i]]();
          }
          else
          {
            show_usage_and_exit();
          }
          ++i;
        }
      }
      else
      {
        show_usage_and_exit();
      }
      if (wx_file_name.empty())
      {
        tbd::logging::fatal("Weather input file is required");
      }
      if (nullptr == ffmc)
      {
        tbd::logging::fatal("FFMC is required");
      }
      if (nullptr == dmc)
      {
        tbd::logging::fatal("DMC is required");
      }
      if (nullptr == dc)
      {
        tbd::logging::fatal("DC is required");
      }
      if (nullptr == apcp_0800)
      {
        tbd::logging::warning("Assuming 0 precipitation");
        apcp_0800 = new tbd::wx::AccumulatedPrecipitation(0);
      }
      const auto ffmc_fixed = *ffmc;
      const auto dmc_fixed = *dmc;
      const auto dc_fixed = *dc;
      // HACK: ISI for yesterday really doesn't matter so just use any wind
      const auto isi_fixed = tbd::wx::Isi(tbd::wx::Speed(0), ffmc_fixed);
      const auto bui_fixed = tbd::wx::Bui(dmc_fixed, dc_fixed);
      const auto fwi_fixed = tbd::wx::Fwi(isi_fixed, bui_fixed);
      const auto yesterday = tbd::wx::FwiWeather(tbd::wx::Temperature(0),
                                                 tbd::wx::RelativeHumidity(0),
                                                 tbd::wx::Wind(tbd::wx::Direction(0, false), tbd::wx::Speed(0)),
                                                 tbd::wx::AccumulatedPrecipitation(0),
                                                 ffmc_fixed,
                                                 dmc_fixed,
                                                 dc_fixed,
                                                 isi_fixed,
                                                 bui_fixed,
                                                 fwi_fixed);
      tbd::util::fix_tm(&start_date);
      start = start_date;
      cout << "Arguments are:\n";
      for (auto j = 0; j < argc; ++j)
      {
        cout << " " << argv[j];
      }
      cout << "\n";
      return tbd::sim::Model::runScenarios(wx_file_name.c_str(),
                                           Settings::rasterRoot(),
                                           yesterday,
                                           start_point,
                                           start,
                                           save_intensity,
                                           perim,
                                           size);
    }
    show_usage_and_exit();
  }
  catch (const runtime_error& err)
  {
    tbd::logging::fatal(err.what());
  }
  Log::closeLogFile();
}
