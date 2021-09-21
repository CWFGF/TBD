<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: WeatherSHIELD/runfpa.bat Source File</title>
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
   <div id="projectname">WeatherSHIELD
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
<li class="navelem"><a class="el" href="dir_efb9b02d96da17fe24d2757b77512e9c.php">WeatherSHIELD</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">runfpa.bat</div>  </div>
</div><!--header-->
<div class="contents">
<a href="runfpa_8bat.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;@echo off</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;SETLOCAL ENABLEEXTENSIONS</div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;pushd %~dp0</div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160; </div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;for /f &quot;tokens=2 delims==&quot; %%a in (&#39;wmic OS Get localdatetime /value&#39;) do set &quot;dt=%%a&quot;</div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;set &quot;YY=%dt:~2,2%&quot; &amp; set &quot;YYYY=%dt:~0,4%&quot; &amp; set &quot;MM=%dt:~4,2%&quot; &amp; set &quot;DD=%dt:~6,2%&quot;</div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;set &quot;HH=%dt:~8,2%&quot; &amp; set &quot;Min=%dt:~10,2%&quot; &amp; set &quot;Sec=%dt:~12,2%&quot;</div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;set YMDDATE=%YYYY%%MM%%DD%</div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;set HHMM=%HH%%Min%</div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;set LOG_DIR=log</div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;set LOG=%LOG_DIR%\log_fpa%YMDDATE%.txt</div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160; </div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;if not exist %LOG_DIR% mkdir %LOG_DIR%</div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;echo Running FPA forecast update</div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;python.exe fpaloader.py &gt;&gt; %LOG% 2&gt;&amp;1</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;echo Running DFOSS update</div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;python.exe dfoss.py &gt;&gt; %LOG% 2&gt;&amp;1</div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;echo Done</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;popd</div>
</div><!-- fragment --></div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
