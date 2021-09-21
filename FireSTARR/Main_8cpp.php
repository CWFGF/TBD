<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/Main.cpp File Reference</title>
<link href="tabs.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="jquery.js"></script>
<script type="text/javascript" src="dynsections.js"></script>
<link href="search/search.css" rel="stylesheet" type="text/css"/>
<script type="text/javascript" src="search/searchdata.js"></script>
<script type="text/javascript" src="search/search.js"></script>
<link href="doxygen.css" rel="stylesheet" type="text/css" />
</head>
<body>
<div id="top"><!-- do not remove this div, it is closed by doxygen! -->
<div id="titlearea">
<table cellspacing="0" cellpadding="0">
 <tbody>
 <tr style="height: 56px;">
  <td id="projectalign" style="padding-left: 0.5em;">
   <div id="projectname">FireSTARR
   </div>
  </td>
 </tr>
 </tbody>
</table>
</div>
<!-- end header part -->
<!-- Generated by Doxygen 1.9.1 -->
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
var searchBox = new SearchBox("searchBox", "search",false,'Search','.php');
/* @license-end */
</script>
<script type="text/javascript" src="menudata.js"></script>
<script type="text/javascript" src="menu.js"></script>
<script type="text/javascript">
/* @license magnet:?xt=urn:btih:cf05388f2679ee054f2beb29a391d25f4e673ac3&amp;dn=gpl-2.0.txt GPL-v2 */
$(function() {
  initMenu('',true,false,'search.php','Search');
  $(document).ready(function() { init_search(); });
});
/* @license-end */</script>
<div id="main-nav"></div>
<!-- window showing the filter options -->
<div id="MSearchSelectWindow"
     onmouseover="return searchBox.OnSearchSelectShow()"
     onmouseout="return searchBox.OnSearchSelectHide()"
     onkeydown="return searchBox.OnSearchSelectKey(event)">
</div>

<!-- iframe showing the search results (closed by default) -->
<div id="MSearchResultsWindow">
<iframe src="javascript:void(0)" frameborder="0" 
        name="MSearchResults" id="MSearchResults">
</iframe>
</div>

<div id="nav-path" class="navpath">
  <ul>
