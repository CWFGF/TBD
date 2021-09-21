<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: WeatherSHIELD/gefsloader.py Source File</title>
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
<div class="title">gefsloader.py</div>  </div>
</div><!--header-->
<div class="contents">
<a href="gefsloader_8py.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno"><a class="line" href="namespacegefsloader.php">    1</a></span>&#160;<span class="stringliteral">&quot;&quot;&quot;Load GEFS data&quot;&quot;&quot;</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160; </div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="keyword">from</span> gribloader <span class="keyword">import</span> GribLoader</div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160; </div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160; </div>
<div class="line"><a name="l00006"></a><span class="lineno"><a class="line" href="classgefsloader_1_1GefsLoader.php">    6</a></span>&#160;<span class="keyword">class </span><a class="code" href="classgefsloader_1_1GefsLoader.php">GefsLoader</a>(<a class="code" href="classgribloader_1_1GribLoader.php">GribLoader</a>):</div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;    <span class="stringliteral">&quot;&quot;&quot; Loads GEFS data &quot;&quot;&quot;</span></div>
<div class="line"><a name="l00008"></a><span class="lineno"><a class="line" href="classgefsloader_1_1GefsLoader.php#a81e98b4f0889d769a3bfe27e43f998aa">    8</a></span>&#160;    <span class="keyword">def </span><a class="code" href="classgefsloader_1_1GefsLoader.php#a81e98b4f0889d769a3bfe27e43f998aa">__init__</a>(self, no_download=False):</div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;        <span class="stringliteral">&quot;&quot;&quot;!</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="stringliteral">        Instantiate class</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="stringliteral">        @param no_download Whether or not to not download if data already exists</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="stringliteral">        &quot;&quot;&quot;</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;        name = <span class="stringliteral">&#39;GEFS&#39;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;        </div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        script = <span class="stringliteral">r&#39;filter_gefs_atmos_0p50a.pl&#39;</span></div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;        </div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;        mask = <span class="stringliteral">r&#39;?file={}.t{:02d}z.pgrb2a.0p50.f{:03d}&#39;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;        </div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        dir = <span class="stringliteral">r&#39;&amp;dir=%2Fgefs.{}%2F{}%2Fatmos%2Fpgrb2ap5&#39;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;        super(GefsLoader, self).<a class="code" href="classgefsloader_1_1GefsLoader.php#a81e98b4f0889d769a3bfe27e43f998aa">__init__</a>(name=name,</div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;                                         for_days=range(1, 16),</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;                                         interval=6,</div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;                                         script=script,</div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;                                         mask=mask,</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;                                         dir=dir,</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;                                         num_members=31,</div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;                                         no_download=no_download)</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160; </div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160; </div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;<span class="keywordflow">if</span> __name__ == <span class="stringliteral">&quot;__main__&quot;</span>:</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;    <a class="code" href="classgefsloader_1_1GefsLoader.php">GefsLoader</a>().<a class="code" href="classgribloader_1_1GribLoader.php#ae81eb68d9b3e4dcf3d529e4c7c392ec9">load_records</a>()</div>
<div class="ttc" id="aclassgefsloader_1_1GefsLoader_php"><div class="ttname"><a href="classgefsloader_1_1GefsLoader.php">gefsloader.GefsLoader</a></div><div class="ttdef"><b>Definition:</b> <a href="gefsloader_8py_source.php#l00006">gefsloader.py:6</a></div></div>
<div class="ttc" id="aclassgefsloader_1_1GefsLoader_php_a81e98b4f0889d769a3bfe27e43f998aa"><div class="ttname"><a href="classgefsloader_1_1GefsLoader.php#a81e98b4f0889d769a3bfe27e43f998aa">gefsloader.GefsLoader.__init__</a></div><div class="ttdeci">def __init__(self, no_download=False)</div><div class="ttdoc">Instantiate class.</div><div class="ttdef"><b>Definition:</b> <a href="gefsloader_8py_source.php#l00008">gefsloader.py:8</a></div></div>
<div class="ttc" id="aclassgribloader_1_1GribLoader_php"><div class="ttname"><a href="classgribloader_1_1GribLoader.php">gribloader.GribLoader</a></div><div class="ttdef"><b>Definition:</b> <a href="gribloader_8py_source.php#l00020">gribloader.py:20</a></div></div>
<div class="ttc" id="aclassgribloader_1_1GribLoader_php_ae81eb68d9b3e4dcf3d529e4c7c392ec9"><div class="ttname"><a href="classgribloader_1_1GribLoader.php#ae81eb68d9b3e4dcf3d529e4c7c392ec9">gribloader.GribLoader.load_records</a></div><div class="ttdeci">def load_records(self, max_retries=15, force=False)</div><div class="ttdoc">Load the latest records using the specified interval to determine run.</div><div class="ttdef"><b>Definition:</b> <a href="gribloader_8py_source.php#l00310">gribloader.py:310</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
