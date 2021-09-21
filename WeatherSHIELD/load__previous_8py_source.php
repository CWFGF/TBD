<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: WeatherSHIELD/load_previous.py Source File</title>
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
<div class="title">load_previous.py</div>  </div>
</div><!--header-->
<div class="contents">
<a href="load__previous_8py.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno"><a class="line" href="namespaceload__previous.php">    1</a></span>&#160;<span class="stringliteral">&quot;&quot;&quot;Load previous records that aren&#39;t in database&quot;&quot;&quot;</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160; </div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="keyword">import</span> sys</div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160; </div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="keywordflow">if</span> __name__ == <span class="stringliteral">&quot;__main__&quot;</span>:</div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;    </div>
<div class="line"><a name="l00007"></a><span class="lineno"><a class="line" href="namespaceload__previous.php#a1272f010ed3f276e994470803e5be8e7">    7</a></span>&#160;    year = <span class="keywordtype">None</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;    <span class="keywordflow">if</span> len(sys.argv) &gt; 1 <span class="keywordflow">and</span> sys.argv[1] <span class="keywordflow">not</span> <span class="keywordflow">in</span> [<span class="stringliteral">&#39;historic&#39;</span>, <span class="stringliteral">&#39;geps&#39;</span>, <span class="stringliteral">&#39;gefs&#39;</span>]:</div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;        year = int(sys.argv[1])</div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;        print(<span class="stringliteral">&quot;Loading year {}&quot;</span>.format(year))</div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;    <span class="keywordflow">if</span> len(sys.argv) == 1 <span class="keywordflow">or</span> <span class="stringliteral">&#39;historic&#39;</span> <span class="keywordflow">in</span> sys.argv:</div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;        <span class="keyword">import</span> gethistoric</div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;        <a class="code" href="namespacegethistoric.php#a5254e397994d83a945575afcb0d5ad0e">gethistoric.load_past_records</a>(year)</div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;    <span class="keywordflow">if</span> len(sys.argv) == 1 <span class="keywordflow">or</span> <span class="stringliteral">&#39;geps&#39;</span> <span class="keywordflow">in</span> sys.argv:</div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        <span class="keyword">import</span> gepsloader</div>
<div class="line"><a name="l00016"></a><span class="lineno"><a class="line" href="namespaceload__previous.php#ad5013ec16c30ccfedb100cb52ee523f9">   16</a></span>&#160;        loader = <a class="code" href="classgepsloader_1_1GepsLoader.php">gepsloader.GepsLoader</a>(<span class="keyword">True</span>)</div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;        loader.load_past_records(year)</div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    <span class="keywordflow">if</span> len(sys.argv) == 1 <span class="keywordflow">or</span> <span class="stringliteral">&#39;gefs&#39;</span> <span class="keywordflow">in</span> sys.argv:</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        <span class="keyword">import</span> gefsloader</div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;        loader = <a class="code" href="classgefsloader_1_1GefsLoader.php">gefsloader.GefsLoader</a>(<span class="keyword">True</span>)</div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;        loader.load_past_records(year)</div>
<div class="ttc" id="aclassgefsloader_1_1GefsLoader_php"><div class="ttname"><a href="classgefsloader_1_1GefsLoader.php">gefsloader.GefsLoader</a></div><div class="ttdef"><b>Definition:</b> <a href="gefsloader_8py_source.php#l00006">gefsloader.py:6</a></div></div>
<div class="ttc" id="aclassgepsloader_1_1GepsLoader_php"><div class="ttname"><a href="classgepsloader_1_1GepsLoader.php">gepsloader.GepsLoader</a></div><div class="ttdef"><b>Definition:</b> <a href="gepsloader_8py_source.php#l00252">gepsloader.py:252</a></div></div>
<div class="ttc" id="anamespacegethistoric_php_a5254e397994d83a945575afcb0d5ad0e"><div class="ttname"><a href="namespacegethistoric.php#a5254e397994d83a945575afcb0d5ad0e">gethistoric.load_past_records</a></div><div class="ttdeci">def load_past_records(year=None, force=False)</div><div class="ttdoc">Determine which past run files we have and load them.</div><div class="ttdef"><b>Definition:</b> <a href="gethistoric_8py_source.php#l00130">gethistoric.py:130</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