<li class="navelem"><a class="el" href="dir_4d88195d9c9596897c1a7e6e6c1a3b9e.php">FireSTARR</a></li><li class="navelem"><a class="el" href="dir_fee61d26c5aa45e5f9c842f18eee2357.php">src</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">Main.cpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="stdafx_8h_source.php">stdafx.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Model_8h_source.php">Model.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Scenario_8h_source.php">Scenario.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Test_8h_source.php">Test.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="TimeUtil_8h_source.php">TimeUtil.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Util_8h_source.php">Util.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="InnerPos_8h_source.php">InnerPos.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Log_8h_source.php">Log.h</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Main.cpp:</div>
<div class="dyncontent">
<div class="center"><img src="Main_8cpp__incl.png" border="0" usemap="#aFireSTARR_2src_2Main_8cpp" alt=""/></div>
<map name="aFireSTARR_2src_2Main_8cpp" id="aFireSTARR_2src_2Main_8cpp">
<area shape="rect" title=" " alt="" coords="1372,5,1539,32"/>
<area shape="rect" href="stdafx_8h.php" title=" " alt="" coords="1661,155,1727,181"/>
<area shape="rect" href="Model_8h.php" title=" " alt="" coords="246,155,313,181"/>
<area shape="rect" href="Scenario_8h.php" title=" " alt="" coords="317,80,399,107"/>
<area shape="rect" href="InnerPos_8h.php" title=" " alt="" coords="759,155,843,181"/>
<area shape="rect" href="Test_8h.php" title=" " alt="" coords="1459,80,1518,107"/>
<area shape="rect" href="TimeUtil_8h.php" title=" " alt="" coords="3663,155,3744,181"/>
<area shape="rect" href="Util_8h.php" title=" " alt="" coords="1543,80,1595,107"/>
<area shape="rect" href="Log_8h.php" title=" " alt="" coords="1671,80,1725,107"/>
<area shape="rect" title=" " alt="" coords="2855,229,2909,256"/>
<area shape="rect" title=" " alt="" coords="2934,229,2995,256"/>
<area shape="rect" title=" " alt="" coords="3019,229,3094,256"/>
<area shape="rect" title=" " alt="" coords="3118,229,3169,256"/>
<area shape="rect" title=" " alt="" coords="3193,229,3254,256"/>
<area shape="rect" title=" " alt="" coords="3279,229,3344,256"/>
<area shape="rect" title=" " alt="" coords="3369,229,3427,256"/>
<area shape="rect" title=" " alt="" coords="618,229,677,256"/>
<area shape="rect" title=" " alt="" coords="701,229,767,256"/>
<area shape="rect" title=" " alt="" coords="331,229,388,256"/>
<area shape="rect" title=" " alt="" coords="791,229,858,256"/>
<area shape="rect" title=" " alt="" coords="883,229,961,256"/>
<area shape="rect" title=" " alt="" coords="412,229,467,256"/>
<area shape="rect" title=" " alt="" coords="986,229,1053,256"/>
<area shape="rect" title=" " alt="" coords="1077,229,1149,256"/>
<area shape="rect" title=" " alt="" coords="1173,229,1236,256"/>
<area shape="rect" title=" " alt="" coords="1261,229,1314,256"/>
<area shape="rect" title=" " alt="" coords="556,229,595,256"/>
<area shape="rect" title=" " alt="" coords="1338,229,1477,256"/>
<area shape="rect" title=" " alt="" coords="1501,229,1557,256"/>
<area shape="rect" title=" " alt="" coords="5,229,52,256"/>
<area shape="rect" title=" " alt="" coords="76,229,144,256"/>
<area shape="rect" title=" " alt="" coords="3663,229,3744,256"/>
<area shape="rect" title=" " alt="" coords="3769,229,3867,256"/>
<area shape="rect" title=" " alt="" coords="1580,229,1645,256"/>
<area shape="rect" title=" " alt="" coords="491,229,531,256"/>
<area shape="rect" title=" " alt="" coords="1669,229,1719,256"/>
<area shape="rect" title=" " alt="" coords="1743,229,1810,256"/>
<area shape="rect" title=" " alt="" coords="1834,229,1914,256"/>
<area shape="rect" title=" " alt="" coords="1938,229,2007,256"/>
<area shape="rect" title=" " alt="" coords="2031,229,2095,256"/>
<area shape="rect" title=" " alt="" coords="252,229,307,256"/>
<area shape="rect" title=" " alt="" coords="2119,229,2183,256"/>
<area shape="rect" title=" " alt="" coords="2207,229,2295,256"/>
<area shape="rect" title=" " alt="" coords="3528,229,3639,256"/>
<area shape="rect" title=" " alt="" coords="3452,229,3504,256"/>
<area shape="rect" title=" " alt="" coords="169,229,227,256"/>
<area shape="rect" title=" " alt="" coords="2319,229,2474,256"/>
<area shape="rect" title=" " alt="" coords="2498,229,2605,256"/>
<area shape="rect" title=" " alt="" coords="2629,229,2759,256"/>
<area shape="rect" title=" " alt="" coords="2784,229,2831,256"/>
</map>
</div>
</div>
<p><a href="Main_8cpp_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a0384b0585f68a5d6f7365569b719550c"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="Main_8cpp.php#a0384b0585f68a5d6f7365569b719550c">show_usage_and_exit</a> (const char *name)</td></tr>
<tr class="separator:a0384b0585f68a5d6f7365569b719550c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a73ba90a97f6c650c66f26f5a6e6c008d"><td class="memItemLeft" align="right" valign="top">const char *&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="Main_8cpp.php#a73ba90a97f6c650c66f26f5a6e6c008d">get_arg</a> (const char *const name, int *i, const int argc, const char *const argv[]) noexcept</td></tr>
<tr class="separator:a73ba90a97f6c650c66f26f5a6e6c008d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aee608aedd5b0b58f2966c2ff15101925"><td class="memItemLeft" align="right" valign="top">int&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="Main_8cpp.php#aee608aedd5b0b58f2966c2ff15101925">main</a> (const int argc, const char *const argv[])</td></tr>
<tr class="separator:aee608aedd5b0b58f2966c2ff15101925"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<h2 class="groupheader">Function Documentation</h2>
<a id="a73ba90a97f6c650c66f26f5a6e6c008d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a73ba90a97f6c650c66f26f5a6e6c008d">&#9670;&nbsp;</a></span>get_arg()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">const char* get_arg </td>
          <td>(</td>
          <td class="paramtype">const char *const&#160;</td>
          <td class="paramname"><em>name</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">int *&#160;</td>
          <td class="paramname"><em>i</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const int&#160;</td>
          <td class="paramname"><em>argc</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *const&#160;</td>
          <td class="paramname"><em>argv</em>[]&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="Main_8cpp_source.php#l00067">67</a> of file <a class="el" href="Main_8cpp_source.php">Main.cpp</a>.</p>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="Main_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_cgraph.png" border="0" usemap="#aMain_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_cgraph" alt=""/></div>
<map name="aMain_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_cgraph" id="aMain_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_cgraph">
<area shape="rect" title=" " alt="" coords="5,13,71,39"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a7ecc8a94d5ffa708b378cfa37e8d4fe5" title=" " alt="" coords="119,5,231,47"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a4e14a9d6e63b99c959e0d7530e1f422a" title="Log a fatal error and quit." alt="" coords="279,5,391,47"/>
</map>
</div>
<div class="dynheader">
Here is the caller graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="Main_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_icgraph.png" border="0" usemap="#aMain_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_icgraph" alt=""/></div>
<map name="aMain_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_icgraph" id="aMain_8cpp_a73ba90a97f6c650c66f26f5a6e6c008d_icgraph">
<area shape="rect" title=" " alt="" coords="104,5,169,32"/>
<area shape="rect" href="Main_8cpp.php#aee608aedd5b0b58f2966c2ff15101925" title=" " alt="" coords="5,5,56,32"/>
</map>
</div>

</div>
</div>
<a id="aee608aedd5b0b58f2966c2ff15101925"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aee608aedd5b0b58f2966c2ff15101925">&#9670;&nbsp;</a></span>main()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">int main </td>
          <td>(</td>
          <td class="paramtype">const int&#160;</td>
          <td class="paramname"><em>argc</em>, </td>
        </tr>
        <tr>
          <td class="paramkey"></td>
          <td></td>
          <td class="paramtype">const char *const&#160;</td>
          <td class="paramname"><em>argv</em>[]&#160;</td>
        </tr>
        <tr>
          <td></td>
          <td>)</td>
          <td></td><td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="Main_8cpp_source.php#l00080">80</a> of file <a class="el" href="Main_8cpp_source.php">Main.cpp</a>.</p>
<div class="dynheader">
Here is the call graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="Main_8cpp_aee608aedd5b0b58f2966c2ff15101925_cgraph.png" border="0" usemap="#aMain_8cpp_aee608aedd5b0b58f2966c2ff15101925_cgraph" alt=""/></div>
<map name="aMain_8cpp_aee608aedd5b0b58f2966c2ff15101925_cgraph" id="aMain_8cpp_aee608aedd5b0b58f2966c2ff15101925_cgraph">
<area shape="rect" title=" " alt="" coords="5,1549,56,1576"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a4253b6677b26aa72ac4e784e0891af82" title="Log with DEBUG level." alt="" coords="571,82,683,123"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a4e14a9d6e63b99c959e0d7530e1f422a" title="Log a fatal error and quit." alt="" coords="984,2036,1096,2078"/>
<area shape="rect" href="Main_8cpp.php#a73ba90a97f6c650c66f26f5a6e6c008d" title=" " alt="" coords="147,1492,212,1518"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#ae505e6144c4c8127c9870e1dfa81039b" title="Log with INFO level." alt="" coords="796,687,908,728"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#ae3b22e446ec7ab8aad35999e15b014b0" title="Make the given directory and any parent directories that do not exist." alt="" coords="557,2238,696,2279"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a0ce472ba500e288fc9ddce4fe754ff9a" title="Log with NOTE level." alt="" coords="571,578,683,619"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Model.php#a198b3a0ff8f350f80b61142c2cde3d5f" title="Run Scenarios initialized from given inputs." alt="" coords="113,754,246,795"/>
<area shape="rect" href="Main_8cpp.php#a0384b0585f68a5d6f7365569b719550c" title=" " alt="" coords="104,2338,255,2365"/>
<area shape="rect" href="namespacefirestarr_1_1wx.php#ad3cd5a25917f9b17ed935ca459ea2d64" title=" " alt="" coords="120,2389,239,2416"/>
<area shape="rect" href="namespacefirestarr_1_1sim.php#a96b22fe1cbbbe23ee5add23f198bf3d6" title="Runs test cases for constant weather and fuel based on given arguments." alt="" coords="119,1742,239,1769"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#a6e852990deb9c44ea6b0a158eef08fc6" title="Convert to local time." alt="" coords="116,2440,243,2466"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#af593934bad06e48689405ed621934f1c" title="Log with WARNING level." alt="" coords="796,300,908,342"/>
<area shape="rect" href="classfirestarr_1_1logging_1_1Log.php#a2bbec15b677b9f38e8e0cec0ee46d41c" title="Get current logging level." alt="" coords="976,410,1104,451"/>
<area shape="rect" href="classfirestarr_1_1logging_1_1Log.php#aeae41fa8b4fe6765c7ed57763e293a63" title="Output a message to the log." alt="" coords="984,519,1096,560"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a7ecc8a94d5ffa708b378cfa37e8d4fe5" title=" " alt="" coords="796,1428,908,1470"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#af84e30648d870de9e0a25f7d604f3889" title="Make the given directory if it does not exist." alt="" coords="789,2223,915,2264"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Scenario.php#a1f8476498c53de1e598e4abe00908bc4" title="Number of Scenarios that have completed running." alt="" coords="315,695,465,736"/>
<area shape="rect" href="namespacefirestarr_1_1topo.php#a413f3a673f33e4fa3c2ffdabd2ce14cb" title="Converts a latitude/longitude pair to x and y coordinates in the UTM projection." alt="" coords="332,2067,448,2108"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1Point.php#aef13d155b163a77c85e0ed82dbf37bd8" title="Latitude (decimal degrees)" alt="" coords="561,147,693,188"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1Environment.php#ab40c5e443a96f64a748991efe007d855" title="Load from rasters in folder that have same projection as Perimeter." alt="" coords="303,424,477,466"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Model.php#aa426303dd9471bfc0f772042b64d7ed9" title="Make starts based on desired point and where nearest combustible cells are." alt="" coords="323,1571,457,1612"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Settings.php#a340f69382e8b8cde4fa1dc0e9981ac5e" title="Whatever the maximum value in the date offsets is." alt="" coords="317,1924,463,1966"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Model.php#acc76ae427ef30745a022b23628560b30" title="Read weather used for Scenarios." alt="" coords="323,978,457,1019"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Model.php#ad73313aead546785538f27f53fe0f914" title="Run Iterations until confidence is reached." alt="" coords="323,359,457,400"/>
<area shape="rect" href="namespacefirestarr_1_1sim.php#a358c5a6e4f5d5c1deb457ddee3c9a59a" title=" " alt="" coords="325,242,455,283"/>
<area shape="rect" href="namespacefirestarr_1_1topo.php#a1abcffe1770ea4198f8531573ba41f17" title="Converts a latitude/longitude pair to Transverse Mercator x and y coordinates." alt="" coords="563,2055,690,2096"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#a9a56b59e9e56e464019be9064248e613" title="Convert degrees to radians." alt="" coords="799,2128,905,2170"/>
<area shape="rect" href="namespacefirestarr_1_1topo.php#a335cf8c34493816d17377f3731327092" title=" " alt="" coords="565,2172,689,2214"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1Environment.php#ad0849fbd7936e33e6e8e679820449641" title="Elevation of the origin Point." alt="" coords="539,330,714,371"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#a01f442cbfac0eb7538a6eeb690d45311" title="Get a list of rasters in the given directory for the specified year." alt="" coords="569,395,684,436"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1EnvironmentInfo.php#ad7715ea6cc4f099e475205eb1faa54c9" title="Load EnvironmentInfo from given rasters." alt="" coords="539,460,714,502"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1Point.php#aad26ed97f8a0b7d2cbc103c29fce5f1c" title="Longitude (decimal degrees)" alt="" coords="561,212,693,254"/>
<area shape="rect" href="namespacefirestarr_1_1logging.php#a348ff451a66eac8e3d5c853ee9a1b75c" title="Log with VERBOSE level." alt="" coords="796,519,908,560"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Model.php#aba49482a87f60a7222c6329513996d25" title="Cell at the given row and column." alt="" coords="785,1764,919,1806"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1Environment.php#a6bf714ddd3ad0a465c572c8ef5ba5041" title="Cell width and height (m)" alt="" coords="539,1487,714,1528"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Model.php#a197a6f13fe401f0224fb6d6ff8314e76" title="Find Cell(s) that can burn closest to Location." alt="" coords="560,1655,693,1696"/>
<area shape="rect" href="classfirestarr_1_1topo_1_1Location.php#a0e35097431076ed861481ea096476b64" title="Hash derived from row and column." alt="" coords="776,1606,928,1647"/>
<area shape="rect" href="namespacefirestarr_1_1fuel.php#aa4ed31c7956cc53b1e796260fe176c42" title="Whether or not there is no fuel in the Cell." alt="" coords="798,1690,906,1731"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1SettingsImplementation.php#a230bb0270a6af6f854d3ac24d3c9998e" title="The singleton instance for this class." alt="" coords="543,1990,710,2031"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1SettingsImplementation.php#ab547350aa93eb2d6d8cf650ad3361b5e" title="Whatever the maximum value in the date offsets is." alt="" coords="525,1924,728,1966"/>
<area shape="rect" href="classfirestarr_1_1wx_1_1Weather.php#a64679ced60e846f3365ae1a945f191af" title="Accumulated Precipitation (mm)" alt="" coords="556,1167,697,1208"/>
<area shape="rect" href="classfirestarr_1_1wx_1_1FwiWeather.php#a299feb4995bf556227cc26a63f7f01ad" title="Drought Code." alt="" coords="535,1233,718,1260"/>
<area shape="rect" href="classfirestarr_1_1wx_1_1FwiWeather.php#a024781d0d515d867b6db0ceb46b36f1c" title="Duff Moisture Code." alt="" coords="530,897,723,924"/>
<area shape="rect" href="classfirestarr_1_1wx_1_1FwiWeather.php#a3ab779b53574913ad72cef08d90f450b" title="Fine Fuel Moisture Code." alt="" coords="545,948,708,990"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#a933f0ea560bbcbddf9b1233b359dac3c" title="Read from a stream until delimiter is found." alt="" coords="786,1040,918,1066"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#af3454ef26fced73a1407de0ecdf63574" title="Read a date from the given stream." alt="" coords="551,1065,702,1092"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1Settings.php#a16d719ae8ef9ba23fee5f4b457ce21b3" title="Name of file that defines fuel lookup table." alt="" coords="317,1990,463,2031"/>
<area shape="rect" href="namespacefirestarr_1_1sim.php#a1ad746b67bf7b564d3065891f9a62ffa" title=" " alt="" coords="317,1742,463,1769"/>
<area shape="rect" href="namespacefirestarr_1_1util.php#a9f500e44d7820ce2aab999f0df130089" title="Convert from TIMESTAMP_STRUCT to tm." alt="" coords="337,2432,443,2474"/>
</map>
</div>

</div>
</div>
<a id="a0384b0585f68a5d6f7365569b719550c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a0384b0585f68a5d6f7365569b719550c">&#9670;&nbsp;</a></span>show_usage_and_exit()</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">void show_usage_and_exit </td>
          <td>(</td>
          <td class="paramtype">const char *&#160;</td>
          <td class="paramname"><em>name</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="Main_8cpp_source.php#l00033">33</a> of file <a class="el" href="Main_8cpp_source.php">Main.cpp</a>.</p>
<div class="dynheader">
Here is the caller graph for this function:</div>
<div class="dyncontent">
<div class="center"><img src="Main_8cpp_a0384b0585f68a5d6f7365569b719550c_icgraph.png" border="0" usemap="#aMain_8cpp_a0384b0585f68a5d6f7365569b719550c_icgraph" alt=""/></div>
<map name="aMain_8cpp_a0384b0585f68a5d6f7365569b719550c_icgraph" id="aMain_8cpp_a0384b0585f68a5d6f7365569b719550c_icgraph">
<area shape="rect" title=" " alt="" coords="104,5,255,32"/>
<area shape="rect" href="Main_8cpp.php#aee608aedd5b0b58f2966c2ff15101925" title=" " alt="" coords="5,5,56,32"/>
</map>
</div>

</div>
</div>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
