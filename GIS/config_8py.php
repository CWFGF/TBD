<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>GIS: GIS/canvec/config.py File Reference</title>
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
   <div id="projectname">GIS
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
<li class="navelem"><a class="el" href="dir_0bd4c74f4040fcfd9aeb04f03b8a2bd6.php">GIS</a></li><li class="navelem"><a class="el" href="dir_26feaf0d9ad3ca4bec98767f705e3a13.php">canvec</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#namespaces">Namespaces</a> &#124;
<a href="#func-members">Functions</a> &#124;
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">config.py File Reference</div>  </div>
</div><!--header-->
<div class="contents">
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="namespaces"></a>
Namespaces</h2></td></tr>
<tr class="memitem:namespaceconfig"><td class="memItemLeft" align="right" valign="top"> &#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespaceconfig.php">config</a></td></tr>
<tr class="separator:"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="func-members"></a>
Functions</h2></td></tr>
<tr class="memitem:a6b526ac2d553f3e9501a6a31ae70969e"><td class="memItemLeft" align="right" valign="top">def&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespaceconfig.php#a6b526ac2d553f3e9501a6a31ae70969e">config.read_config</a> (file_name)</td></tr>
<tr class="separator:a6b526ac2d553f3e9501a6a31ae70969e"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:ab36043a96940e8fad09edbab52aef225"><td class="memItemLeft" align="right" valign="top">string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespaceconfig.php#ab36043a96940e8fad09edbab52aef225">config.ROOT</a> = r'/FireGUARD/GIS'</td></tr>
<tr class="separator:ab36043a96940e8fad09edbab52aef225"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a65de0061f32f27f0d385fabb9db36319"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespaceconfig.php#a65de0061f32f27f0d385fabb9db36319">config.CONFIG_FILE</a> = os.path.join(ROOT, &quot;canvec&quot;, &quot;config.ini&quot;)</td></tr>
<tr class="separator:a65de0061f32f27f0d385fabb9db36319"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a0de0c35da4713cd90ef2afc30be57902"><td class="memItemLeft" align="right" valign="top">def&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="namespaceconfig.php#a0de0c35da4713cd90ef2afc30be57902">config.CONFIG</a> = read_config(CONFIG_FILE)</td></tr>
<tr class="separator:a0de0c35da4713cd90ef2afc30be57902"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
