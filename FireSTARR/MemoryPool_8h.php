<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/MemoryPool.h File Reference</title>
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
<a href="#func-members">Functions</a>  </div>
  <div class="headertitle">
<div class="title">MemoryPool.h File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><div class="dynheader">
This graph shows which files directly or indirectly include this file:</div>
<div class="dyncontent">
<div class="center"><img src="MemoryPool_8h__dep__incl.png" border="0" usemap="#aFireSTARR_2src_2MemoryPool_8hdep" alt=""/></div>
<map name="aFireSTARR_2src_2MemoryPool_8hdep" id="aFireSTARR_2src_2MemoryPool_8hdep">
<area shape="rect" title=" " alt="" coords="125,5,321,32"/>
<area shape="rect" href="IntensityMap_8cpp.php" title=" " alt="" coords="5,80,217,107"/>
<area shape="rect" href="Scenario_8cpp.php" title=" " alt="" coords="242,80,431,107"/>
</map>
</div>
</div>
<p><a href="MemoryPool_8h_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="nested-classes"></a>
Classes</h2></td></tr>
<tr class="memitem:"><td class="memItemLeft" align="right" valign="top">class &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1util_1_1MemoryPool.php">firestarr::util::MemoryPool&lt; T &gt;</a></td></tr>
<tr class="memdesc:"><td class="mdescLeft">&#160;</td><td class="mdescRight">Keeps track of data structures so they can be reused instead of freeing and reacquiring them.  <a href="classfirestarr_1_1util_1_1MemoryPool.php#details">More...</a><br /></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespacefirestarr"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr.php">firestarr</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:namespacefirestarr_1_1util"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1util.php">firestarr::util</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a6f23a72b7933be345d11f86771f22904"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a6f23a72b7933be345d11f86771f22904"><td class="memTemplItemLeft" align="right" valign="top">T *&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1util.php#a6f23a72b7933be345d11f86771f22904">firestarr::util::check_clear</a> (T *t, MemoryPool&lt; T &gt; &amp;pool)</td></tr>
<tr class="memdesc:a6f23a72b7933be345d11f86771f22904"><td class="mdescLeft">&#160;</td><td class="mdescRight">Call clear on T before releasing it.  <a href="namespacefirestarr_1_1util.php#a6f23a72b7933be345d11f86771f22904">More...</a><br /></td></tr>
<tr class="separator:a6f23a72b7933be345d11f86771f22904"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3fc953966435ba2dba4c247032dd5e41"><td class="memTemplParams" colspan="2">template&lt;typename T &gt; </td></tr>
<tr class="memitem:a3fc953966435ba2dba4c247032dd5e41"><td class="memTemplItemLeft" align="right" valign="top">T *&#160;</td><td class="memTemplItemRight" valign="bottom"><a class="el" href="namespacefirestarr_1_1util.php#a3fc953966435ba2dba4c247032dd5e41">firestarr::util::check_reset</a> (T *t, MemoryPool&lt; T &gt; &amp;pool)</td></tr>
<tr class="memdesc:a3fc953966435ba2dba4c247032dd5e41"><td class="mdescLeft">&#160;</td><td class="mdescRight">Call reset on T before releasing it.  <a href="namespacefirestarr_1_1util.php#a3fc953966435ba2dba4c247032dd5e41">More...</a><br /></td></tr>
<tr class="separator:a3fc953966435ba2dba4c247032dd5e41"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
