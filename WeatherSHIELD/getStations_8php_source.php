<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: WeatherSHIELD/gui/getStations.php Source File</title>
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
  <div class="headertitle">
<div class="title">getStations.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="getStations_8php.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;?php</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;require <span class="stringliteral">&#39;connection.php&#39;</span>;</div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160; </div>
<div class="line"><a name="l00004"></a><span class="lineno"><a class="line" href="getStations_8php.php#a7d61c857f4a029653c0ab902a2ddca13">    4</a></span>&#160;<a class="code" href="getStations_8php.php#a7d61c857f4a029653c0ab902a2ddca13">$minLat</a> = floatval($_GET[<span class="stringliteral">&#39;minLat&#39;</span>]);</div>
<div class="line"><a name="l00005"></a><span class="lineno"><a class="line" href="getStations_8php.php#ae70f081988550d1ff0f388098a7b9f43">    5</a></span>&#160;<a class="code" href="getStations_8php.php#ae70f081988550d1ff0f388098a7b9f43">$maxLat</a> = floatval($_GET[<span class="stringliteral">&#39;maxLat&#39;</span>]);</div>
<div class="line"><a name="l00006"></a><span class="lineno"><a class="line" href="getStations_8php.php#acf41c3ff0ae74390d323deff8caa1dd8">    6</a></span>&#160;<a class="code" href="getStations_8php.php#acf41c3ff0ae74390d323deff8caa1dd8">$minLon</a> = floatval($_GET[<span class="stringliteral">&#39;minLon&#39;</span>]);</div>
<div class="line"><a name="l00007"></a><span class="lineno"><a class="line" href="getStations_8php.php#ab71f4f40936f92ecfb0fdf5b97565e6c">    7</a></span>&#160;<a class="code" href="getStations_8php.php#ab71f4f40936f92ecfb0fdf5b97565e6c">$maxLon</a> = floatval($_GET[<span class="stringliteral">&#39;maxLon&#39;</span>]);</div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160; </div>
<div class="line"><a name="l00009"></a><span class="lineno"><a class="line" href="getStations_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">    9</a></span>&#160;<a class="code" href="getStations_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">$conn</a> = <a class="code" href="connection_8php.php#a1b1bd9b3f45a5fbd2549355282cdc96f">connect</a>(<a class="code" href="connection_8php.php#ac0e94bde61b4daacf57b336b5b5099d2">$DFOSS_DATABASE</a>);</div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160; </div>
<div class="line"><a name="l00011"></a><span class="lineno"><a class="line" href="getStations_8php.php#a047170d6020a882807665812a27e2525">   11</a></span>&#160;<a class="code" href="getStations_8php.php#a047170d6020a882807665812a27e2525">$sql</a> = <span class="stringliteral">&quot;SELECT WSTNCODE, LATITUDE, LONGITUDE&quot;</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;        .<span class="stringliteral">&quot; FROM [INPUTS].[CT_WSTN]&quot;</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;        .<span class="stringliteral">&quot; WHERE 0=0&quot;</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;        .<span class="stringliteral">&quot; AND WSTNCODE NOT LIKE &#39;4%&#39;&quot;</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;        .($minLat ? <span class="stringliteral">&quot; AND LATITUDE &gt;=&quot;</span>.$minLat : <span class="stringliteral">&quot;&quot;</span>)</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;        .(<a class="code" href="getStations_8php.php#ae70f081988550d1ff0f388098a7b9f43">$maxLat</a> ? <span class="stringliteral">&quot; AND LATITUDE &lt;=&quot;</span>.<a class="code" href="getStations_8php.php#ae70f081988550d1ff0f388098a7b9f43">$maxLat</a> : <span class="stringliteral">&quot;&quot;</span>)</div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;        .($minLon ? <span class="stringliteral">&quot; AND LONGITUDE &gt;=&quot;</span>.$minLon : <span class="stringliteral">&quot;&quot;</span>)</div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;        .(<a class="code" href="getStations_8php.php#ab71f4f40936f92ecfb0fdf5b97565e6c">$maxLon</a> ? <span class="stringliteral">&quot; AND LONGITUDE &lt;=&quot;</span>.<a class="code" href="getStations_8php.php#ab71f4f40936f92ecfb0fdf5b97565e6c">$maxLon</a> : <span class="stringliteral">&quot;&quot;</span>)</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;        .<span class="stringliteral">&quot; ORDER BY WSTNCODE ASC&quot;</span>;</div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160; </div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;<span class="keywordflow">if</span> (<a class="code" href="getStations_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">$conn</a>){</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;    $outputArray = array();</div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;    $stmt = <a class="code" href="connection_8php.php#adcbf4af1d8377c7c6400a37e29fc14df">try_query</a>(<a class="code" href="getStations_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">$conn</a>, <a class="code" href="getStations_8php.php#a047170d6020a882807665812a27e2525">$sql</a>);</div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    <span class="keywordflow">while</span>( $row = sqlsrv_fetch_array( $stmt, SQLSRV_FETCH_ASSOC) ) {</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;        $outputArray[$row[<span class="stringliteral">&#39;WSTNCODE&#39;</span>]] = array(</div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;                        floatval($row[<span class="stringliteral">&#39;LATITUDE&#39;</span>]),</div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;                        floatval($row[<span class="stringliteral">&#39;LONGITUDE&#39;</span>]),</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;                    );</div>
<div class="line"><a name="l00029"></a><span class="lineno">   29</span>&#160;    }</div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;    echo json_encode($outputArray);</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;}</div>
<div class="line"><a name="l00032"></a><span class="lineno"><a class="line" href="getStations_8php.php#a7707f363e61edfa68b139866ca77dfb9">   32</a></span>&#160;<span class="keywordflow">else</span>{</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;    echo(<span class="stringliteral">&quot;Error could not connect to SQL database: &quot;</span>.print_r( sqlsrv_errors(), <span class="keyword">true</span>));</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;}</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160; </div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;<span class="comment">/* Close the connection. */</span></div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;sqlsrv_close( <a class="code" href="getStations_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">$conn</a>);</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;?&gt;</div>
<div class="ttc" id="aconnection_8php_php_a1b1bd9b3f45a5fbd2549355282cdc96f"><div class="ttname"><a href="connection_8php.php#a1b1bd9b3f45a5fbd2549355282cdc96f">connect</a></div><div class="ttdeci">connect($db)</div><div class="ttdef"><b>Definition:</b> <a href="connection_8php_source.php#l00006">connection.php:6</a></div></div>
<div class="ttc" id="aconnection_8php_php_ac0e94bde61b4daacf57b336b5b5099d2"><div class="ttname"><a href="connection_8php.php#ac0e94bde61b4daacf57b336b5b5099d2">$DFOSS_DATABASE</a></div><div class="ttdeci">$DFOSS_DATABASE</div><div class="ttdef"><b>Definition:</b> <a href="connection_8php_source.php#l00003">connection.php:3</a></div></div>
<div class="ttc" id="aconnection_8php_php_adcbf4af1d8377c7c6400a37e29fc14df"><div class="ttname"><a href="connection_8php.php#adcbf4af1d8377c7c6400a37e29fc14df">try_query</a></div><div class="ttdeci">try_query($conn, $sql)</div><div class="ttdef"><b>Definition:</b> <a href="connection_8php_source.php#l00011">connection.php:11</a></div></div>
<div class="ttc" id="agetStations_8php_php_a047170d6020a882807665812a27e2525"><div class="ttname"><a href="getStations_8php.php#a047170d6020a882807665812a27e2525">$sql</a></div><div class="ttdeci">$sql</div><div class="ttdef"><b>Definition:</b> <a href="getStations_8php_source.php#l00011">getStations.php:11</a></div></div>
<div class="ttc" id="agetStations_8php_php_a7d61c857f4a029653c0ab902a2ddca13"><div class="ttname"><a href="getStations_8php.php#a7d61c857f4a029653c0ab902a2ddca13">$minLat</a></div><div class="ttdeci">$minLat</div><div class="ttdef"><b>Definition:</b> <a href="getStations_8php_source.php#l00004">getStations.php:4</a></div></div>
<div class="ttc" id="agetStations_8php_php_aa8a5a87b9c1a6a0819b88447cbe41877"><div class="ttname"><a href="getStations_8php.php#aa8a5a87b9c1a6a0819b88447cbe41877">$conn</a></div><div class="ttdeci">$conn</div><div class="ttdef"><b>Definition:</b> <a href="getStations_8php_source.php#l00009">getStations.php:9</a></div></div>
<div class="ttc" id="agetStations_8php_php_ab71f4f40936f92ecfb0fdf5b97565e6c"><div class="ttname"><a href="getStations_8php.php#ab71f4f40936f92ecfb0fdf5b97565e6c">$maxLon</a></div><div class="ttdeci">$maxLon</div><div class="ttdef"><b>Definition:</b> <a href="getStations_8php_source.php#l00007">getStations.php:7</a></div></div>
<div class="ttc" id="agetStations_8php_php_acf41c3ff0ae74390d323deff8caa1dd8"><div class="ttname"><a href="getStations_8php.php#acf41c3ff0ae74390d323deff8caa1dd8">$minLon</a></div><div class="ttdeci">$minLon</div><div class="ttdef"><b>Definition:</b> <a href="getStations_8php_source.php#l00006">getStations.php:6</a></div></div>
<div class="ttc" id="agetStations_8php_php_ae70f081988550d1ff0f388098a7b9f43"><div class="ttname"><a href="getStations_8php.php#ae70f081988550d1ff0f388098a7b9f43">$maxLat</a></div><div class="ttdeci">$maxLat</div><div class="ttdef"><b>Definition:</b> <a href="getStations_8php_source.php#l00005">getStations.php:5</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
