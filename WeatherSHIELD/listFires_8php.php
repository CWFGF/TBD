<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: WeatherSHIELD/gui/listFires.php File Reference</title>
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
<li class="navelem"><a class="el" href="dir_efb9b02d96da17fe24d2757b77512e9c.php">WeatherSHIELD</a></li><li class="navelem"><a class="el" href="dir_5fc6f6a3a11d95919a5ab1ab667a4c80.php">gui</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#var-members">Variables</a>  </div>
  <div class="headertitle">
<div class="title">listFires.php File Reference</div>  </div>
</div><!--header-->
<div class="contents">

<p><a href="listFires_8php_source.php">Go to the source code of this file.</a></p>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="var-members"></a>
Variables</h2></td></tr>
<tr class="memitem:a7d61c857f4a029653c0ab902a2ddca13"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#a7d61c857f4a029653c0ab902a2ddca13">$minLat</a> = floatval($_GET['minLat'])</td></tr>
<tr class="separator:a7d61c857f4a029653c0ab902a2ddca13"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ae70f081988550d1ff0f388098a7b9f43"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#ae70f081988550d1ff0f388098a7b9f43">$maxLat</a> = floatval($_GET['maxLat'])</td></tr>
<tr class="separator:ae70f081988550d1ff0f388098a7b9f43"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:acf41c3ff0ae74390d323deff8caa1dd8"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#acf41c3ff0ae74390d323deff8caa1dd8">$minLon</a> = floatval($_GET['minLon'])</td></tr>
<tr class="separator:acf41c3ff0ae74390d323deff8caa1dd8"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab71f4f40936f92ecfb0fdf5b97565e6c"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#ab71f4f40936f92ecfb0fdf5b97565e6c">$maxLon</a> = floatval($_GET['maxLon'])</td></tr>
<tr class="separator:ab71f4f40936f92ecfb0fdf5b97565e6c"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa8a5a87b9c1a6a0819b88447cbe41877"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">$conn</a> = <a class="el" href="connection_8php.php#a1b1bd9b3f45a5fbd2549355282cdc96f">connect</a>($DFOSS_DATABASE)</td></tr>
<tr class="separator:aa8a5a87b9c1a6a0819b88447cbe41877"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a047170d6020a882807665812a27e2525"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#a047170d6020a882807665812a27e2525">$sql</a></td></tr>
<tr class="separator:a047170d6020a882807665812a27e2525"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a7707f363e61edfa68b139866ca77dfb9"><td class="memItemLeft" align="right" valign="top">if($conn)&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="listFires_8php.php#a7707f363e61edfa68b139866ca77dfb9">else</a></td></tr>
<tr class="separator:a7707f363e61edfa68b139866ca77dfb9"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<h2 class="groupheader">Variable Documentation</h2>
<a id="aa8a5a87b9c1a6a0819b88447cbe41877"></a>
<h2 class="memtitle"><span class="permalink"><a href="#aa8a5a87b9c1a6a0819b88447cbe41877">&#9670;&nbsp;</a></span>$conn</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">$conn = <a class="el" href="connection_8php.php#a1b1bd9b3f45a5fbd2549355282cdc96f">connect</a>($DFOSS_DATABASE)</td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00009">9</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
<a id="ae70f081988550d1ff0f388098a7b9f43"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ae70f081988550d1ff0f388098a7b9f43">&#9670;&nbsp;</a></span>$maxLat</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">$maxLat = floatval($_GET['maxLat'])</td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00005">5</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
<a id="ab71f4f40936f92ecfb0fdf5b97565e6c"></a>
<h2 class="memtitle"><span class="permalink"><a href="#ab71f4f40936f92ecfb0fdf5b97565e6c">&#9670;&nbsp;</a></span>$maxLon</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">$maxLon = floatval($_GET['maxLon'])</td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00007">7</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
<a id="a7d61c857f4a029653c0ab902a2ddca13"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7d61c857f4a029653c0ab902a2ddca13">&#9670;&nbsp;</a></span>$minLat</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">$minLat = floatval($_GET['minLat'])</td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00004">4</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
<a id="acf41c3ff0ae74390d323deff8caa1dd8"></a>
<h2 class="memtitle"><span class="permalink"><a href="#acf41c3ff0ae74390d323deff8caa1dd8">&#9670;&nbsp;</a></span>$minLon</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">$minLon = floatval($_GET['minLon'])</td>
        </tr>
      </table>
</div><div class="memdoc">

<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00006">6</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
<a id="a047170d6020a882807665812a27e2525"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a047170d6020a882807665812a27e2525">&#9670;&nbsp;</a></span>$sql</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">$sql</td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Initial value:</b><div class="fragment"><div class="line">= <span class="stringliteral">&quot;SELECT *&quot;</span></div>
<div class="line">        .<span class="stringliteral">&quot; FROM [INPUTS].[ACTIVEFIRE]&quot;</span></div>
<div class="line">        .<span class="stringliteral">&quot; ORDER BY FIRENAME ASC&quot;</span></div>
</div><!-- fragment -->
<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00011">11</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
<a id="a7707f363e61edfa68b139866ca77dfb9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a7707f363e61edfa68b139866ca77dfb9">&#9670;&nbsp;</a></span>else</h2>

<div class="memitem">
<div class="memproto">
      <table class="memname">
        <tr>
          <td class="memname">if ( $conn) else</td>
        </tr>
      </table>
</div><div class="memdoc">
<b>Initial value:</b><div class="fragment"><div class="line">{</div>
<div class="line">    echo(<span class="stringliteral">&quot;Error could not connect to SQL database: &quot;</span>.print_r( sqlsrv_errors(), <span class="keyword">true</span>))</div>
</div><!-- fragment -->
<p class="definition">Definition at line <a class="el" href="listFires_8php_source.php#l00022">22</a> of file <a class="el" href="listFires_8php_source.php">listFires.php</a>.</p>

</div>
</div>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
