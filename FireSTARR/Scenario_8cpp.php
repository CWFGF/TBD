<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/Scenario.cpp File Reference</title>
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
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a> &#124;
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">Scenario.cpp File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &quot;<a class="el" href="stdafx_8h_source.php">stdafx.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Scenario_8h_source.php">Scenario.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Event_8h_source.php">Event.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Grid_8h_source.php">Grid.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Observer_8h_source.php">Observer.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Settings_8h_source.php">Settings.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="FireSpread_8h_source.php">FireSpread.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="FuelLookup_8h_source.php">FuelLookup.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="FuelType_8h_source.php">FuelType.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Log_8h_source.php">Log.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="MemoryPool_8h_source.php">MemoryPool.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Perimeter_8h_source.php">Perimeter.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="ProbabilityMap_8h_source.php">ProbabilityMap.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="SafeVector_8h_source.php">SafeVector.h</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for Scenario.cpp:</div>
<div class="dyncontent">
<div class="center"><img src="Scenario_8cpp__incl.png" border="0" usemap="#aFireSTARR_2src_2Scenario_8cpp" alt=""/></div>
<map name="aFireSTARR_2src_2Scenario_8cpp" id="aFireSTARR_2src_2Scenario_8cpp">
<area shape="rect" title=" " alt="" coords="3059,5,3248,32"/>
<area shape="rect" href="stdafx_8h.php" title=" " alt="" coords="1665,229,1732,256"/>
<area shape="rect" href="Scenario_8h.php" title=" " alt="" coords="2876,229,2959,256"/>
<area shape="rect" href="Settings_8h.php" title=" " alt="" coords="3343,304,3423,331"/>
<area shape="rect" href="Event_8h.php" title=" " alt="" coords="2685,155,2750,181"/>
<area shape="rect" href="Grid_8h.php" title=" " alt="" coords="2983,229,3039,256"/>
<area shape="rect" href="Log_8h.php" title=" " alt="" coords="3234,304,3289,331"/>
<area shape="rect" href="Observer_8h.php" title=" " alt="" coords="2831,80,2916,107"/>
<area shape="rect" href="FireSpread_8h.php" title=" " alt="" coords="3335,155,3430,181"/>
<area shape="rect" href="FuelLookup_8h.php" title=" " alt="" coords="2701,229,2801,256"/>
<area shape="rect" href="FuelType_8h.php" title=" " alt="" coords="3479,80,3564,107"/>
<area shape="rect" href="MemoryPool_8h.php" title=" " alt="" coords="3588,80,3692,107"/>
<area shape="rect" href="Perimeter_8h.php" title=" " alt="" coords="3113,229,3201,256"/>
<area shape="rect" href="ProbabilityMap_8h.php" title=" " alt="" coords="3143,155,3260,181"/>
<area shape="rect" href="SafeVector_8h.php" title=" " alt="" coords="3717,80,3814,107"/>
<area shape="rect" title=" " alt="" coords="717,304,771,331"/>
<area shape="rect" title=" " alt="" coords="796,304,857,331"/>
<area shape="rect" title=" " alt="" coords="881,304,956,331"/>
<area shape="rect" title=" " alt="" coords="980,304,1031,331"/>
<area shape="rect" title=" " alt="" coords="1055,304,1116,331"/>
<area shape="rect" title=" " alt="" coords="1141,304,1206,331"/>
<area shape="rect" title=" " alt="" coords="1231,304,1289,331"/>
<area shape="rect" title=" " alt="" coords="1313,304,1372,331"/>
<area shape="rect" title=" " alt="" coords="1397,304,1462,331"/>
<area shape="rect" title=" " alt="" coords="1486,304,1543,331"/>
<area shape="rect" title=" " alt="" coords="1568,304,1635,331"/>
<area shape="rect" title=" " alt="" coords="1659,304,1738,331"/>
<area shape="rect" title=" " alt="" coords="1762,304,1817,331"/>
<area shape="rect" title=" " alt="" coords="1841,304,1908,331"/>
<area shape="rect" title=" " alt="" coords="1932,304,2004,331"/>
<area shape="rect" title=" " alt="" coords="2029,304,2091,331"/>
<area shape="rect" title=" " alt="" coords="2980,304,3033,331"/>
<area shape="rect" title=" " alt="" coords="3058,304,3097,331"/>
<area shape="rect" title=" " alt="" coords="2116,304,2255,331"/>
<area shape="rect" title=" " alt="" coords="2279,304,2335,331"/>
<area shape="rect" title=" " alt="" coords="2817,304,2863,331"/>
<area shape="rect" title=" " alt="" coords="2887,304,2955,331"/>
<area shape="rect" title=" " alt="" coords="2359,304,2441,331"/>
<area shape="rect" title=" " alt="" coords="2465,304,2564,331"/>
<area shape="rect" title=" " alt="" coords="2589,304,2654,331"/>
<area shape="rect" title=" " alt="" coords="2752,304,2792,331"/>
<area shape="rect" title=" " alt="" coords="2678,304,2727,331"/>
<area shape="rect" title=" " alt="" coords="5,304,72,331"/>
<area shape="rect" title=" " alt="" coords="96,304,176,331"/>
<area shape="rect" title=" " alt="" coords="200,304,269,331"/>
<area shape="rect" title=" " alt="" coords="293,304,357,331"/>
<area shape="rect" title=" " alt="" coords="3121,304,3175,331"/>
<area shape="rect" title=" " alt="" coords="381,304,445,331"/>
<area shape="rect" title=" " alt="" coords="469,304,557,331"/>
<area shape="rect" title=" " alt="" coords="582,304,693,331"/>
</map>
</div>
</div>
<p><a href="Scenario_8cpp_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespacefirestarr"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr.php">firestarr</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacefirestarr_1_1sim"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php">firestarr::sim</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a38ee56bc3e16cf65c9c10ce42eeb3c1e"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#a38ee56bc3e16cf65c9c10ce42eeb3c1e">firestarr::sim::make_threshold</a> (vector&lt; double &gt; *thresholds, mt19937 *mt, const Day start_day, const Day last_date, double(*convert)(double value))</td></tr>
<tr class="separator:a38ee56bc3e16cf65c9c10ce42eeb3c1e"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a59377eda3d1785b146effc9807a12fad"><td class="memItemLeft" align="right" valign="top">constexpr double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#a59377eda3d1785b146effc9807a12fad">firestarr::sim::same</a> (const double value) noexcept</td></tr>
<tr class="separator:a59377eda3d1785b146effc9807a12fad"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3e9820cd223c9d1d0a20884cbcc514e7"><td class="memItemLeft" align="right" valign="top">static void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#a3e9820cd223c9d1d0a20884cbcc514e7">firestarr::sim::make_threshold</a> (vector&lt; double &gt; *thresholds, mt19937 *mt, const Day start_day, const Day last_date)</td></tr>
<tr class="separator:a3e9820cd223c9d1d0a20884cbcc514e7"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a929155be361201ad45adddd72f701d2b"><td class="memItemLeft" align="right" valign="top">ostream &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#a929155be361201ad45adddd72f701d2b">firestarr::sim::operator&lt;&lt;</a> (ostream &amp;os, const PointSet &amp;a)</td></tr>
<tr class="separator:a929155be361201ad45adddd72f701d2b"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:ae2df90bce3623bd0372b7667e5607b39"><td class="memItemLeft" align="right" valign="top">constexpr auto&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#ae2df90bce3623bd0372b7667e5607b39">firestarr::sim::CELL_CENTER</a> = 0.5555555555555555</td></tr>
<tr class="separator:ae2df90bce3623bd0372b7667e5607b39"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af832544b238d1df5200b186560aaeb1c"><td class="memItemLeft" align="right" valign="top">constexpr auto&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#af832544b238d1df5200b186560aaeb1c">firestarr::sim::PRECISION</a> = 0.001</td></tr>
<tr class="separator:af832544b238d1df5200b186560aaeb1c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aca57e11fde8202a8f956e2e2a8c984f1"><td class="memItemLeft" align="right" valign="top">static atomic&lt; size_t &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#aca57e11fde8202a8f956e2e2a8c984f1">firestarr::sim::COUNT</a> = 0</td></tr>
<tr class="separator:aca57e11fde8202a8f956e2e2a8c984f1"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa55abcbfea6a06bb83d3d07864e74fff"><td class="memItemLeft" align="right" valign="top">static atomic&lt; size_t &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#aa55abcbfea6a06bb83d3d07864e74fff">firestarr::sim::COMPLETED</a> = 0</td></tr>
<tr class="separator:aa55abcbfea6a06bb83d3d07864e74fff"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af402542cb0c47ee0276652ee500e8fd9"><td class="memItemLeft" align="right" valign="top">static util::MemoryPool&lt; BurnedData &gt;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php#af402542cb0c47ee0276652ee500e8fd9">firestarr::sim::POOL_BURNED_DATA</a> {}</td></tr>
<tr class="separator:af402542cb0c47ee0276652ee500e8fd9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
