<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/FuelType.h File Reference</title>
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
<a href="#nested-classes">Classes</a> &#124;
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a> &#124;
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">FuelType.h File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="Duff_8h_source.php">Duff.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="FireWeather_8h_source.php">FireWeather.h</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for FuelType.h:</div>
<div class="dyncontent">
<div class="center"><img src="FuelType_8h__incl.png" border="0" usemap="#aFireSTARR_2src_2FuelType_8h" alt=""/></div>
<map name="aFireSTARR_2src_2FuelType_8h" id="aFireSTARR_2src_2FuelType_8h">
<area shape="rect" title=" " alt="" coords="2210,5,2387,32"/>
<area shape="rect" href="Duff_8h.php" title=" " alt="" coords="2221,80,2275,107"/>
<area shape="rect" href="FireWeather_8h.php" title=" " alt="" coords="2993,80,3095,107"/>
<area shape="rect" href="LookupTable_8h.php" title=" " alt="" coords="1392,229,1499,256"/>
<area shape="rect" href="Util_8h.php" title=" " alt="" coords="1713,379,1765,405"/>
<area shape="rect" href="stdafx_8h.php" title=" " alt="" coords="1776,453,1843,480"/>
<area shape="rect" title=" " alt="" coords="3143,528,3198,555"/>
<area shape="rect" title=" " alt="" coords="166,528,277,555"/>
<area shape="rect" title=" " alt="" coords="301,528,353,555"/>
<area shape="rect" title=" " alt="" coords="5,528,64,555"/>
<area shape="rect" title=" " alt="" coords="1927,528,1982,555"/>
<area shape="rect" title=" " alt="" coords="2007,528,2068,555"/>
<area shape="rect" title=" " alt="" coords="2092,528,2167,555"/>
<area shape="rect" title=" " alt="" coords="2191,528,2241,555"/>
<area shape="rect" title=" " alt="" coords="2265,528,2327,555"/>
<area shape="rect" title=" " alt="" coords="2351,528,2417,555"/>
<area shape="rect" title=" " alt="" coords="2441,528,2500,555"/>
<area shape="rect" title=" " alt="" coords="2524,528,2583,555"/>
<area shape="rect" title=" " alt="" coords="2607,528,2673,555"/>
<area shape="rect" title=" " alt="" coords="2697,528,2754,555"/>
<area shape="rect" title=" " alt="" coords="2779,528,2845,555"/>
<area shape="rect" title=" " alt="" coords="2870,528,2949,555"/>
<area shape="rect" title=" " alt="" coords="2973,528,3027,555"/>
<area shape="rect" title=" " alt="" coords="377,528,444,555"/>
<area shape="rect" title=" " alt="" coords="468,528,540,555"/>
<area shape="rect" title=" " alt="" coords="565,528,627,555"/>
<area shape="rect" title=" " alt="" coords="88,528,141,555"/>
<area shape="rect" title=" " alt="" coords="651,528,690,555"/>
<area shape="rect" title=" " alt="" coords="715,528,853,555"/>
<area shape="rect" title=" " alt="" coords="877,528,933,555"/>
<area shape="rect" title=" " alt="" coords="3287,528,3334,555"/>
<area shape="rect" title=" " alt="" coords="3051,528,3119,555"/>
<area shape="rect" title=" " alt="" coords="958,528,1039,555"/>
<area shape="rect" title=" " alt="" coords="1064,528,1163,555"/>
<area shape="rect" title=" " alt="" coords="1187,528,1253,555"/>
<area shape="rect" title=" " alt="" coords="3223,528,3263,555"/>
<area shape="rect" title=" " alt="" coords="1277,528,1326,555"/>
<area shape="rect" title=" " alt="" coords="1351,528,1417,555"/>
<area shape="rect" title=" " alt="" coords="1441,528,1521,555"/>
<area shape="rect" title=" " alt="" coords="1545,528,1615,555"/>
<area shape="rect" title=" " alt="" coords="1639,528,1703,555"/>
<area shape="rect" title=" " alt="" coords="1727,528,1791,555"/>
<area shape="rect" title=" " alt="" coords="1815,528,1903,555"/>
<area shape="rect" href="FuelLookup_8h.php" title=" " alt="" coords="2893,155,2993,181"/>
<area shape="rect" href="FWI_8h.php" title=" " alt="" coords="3024,229,3080,256"/>
<area shape="rect" href="Log_8h.php" title=" " alt="" coords="3082,155,3137,181"/>
<area shape="rect" href="Cell_8h.php" title=" " alt="" coords="1751,229,1806,256"/>
<area shape="rect" href="Location_8h.php" title=" " alt="" coords="1776,304,1859,331"/>
<area shape="rect" href="Weather_8h.php" title=" " alt="" coords="3075,304,3155,331"/>
<area shape="rect" href="Index_8h.php" title=" " alt="" coords="3083,379,3146,405"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="FuelType_8h__dep__incl.png" border="0" usemap="#aFireSTARR_2src_2FuelType_8hdep" alt=""/></div>
<map name="aFireSTARR_2src_2FuelType_8hdep" id="aFireSTARR_2src_2FuelType_8hdep">
<area shape="rect" title=" " alt="" coords="1610,5,1787,32"/>
<area shape="rect" href="Environment_8h.php" title=" " alt="" coords="335,80,531,107"/>
<area shape="rect" href="FireSpread_8cpp.php" title=" " alt="" coords="1446,333,1647,360"/>
<area shape="rect" href="Scenario_8cpp.php" title=" " alt="" coords="1417,408,1607,435"/>
<area shape="rect" href="FireWeather_8cpp.php" title=" " alt="" coords="1709,80,1917,107"/>
<area shape="rect" href="FuelType_8cpp.php" title=" " alt="" coords="1942,80,2133,107"/>
<area shape="rect" href="StandardFuel_8h.php" title=" " alt="" coords="1483,80,1685,107"/>
<area shape="rect" href="Environment_8cpp.php" title=" " alt="" coords="301,333,512,360"/>
<area shape="rect" href="EnvironmentInfo_8cpp.php" title=" " alt="" coords="275,244,461,285"/>
<area shape="rect" href="EnvironmentInfo_8h.php" title=" " alt="" coords="405,155,592,196"/>
<area shape="rect" href="Model_8h.php" title=" " alt="" coords="779,162,938,189"/>
<area shape="rect" href="Perimeter_8cpp.php" title=" " alt="" coords="5,162,200,189"/>
<area shape="rect" href="IntensityMap_8cpp.php" title=" " alt="" coords="610,251,822,278"/>
<area shape="rect" href="Main_8cpp.php" title=" " alt="" coords="587,333,754,360"/>
<area shape="rect" href="Model_8cpp.php" title=" " alt="" coords="1220,408,1393,435"/>
<area shape="rect" href="ProbabilityMap_8cpp.php" title=" " alt="" coords="1473,244,1647,285"/>
<area shape="rect" href="Scenario_8h.php" title=" " alt="" coords="943,251,1118,278"/>
<area shape="rect" href="Test_8cpp.php" title=" " alt="" coords="710,408,874,435"/>
<area shape="rect" href="Iteration_8cpp.php" title=" " alt="" coords="830,333,1015,360"/>
<area shape="rect" href="Observer_8cpp.php" title=" " alt="" coords="981,408,1171,435"/>
<area shape="rect" href="Observer_8h.php" title=" " alt="" coords="1091,333,1269,360"/>
<area shape="rect" href="FBP45_8h.php" title=" " alt="" coords="1553,162,1717,189"/>
<area shape="rect" href="StandardFuel_8cpp.php" title=" " alt="" coords="1741,162,1955,189"/>
<area shape="rect" href="FBP45_8cpp.php" title=" " alt="" coords="1955,251,2133,278"/>
<area shape="rect" href="FuelLookup_8cpp.php" title=" " alt="" coords="1723,251,1930,278"/>
</map>
</div>
</div>
<p><a href="FuelType_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1fuel_1_1FuelType.php">firestarr::fuel::FuelType</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">An FBP fuel type.  <a href="classfirestarr_1_1fuel_1_1FuelType.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1fuel_1_1FuelBase.php">firestarr::fuel::FuelBase&lt; BulkDensity, InorganicPercent, DuffDepth &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Base class for all FuelTypes.  <a href="classfirestarr_1_1fuel_1_1FuelBase.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1fuel_1_1InvalidFuel.php">firestarr::fuel::InvalidFuel</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Placeholder fuel that throws exceptions if it ever gets used.  <a href="classfirestarr_1_1fuel_1_1InvalidFuel.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespacefirestarr"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr.php">firestarr</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacefirestarr_1_1sim"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php">firestarr::sim</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacefirestarr_1_1fuel"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1fuel.php">firestarr::fuel</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a99d92c9ec12d801f291f5d07835b292c"><td class="memItemLeft" align="right" valign="top">constexpr double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1fuel.php#a99d92c9ec12d801f291f5d07835b292c">firestarr::fuel::fire_intensity</a> (const double fc, const double ros)</td></tr>
<tr class="memdesc:a99d92c9ec12d801f291f5d07835b292c"><td class="mdescLeft">&#160;</td><td class="mdescRight">Fire Intensity (kW/m) [ST-X-3 eq 69].  <a href="namespacefirestarr_1_1fuel.php#a99d92c9ec12d801f291f5d07835b292c">More...</a><br /></td></tr>
<tr class="separator:a99d92c9ec12d801f291f5d07835b292c"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:ab80e1b12d46ba9098732b8f41414ec02"><td class="memItemLeft" align="right" valign="top">static constexpr double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1fuel.php#ab80e1b12d46ba9098732b8f41414ec02">firestarr::fuel::DEFAULT_GRASS_FUEL_LOAD</a> = 3.5</td></tr>
<tr class="separator:ab80e1b12d46ba9098732b8f41414ec02"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ac498545567fa6ec705cb0cde188b10de"><td class="memItemLeft" align="right" valign="top">static constexpr double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1fuel.php#ac498545567fa6ec705cb0cde188b10de">firestarr::fuel::DUFF_FFMC_DEPTH</a> = 1.2</td></tr>
<tr class="separator:ac498545567fa6ec705cb0cde188b10de"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
