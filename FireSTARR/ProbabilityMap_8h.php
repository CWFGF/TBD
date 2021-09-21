<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/ProbabilityMap.h File Reference</title>
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
<a href="#namespaces">Namespaces</a>  </div>
  <div class="headertitle">
<div class="title">ProbabilityMap.h File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;string&gt;</code><br />
<code>#include &lt;vector&gt;</code><br />
<code>#include &quot;<a class="el" href="GridMap_8h_source.php">GridMap.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Statistics_8h_source.php">Statistics.h</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for ProbabilityMap.h:</div>
<div class="dyncontent">
<div class="center"><img src="ProbabilityMap_8h__incl.png" border="0" usemap="#aFireSTARR_2src_2ProbabilityMap_8h" alt=""/></div>
<map name="aFireSTARR_2src_2ProbabilityMap_8h" id="aFireSTARR_2src_2ProbabilityMap_8h">
<area shape="rect" title=" " alt="" coords="1190,5,1365,47"/>
<area shape="rect" title=" " alt="" coords="9,468,63,495"/>
<area shape="rect" title=" " alt="" coords="3588,468,3647,495"/>
<area shape="rect" href="GridMap_8h.php" title=" " alt="" coords="338,95,419,121"/>
<area shape="rect" href="Statistics_8h.php" title=" " alt="" coords="3282,244,3369,271"/>
<area shape="rect" title=" " alt="" coords="3489,468,3564,495"/>
<area shape="rect" title=" " alt="" coords="151,468,204,495"/>
<area shape="rect" title=" " alt="" coords="87,468,126,495"/>
<area shape="rect" title=" " alt="" coords="3354,468,3465,495"/>
<area shape="rect" title=" " alt="" coords="229,468,281,495"/>
<area shape="rect" href="Grid_8h.php" title=" " alt="" coords="436,169,492,196"/>
<area shape="rect" title=" " alt="" coords="305,468,373,495"/>
<area shape="rect" href="Location_8h.php" title=" " alt="" coords="965,244,1048,271"/>
<area shape="rect" href="Log_8h.php" title=" " alt="" coords="2295,319,2350,345"/>
<area shape="rect" href="Point_8h.php" title=" " alt="" coords="398,244,461,271"/>
<area shape="rect" href="Util_8h.php" title=" " alt="" coords="1729,319,1781,345"/>
<area shape="rect" href="stdafx_8h.php" title=" " alt="" coords="1721,393,1788,420"/>
<area shape="rect" title=" " alt="" coords="2510,468,2565,495"/>
<area shape="rect" title=" " alt="" coords="2589,468,2651,495"/>
<area shape="rect" title=" " alt="" coords="2675,468,2725,495"/>
<area shape="rect" title=" " alt="" coords="2749,468,2811,495"/>
<area shape="rect" title=" " alt="" coords="2835,468,2901,495"/>
<area shape="rect" title=" " alt="" coords="2925,468,2984,495"/>
<area shape="rect" title=" " alt="" coords="3008,468,3067,495"/>
<area shape="rect" title=" " alt="" coords="3091,468,3157,495"/>
<area shape="rect" title=" " alt="" coords="3181,468,3238,495"/>
<area shape="rect" title=" " alt="" coords="3263,468,3329,495"/>
<area shape="rect" title=" " alt="" coords="397,468,475,495"/>
<area shape="rect" title=" " alt="" coords="499,468,554,495"/>
<area shape="rect" title=" " alt="" coords="579,468,645,495"/>
<area shape="rect" title=" " alt="" coords="669,468,741,495"/>
<area shape="rect" title=" " alt="" coords="766,468,829,495"/>
<area shape="rect" title=" " alt="" coords="853,468,992,495"/>
<area shape="rect" title=" " alt="" coords="1016,468,1072,495"/>
<area shape="rect" title=" " alt="" coords="1097,468,1143,495"/>
<area shape="rect" title=" " alt="" coords="1167,468,1249,495"/>
<area shape="rect" title=" " alt="" coords="1273,468,1372,495"/>
<area shape="rect" title=" " alt="" coords="1397,468,1462,495"/>
<area shape="rect" title=" " alt="" coords="1485,468,1525,495"/>
<area shape="rect" title=" " alt="" coords="1550,468,1599,495"/>
<area shape="rect" title=" " alt="" coords="1624,468,1691,495"/>
<area shape="rect" title=" " alt="" coords="1715,468,1795,495"/>
<area shape="rect" title=" " alt="" coords="1819,468,1888,495"/>
<area shape="rect" title=" " alt="" coords="1912,468,1976,495"/>
<area shape="rect" title=" " alt="" coords="2000,468,2064,495"/>
<area shape="rect" title=" " alt="" coords="2088,468,2176,495"/>
<area shape="rect" title=" " alt="" coords="2200,468,2355,495"/>
<area shape="rect" title=" " alt="" coords="2379,468,2485,495"/>
<area shape="rect" title=" " alt="" coords="3333,319,3401,345"/>
<area shape="rect" href="Settings_8h.php" title=" " alt="" coords="3484,393,3564,420"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="ProbabilityMap_8h__dep__incl.png" border="0" usemap="#aFireSTARR_2src_2ProbabilityMap_8hdep" alt=""/></div>
<map name="aFireSTARR_2src_2ProbabilityMap_8hdep" id="aFireSTARR_2src_2ProbabilityMap_8hdep">
<area shape="rect" title=" " alt="" coords="450,5,625,47"/>
<area shape="rect" href="Environment_8cpp.php" title=" " alt="" coords="5,102,216,129"/>
<area shape="rect" href="Iteration_8cpp.php" title=" " alt="" coords="241,102,426,129"/>
<area shape="rect" href="Model_8cpp.php" title=" " alt="" coords="451,102,624,129"/>
<area shape="rect" href="ProbabilityMap_8cpp.php" title=" " alt="" coords="649,95,823,136"/>
<area shape="rect" href="Scenario_8cpp.php" title=" " alt="" coords="848,102,1037,129"/>
</map>
</div>
</div>
<p><a href="ProbabilityMap_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ProbabilityMap.php">firestarr::sim::ProbabilityMap</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Map of the percentage of simulations in which a Cell burned in each intensity category.  <a href="classfirestarr_1_1sim_1_1ProbabilityMap.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespacefirestarr"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr.php">firestarr</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacefirestarr_1_1sim"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1sim.php">firestarr::sim</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
