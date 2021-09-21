<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/FireWeather.h File Reference</title>
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
<a href="#typedef-members">Typedefs</a> &#124;
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">FireWeather.h File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><code>#include &lt;map&gt;</code><br />
<code>#include &lt;set&gt;</code><br />
<code>#include &lt;vector&gt;</code><br />
<code>#include &quot;<a class="el" href="FuelLookup_8h_source.php">FuelLookup.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="FWI_8h_source.php">FWI.h</a>&quot;</code><br />
<code>#include &quot;<a class="el" href="Log_8h_source.php">Log.h</a>&quot;</code><br />
</div><div class="textblock"><div class="dynheader">
Include dependency graph for FireWeather.h:</div>
<div class="dyncontent">
<div class="center"><img src="FireWeather_8h__incl.png" border="0" usemap="#aFireSTARR_2src_2FireWeather_8h" alt=""/></div>
<map name="aFireSTARR_2src_2FireWeather_8h" id="aFireSTARR_2src_2FireWeather_8h">
<area shape="rect" title=" " alt="" coords="3434,5,3629,32"/>
<area shape="rect" title=" " alt="" coords="5,453,52,480"/>
<area shape="rect" title=" " alt="" coords="77,453,117,480"/>
<area shape="rect" title=" " alt="" coords="3741,453,3799,480"/>
<area shape="rect" href="FuelLookup_8h.php" title=" " alt="" coords="3417,80,3517,107"/>
<area shape="rect" href="FWI_8h.php" title=" " alt="" coords="3625,155,3681,181"/>
<area shape="rect" href="Log_8h.php" title=" " alt="" coords="3819,80,3873,107"/>
<area shape="rect" title=" " alt="" coords="3569,453,3637,480"/>
<area shape="rect" title=" " alt="" coords="3661,453,3716,480"/>
<area shape="rect" href="Cell_8h.php" title=" " alt="" coords="3391,155,3445,181"/>
<area shape="rect" href="Util_8h.php" title=" " alt="" coords="3353,304,3405,331"/>
<area shape="rect" title=" " alt="" coords="3491,453,3545,480"/>
<area shape="rect" href="Location_8h.php" title=" " alt="" coords="3273,229,3355,256"/>
<area shape="rect" href="stdafx_8h.php" title=" " alt="" coords="2045,379,2111,405"/>
<area shape="rect" title=" " alt="" coords="3280,453,3391,480"/>
<area shape="rect" title=" " alt="" coords="3415,453,3467,480"/>
<area shape="rect" title=" " alt="" coords="1968,453,2023,480"/>
<area shape="rect" title=" " alt="" coords="2047,453,2109,480"/>
<area shape="rect" title=" " alt="" coords="2133,453,2207,480"/>
<area shape="rect" title=" " alt="" coords="2231,453,2282,480"/>
<area shape="rect" title=" " alt="" coords="2306,453,2367,480"/>
<area shape="rect" title=" " alt="" coords="2392,453,2457,480"/>
<area shape="rect" title=" " alt="" coords="2482,453,2541,480"/>
<area shape="rect" title=" " alt="" coords="2565,453,2623,480"/>
<area shape="rect" title=" " alt="" coords="2648,453,2713,480"/>
<area shape="rect" title=" " alt="" coords="2737,453,2795,480"/>
<area shape="rect" title=" " alt="" coords="2819,453,2886,480"/>
<area shape="rect" title=" " alt="" coords="2911,453,2989,480"/>
<area shape="rect" title=" " alt="" coords="3013,453,3068,480"/>
<area shape="rect" title=" " alt="" coords="3093,453,3159,480"/>
<area shape="rect" title=" " alt="" coords="3183,453,3255,480"/>
<area shape="rect" title=" " alt="" coords="141,453,204,480"/>
<area shape="rect" title=" " alt="" coords="228,453,267,480"/>
<area shape="rect" title=" " alt="" coords="291,453,430,480"/>
<area shape="rect" title=" " alt="" coords="454,453,510,480"/>
<area shape="rect" title=" " alt="" coords="535,453,616,480"/>
<area shape="rect" title=" " alt="" coords="641,453,739,480"/>
<area shape="rect" title=" " alt="" coords="764,453,829,480"/>
<area shape="rect" title=" " alt="" coords="853,453,903,480"/>
<area shape="rect" title=" " alt="" coords="927,453,994,480"/>
<area shape="rect" title=" " alt="" coords="1018,453,1098,480"/>
<area shape="rect" title=" " alt="" coords="1122,453,1191,480"/>
<area shape="rect" title=" " alt="" coords="1215,453,1279,480"/>
<area shape="rect" title=" " alt="" coords="1303,453,1367,480"/>
<area shape="rect" title=" " alt="" coords="1391,453,1479,480"/>
<area shape="rect" title=" " alt="" coords="1503,453,1658,480"/>
<area shape="rect" title=" " alt="" coords="1682,453,1789,480"/>
<area shape="rect" title=" " alt="" coords="1813,453,1943,480"/>
<area shape="rect" href="Weather_8h.php" title=" " alt="" coords="3613,229,3693,256"/>
<area shape="rect" href="Index_8h.php" title=" " alt="" coords="3621,304,3684,331"/>
</map>
</div>
</div><div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="FireWeather_8h__dep__incl.png" border="0" usemap="#aFireSTARR_2src_2FireWeather_8hdep" alt=""/></div>
<map name="aFireSTARR_2src_2FireWeather_8hdep" id="aFireSTARR_2src_2FireWeather_8hdep">
<area shape="rect" title=" " alt="" coords="875,5,1069,32"/>
<area shape="rect" href="FireWeather_8cpp.php" title=" " alt="" coords="5,155,213,181"/>
<area shape="rect" href="FuelType_8h.php" title=" " alt="" coords="817,80,994,107"/>
<area shape="rect" href="Model_8cpp.php" title=" " alt="" coords="1533,483,1707,509"/>
<area shape="rect" href="Scenario_8h.php" title=" " alt="" coords="933,326,1107,353"/>
<area shape="rect" href="Environment_8h.php" title=" " alt="" coords="590,155,786,181"/>
<area shape="rect" href="FireSpread_8cpp.php" title=" " alt="" coords="1330,408,1531,435"/>
<area shape="rect" href="Scenario_8cpp.php" title=" " alt="" coords="557,483,747,509"/>
<area shape="rect" href="FuelType_8cpp.php" title=" " alt="" coords="810,155,1001,181"/>
<area shape="rect" href="StandardFuel_8h.php" title=" " alt="" coords="1358,155,1559,181"/>
<area shape="rect" href="Environment_8cpp.php" title=" " alt="" coords="288,408,499,435"/>
<area shape="rect" href="EnvironmentInfo_8cpp.php" title=" " alt="" coords="639,319,825,360"/>
<area shape="rect" href="EnvironmentInfo_8h.php" title=" " alt="" coords="613,229,800,271"/>
<area shape="rect" href="Model_8h.php" title=" " alt="" coords="1158,237,1317,263"/>
<area shape="rect" href="Perimeter_8cpp.php" title=" " alt="" coords="395,237,589,263"/>
<area shape="rect" href="IntensityMap_8cpp.php" title=" " alt="" coords="1131,326,1343,353"/>
<area shape="rect" href="Main_8cpp.php" title=" " alt="" coords="522,408,689,435"/>
<area shape="rect" href="ProbabilityMap_8cpp.php" title=" " alt="" coords="1469,319,1643,360"/>
<area shape="rect" href="Test_8cpp.php" title=" " alt="" coords="986,483,1150,509"/>
<area shape="rect" href="Iteration_8cpp.php" title=" " alt="" coords="1069,408,1254,435"/>
<area shape="rect" href="Observer_8cpp.php" title=" " alt="" coords="771,483,962,509"/>
<area shape="rect" href="Observer_8h.php" title=" " alt="" coords="815,408,993,435"/>
<area shape="rect" href="FBP45_8h.php" title=" " alt="" coords="1599,237,1763,263"/>
<area shape="rect" href="StandardFuel_8cpp.php" title=" " alt="" coords="1351,237,1566,263"/>
<area shape="rect" href="FBP45_8cpp.php" title=" " alt="" coords="1719,326,1897,353"/>
<area shape="rect" href="FuelLookup_8cpp.php" title=" " alt="" coords="1922,326,2129,353"/>
</map>
</div>
</div>
<p><a href="FireWeather_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1wx_1_1FireWeather.php">firestarr::wx::FireWeather</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">A stream of weather that gets used by a Scenario every Iteration.  <a href="classfirestarr_1_1wx_1_1FireWeather.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespacefirestarr"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr.php">firestarr</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacefirestarr_1_1wx"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1wx.php">firestarr::wx</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="typedef-members"></a>
Typedefs</h2></td></tr>
<tr class="memitem:ac1a27940bb05c7c25f46c19009696dfd"><td class="memItemLeft" align="right" valign="top">using&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1wx.php#ac1a27940bb05c7c25f46c19009696dfd">firestarr::wx::SurvivalMap</a> = array&lt; vector&lt; float &gt;, NUMBER_OF_FUELS &gt;</td></tr>
<tr class="separator:ac1a27940bb05c7c25f46c19009696dfd"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a0c8d10fe976a60255354cf622c4930a0"><td class="memItemLeft" align="right" valign="top">constexpr bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1wx.php#a0c8d10fe976a60255354cf622c4930a0">firestarr::wx::operator==</a> (const FireWeather &amp;lhs, const FireWeather &amp;rhs)</td></tr>
<tr class="memdesc:a0c8d10fe976a60255354cf622c4930a0"><td class="mdescLeft">&#160;</td><td class="mdescRight">Equality operator.  <a href="namespacefirestarr_1_1wx.php#a0c8d10fe976a60255354cf622c4930a0">More...</a><br /></td></tr>
<tr class="separator:a0c8d10fe976a60255354cf622c4930a0"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0738d176c7ccc4429262d7accc368808"><td class="memItemLeft" align="right" valign="top">constexpr bool&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1wx.php#a0738d176c7ccc4429262d7accc368808">firestarr::wx::operator!=</a> (const FireWeather &amp;lhs, const FireWeather &amp;rhs)</td></tr>
<tr class="memdesc:a0738d176c7ccc4429262d7accc368808"><td class="mdescLeft">&#160;</td><td class="mdescRight">Inequality operator.  <a href="namespacefirestarr_1_1wx.php#a0738d176c7ccc4429262d7accc368808">More...</a><br /></td></tr>
<tr class="separator:a0738d176c7ccc4429262d7accc368808"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
