<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: WeatherSHIELD/gui/firestarr/index.php Source File</title>
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
<li class="navelem"><a class="el" href="dir_efb9b02d96da17fe24d2757b77512e9c.php">WeatherSHIELD</a></li><li class="navelem"><a class="el" href="dir_5fc6f6a3a11d95919a5ab1ab667a4c80.php">gui</a></li><li class="navelem"><a class="el" href="dir_32dff87057e452ac0b7554cb953eb0a2.php">firestarr</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="headertitle">
<div class="title">index.php</div>  </div>
</div><!--header-->
<div class="contents">
<a href="firestarr_2index_8php.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;&lt;!DOCTYPE html&gt;</div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;&lt;html&gt;</div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160; </div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;&lt;head&gt;</div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;    &lt;title&gt;FireSTARR Outputs&lt;/title&gt;</div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;    &lt;meta name=<span class="stringliteral">&quot;viewport&quot;</span> content=<span class="stringliteral">&quot;width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no&quot;</span> /&gt;</div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;    &lt;link rel=<span class="stringliteral">&quot;stylesheet&quot;</span> href=<span class="stringliteral">&quot;//npmcdn.com/leaflet@1.2.0/dist/leaflet.css&quot;</span> /&gt;</div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;    &lt;link rel=<span class="stringliteral">&quot;stylesheet&quot;</span> href=<span class="stringliteral">&quot;https://ihcantabria.github.io/Leaflet.CanvasLayer.Field/examples.css&quot;</span> /&gt;</div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160; </div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;    &lt;link href=<span class="stringliteral">&quot;https://fonts.googleapis.com/css?family=Roboto:100,400&quot;</span> rel=<span class="stringliteral">&quot;stylesheet&quot;</span>&gt;</div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;&lt;/head&gt;</div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160; </div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;&lt;body&gt;</div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;    &lt;h1 <span class="keyword">class</span>=<span class="stringliteral">&quot;title mapTitle&quot;</span>&gt;FireSTARR Outputs&lt;/h1&gt;</div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160;    &lt;div <span class="keywordtype">id</span>=<span class="stringliteral">&quot;map&quot;</span>&gt;&lt;/div&gt;</div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160; </div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;    &lt;!-- CDN --&gt;</div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;    &lt;script src=<span class="stringliteral">&quot;//d3js.org/d3.v4.min.js&quot;</span>&gt;&lt;/script&gt;</div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;    &lt;script src=<span class="stringliteral">&quot;//npmcdn.com/leaflet@1.2.0/dist/leaflet.js&quot;</span>&gt;&lt;/script&gt;</div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;    &lt;script src=<span class="stringliteral">&quot;//npmcdn.com/geotiff@0.3.6/dist/geotiff.js&quot;</span>&gt;&lt;/script&gt;</div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;    &lt;script src=<span class="stringliteral">&quot;//cdnjs.cloudflare.com/ajax/libs/chroma-js/2.1.0/chroma.min.js&quot;</span>&gt;&lt;/script&gt;</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160; </div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;    &lt;!-- Plugin --&gt;</div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;    &lt;script src=<span class="stringliteral">&quot;https://ihcantabria.github.io/Leaflet.CanvasLayer.Field/dist/leaflet.canvaslayer.field.js&quot;</span>&gt;&lt;/script&gt;</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160; </div>
<div class="line"><a name="l00026"></a><span class="lineno">   26</span>&#160;    &lt;script&gt;</div>
<div class="line"><a name="l00027"></a><span class="lineno">   27</span>&#160;        let map = L.map(<span class="stringliteral">&#39;map&#39;</span>);</div>
<div class="line"><a name="l00028"></a><span class="lineno">   28</span>&#160;&lt;?php</div>
<div class="line"><a name="l00029"></a><span class="lineno"><a class="line" href="firestarr_2index_8php.php#a1e42906f7e81b68b33fc7ca9b36a2748">   29</a></span>&#160;<a class="code" href="firestarr_2index_8php.php#a1e42906f7e81b68b33fc7ca9b36a2748">$ROOT_DIR</a> = <span class="stringliteral">&#39;/app/data/output/&#39;</span>;</div>
<div class="line"><a name="l00030"></a><span class="lineno"><a class="line" href="firestarr_2index_8php.php#abb48f7c83753ddd42467c47693d024cf">   30</a></span>&#160;<a class="code" href="firestarr_2index_8php.php#abb48f7c83753ddd42467c47693d024cf">$PERIM_DIR</a> = <a class="code" href="firestarr_2index_8php.php#a1e42906f7e81b68b33fc7ca9b36a2748">$ROOT_DIR</a>.<span class="stringliteral">&#39;perimeter/&#39;</span>;</div>
<div class="line"><a name="l00031"></a><span class="lineno"><a class="line" href="firestarr_2index_8php.php#adaf36fef4479504eb91934435d643288">   31</a></span>&#160;<a class="code" href="firestarr_2index_8php.php#adaf36fef4479504eb91934435d643288">$PROB_DIR</a> = <a class="code" href="firestarr_2index_8php.php#a1e42906f7e81b68b33fc7ca9b36a2748">$ROOT_DIR</a>.<span class="stringliteral">&#39;probability/&#39;</span>;</div>
<div class="line"><a name="l00032"></a><span class="lineno"><a class="line" href="firestarr_2index_8php.php#ae0899f18eb7c111fda0c8b5ea1c0f214">   32</a></span>&#160;<span class="keyword">function</span> <a class="code" href="firestarr_2index_8php.php#ae0899f18eb7c111fda0c8b5ea1c0f214">listdir</a>($dir)</div>
<div class="line"><a name="l00033"></a><span class="lineno">   33</span>&#160;{</div>
<div class="line"><a name="l00034"></a><span class="lineno">   34</span>&#160;  $SEP = <span class="stringliteral">&#39;&#39;</span>;</div>
<div class="line"><a name="l00035"></a><span class="lineno">   35</span>&#160;  $EOL = <span class="stringliteral">&quot;\n&quot;</span>;</div>
<div class="line"><a name="l00036"></a><span class="lineno">   36</span>&#160;  $result = <span class="stringliteral">&#39;&#39;</span>;</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;  <span class="keywordflow">foreach</span>(scandir($dir) as $file) {</div>
<div class="line"><a name="l00038"></a><span class="lineno">   38</span>&#160;    <span class="keywordflow">if</span> ($file != <span class="charliteral">&#39;.&#39;</span> &amp;&amp; $file != <span class="stringliteral">&#39;..&#39;</span>)</div>
<div class="line"><a name="l00039"></a><span class="lineno">   39</span>&#160;    {</div>
<div class="line"><a name="l00040"></a><span class="lineno">   40</span>&#160;      $result = $result.$SEP.<span class="stringliteral">&quot;&#39;&quot;</span>.substr($dir, 4).$file.<span class="stringliteral">&quot;&#39;&quot;</span>;</div>
<div class="line"><a name="l00041"></a><span class="lineno">   41</span>&#160;      $SEP = <span class="stringliteral">&#39;, &#39;</span>;</div>
<div class="line"><a name="l00042"></a><span class="lineno">   42</span>&#160;    }</div>
<div class="line"><a name="l00043"></a><span class="lineno">   43</span>&#160;  }</div>
<div class="line"><a name="l00044"></a><span class="lineno">   44</span>&#160;  <span class="keywordflow">return</span> $result;</div>
<div class="line"><a name="l00045"></a><span class="lineno">   45</span>&#160;}</div>
<div class="line"><a name="l00046"></a><span class="lineno">   46</span>&#160;echo <span class="stringliteral">&#39;let perim_files = [&#39;</span>.listdir(<a class="code" href="firestarr_2index_8php.php#abb48f7c83753ddd42467c47693d024cf">$PERIM_DIR</a>.<span class="stringliteral">&#39;tiled/&#39;</span>).<span class="stringliteral">&quot;];\n&quot;</span>;</div>
<div class="line"><a name="l00047"></a><span class="lineno">   47</span>&#160;echo <span class="stringliteral">&#39;let prob_files = [&#39;</span>.listdir(<a class="code" href="firestarr_2index_8php.php#adaf36fef4479504eb91934435d643288">$PROB_DIR</a>.<span class="stringliteral">&#39;tiled/&#39;</span>).<span class="stringliteral">&quot;];\n&quot;</span>;</div>
<div class="line"><a name="l00048"></a><span class="lineno">   48</span>&#160;?&gt;</div>
<div class="line"><a name="l00049"></a><span class="lineno">   49</span>&#160;<span class="comment">// perim_files = perim_files.slice(-1);</span></div>
<div class="line"><a name="l00050"></a><span class="lineno">   50</span>&#160;<span class="comment">// prob_files = prob_files.slice(-1);</span></div>
<div class="line"><a name="l00051"></a><span class="lineno">   51</span>&#160;        <span class="comment">/* Dark basemap */</span></div>
<div class="line"><a name="l00052"></a><span class="lineno">   52</span>&#160;        let <a class="code" href="namespacegethistoric.php#aeb123afc0698fef1cb0a66a9ed29124e">url</a> = <span class="stringliteral">&#39;https://cartodb-basemaps-{s}.global.ssl.fastly.net/dark_nolabels/{z}/{x}/{y}.png&#39;</span>;</div>
<div class="line"><a name="l00053"></a><span class="lineno">   53</span>&#160;        L.tileLayer(<a class="code" href="namespacegethistoric.php#aeb123afc0698fef1cb0a66a9ed29124e">url</a>, {</div>
<div class="line"><a name="l00054"></a><span class="lineno">   54</span>&#160;            attribution: <span class="stringliteral">&#39;&amp;copy; &lt;a href=&quot;http://www.openstreetmap.org/copyright&quot;&gt;OpenStreetMap&lt;/a&gt; contributors, &amp;copy; &lt;a href=&quot;https://carto.com/attributions&quot;&gt;CARTO&lt;/a&gt;&#39;</span>,</div>
<div class="line"><a name="l00055"></a><span class="lineno">   55</span>&#160;            subdomains: <span class="stringliteral">&#39;abcd&#39;</span></div>
<div class="line"><a name="l00056"></a><span class="lineno">   56</span>&#160;        }).addTo(map);</div>
<div class="line"><a name="l00057"></a><span class="lineno">   57</span>&#160;        let perims = [];</div>
<div class="line"><a name="l00058"></a><span class="lineno">   58</span>&#160;        let probs = [];</div>
<div class="line"><a name="l00059"></a><span class="lineno">   59</span>&#160;        let expected_perims = perim_files.length;</div>
<div class="line"><a name="l00060"></a><span class="lineno">   60</span>&#160;        let expected_probs = prob_files.length;</div>
<div class="line"><a name="l00061"></a><span class="lineno">   61</span>&#160;        <span class="keyword">function</span> addPerim(i)</div>
<div class="line"><a name="l00062"></a><span class="lineno">   62</span>&#160;        {</div>
<div class="line"><a name="l00063"></a><span class="lineno">   63</span>&#160;          <span class="keywordflow">if</span> (i == perim_files.length)</div>
<div class="line"><a name="l00064"></a><span class="lineno">   64</span>&#160;          {</div>
<div class="line"><a name="l00065"></a><span class="lineno">   65</span>&#160;            <span class="comment">//setTimeout(function() { return addPerim(0); }, 0);</span></div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;            <span class="keywordflow">return</span>;</div>
<div class="line"><a name="l00067"></a><span class="lineno">   67</span>&#160;          }</div>
<div class="line"><a name="l00068"></a><span class="lineno">   68</span>&#160;          <span class="comment">// setTimeout(function() { return addPerim(i + 1); }, 0);</span></div>
<div class="line"><a name="l00069"></a><span class="lineno">   69</span>&#160;          file = perim_files[i];</div>
<div class="line"><a name="l00070"></a><span class="lineno">   70</span>&#160;          d3.request(file).responseType(<span class="stringliteral">&#39;arraybuffer&#39;</span>).get(</div>
<div class="line"><a name="l00071"></a><span class="lineno">   71</span>&#160;            <span class="keyword">function</span> (error, tiffData) {</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;              <span class="keywordflow">try</span> {</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;                let geo = L.ScalarField.fromGeoTIFF(tiffData.response, bandIndex = 0);</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;                let layerPerim = L.canvasLayer.scalarField(geo, {</div>
<div class="line"><a name="l00075"></a><span class="lineno">   75</span>&#160;                  color: chroma.scale(<span class="stringliteral">&#39;RdPu&#39;</span>).domain(geo.range),</div>
<div class="line"><a name="l00076"></a><span class="lineno">   76</span>&#160;                  opacity: 0.65,</div>
<div class="line"><a name="l00077"></a><span class="lineno">   77</span>&#160;                  inFilter: (v) =&gt; v !== 0</div>
<div class="line"><a name="l00078"></a><span class="lineno">   78</span>&#160;                });</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;                perims.push(layerPerim);</div>
<div class="line"><a name="l00080"></a><span class="lineno">   80</span>&#160;              } <span class="keywordflow">catch</span>(err) {</div>
<div class="line"><a name="l00081"></a><span class="lineno">   81</span>&#160;                expected_perims--;</div>
<div class="line"><a name="l00082"></a><span class="lineno">   82</span>&#160;              }</div>
<div class="line"><a name="l00083"></a><span class="lineno">   83</span>&#160;            });</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;        }</div>
<div class="line"><a name="l00085"></a><span class="lineno">   85</span>&#160;        <span class="keyword">function</span> addProb(i)</div>
<div class="line"><a name="l00086"></a><span class="lineno">   86</span>&#160;        {</div>
<div class="line"><a name="l00087"></a><span class="lineno">   87</span>&#160;          <span class="keywordflow">if</span> (i == prob_files.length)</div>
<div class="line"><a name="l00088"></a><span class="lineno">   88</span>&#160;          {</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;            <span class="keywordflow">return</span>;</div>
<div class="line"><a name="l00090"></a><span class="lineno">   90</span>&#160;          }</div>
<div class="line"><a name="l00091"></a><span class="lineno">   91</span>&#160;          <span class="comment">// setTimeout(function() { return addProb(i + 1); }, 0);</span></div>
<div class="line"><a name="l00092"></a><span class="lineno">   92</span>&#160;          file = prob_files[i];</div>
<div class="line"><a name="l00093"></a><span class="lineno">   93</span>&#160;          d3.request(file).responseType(<span class="stringliteral">&#39;arraybuffer&#39;</span>).get(</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;          <span class="keyword">function</span> (error, tiffData) {</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;            <span class="keywordflow">try</span> {</div>
<div class="line"><a name="l00096"></a><span class="lineno">   96</span>&#160;              let geo = L.ScalarField.fromGeoTIFF(tiffData.response, bandIndex = 0);</div>
<div class="line"><a name="l00097"></a><span class="lineno">   97</span>&#160; </div>
<div class="line"><a name="l00098"></a><span class="lineno">   98</span>&#160;              let layerProb = L.canvasLayer.scalarField(geo, {</div>
<div class="line"><a name="l00099"></a><span class="lineno">   99</span>&#160;                color: chroma.scale([<span class="stringliteral">&#39;#9fd0e3&#39;</span>, <span class="stringliteral">&#39;#faf68e&#39;</span>, <span class="stringliteral">&#39;#fcdf4c&#39;</span>, <span class="stringliteral">&#39;#fac043&#39;</span>, <span class="stringliteral">&#39;#f5a23d&#39;</span>, <span class="stringliteral">&#39;#f28938&#39;</span>, <span class="stringliteral">&#39;#f06b32&#39;</span>, <span class="stringliteral">&#39;#ed4e2b&#39;</span>, <span class="stringliteral">&#39;#eb3326&#39;</span>, <span class="stringliteral">&#39;#e6151f&#39;</span>]).domain([0,100]),</div>
<div class="line"><a name="l00100"></a><span class="lineno">  100</span>&#160;                opacity: 1.0,</div>
<div class="line"><a name="l00101"></a><span class="lineno">  101</span>&#160;                inFilter: (v) =&gt; v !== 0</div>
<div class="line"><a name="l00102"></a><span class="lineno">  102</span>&#160;              });</div>
<div class="line"><a name="l00103"></a><span class="lineno">  103</span>&#160;            layerProb.on(<span class="stringliteral">&#39;click&#39;</span>, function (e) {</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;              <span class="keywordflow">if</span> (e.value !== <span class="keyword">null</span>) {</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;                let v = e.value;</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;                let html = (`&lt;span class=<span class="stringliteral">&quot;popupText&quot;</span>&gt;Probability ${v}%&lt;/span&gt;`);</div>
<div class="line"><a name="l00107"></a><span class="lineno">  107</span>&#160;                let popup = L.popup()</div>
<div class="line"><a name="l00108"></a><span class="lineno">  108</span>&#160;                            .setLatLng(e.latlng)</div>
<div class="line"><a name="l00109"></a><span class="lineno">  109</span>&#160;                            .setContent(html)</div>
<div class="line"><a name="l00110"></a><span class="lineno">  110</span>&#160;                            .openOn(map);</div>
<div class="line"><a name="l00111"></a><span class="lineno">  111</span>&#160;                }</div>
<div class="line"><a name="l00112"></a><span class="lineno">  112</span>&#160;              });</div>
<div class="line"><a name="l00113"></a><span class="lineno">  113</span>&#160;              probs.push(layerProb);</div>
<div class="line"><a name="l00114"></a><span class="lineno">  114</span>&#160;            } <span class="keywordflow">catch</span>(err) {</div>
<div class="line"><a name="l00115"></a><span class="lineno">  115</span>&#160;              expected_probs--;</div>
<div class="line"><a name="l00116"></a><span class="lineno">  116</span>&#160;            }</div>
<div class="line"><a name="l00117"></a><span class="lineno">  117</span>&#160;          });</div>
<div class="line"><a name="l00118"></a><span class="lineno">  118</span>&#160;        }</div>
<div class="line"><a name="l00119"></a><span class="lineno">  119</span>&#160;        <span class="comment">// expected_perims = 0;</span></div>
<div class="line"><a name="l00120"></a><span class="lineno">  120</span>&#160;        <span class="comment">// addPerim(0);</span></div>
<div class="line"><a name="l00121"></a><span class="lineno">  121</span>&#160;        <span class="keywordflow">for</span> (i in perim_files)</div>
<div class="line"><a name="l00122"></a><span class="lineno">  122</span>&#160;        {</div>
<div class="line"><a name="l00123"></a><span class="lineno">  123</span>&#160;          addPerim(i);</div>
<div class="line"><a name="l00124"></a><span class="lineno">  124</span>&#160;        }</div>
<div class="line"><a name="l00125"></a><span class="lineno">  125</span>&#160;        <span class="comment">// addProb(0);</span></div>
<div class="line"><a name="l00126"></a><span class="lineno">  126</span>&#160;        <span class="keywordflow">for</span> (i in prob_files)</div>
<div class="line"><a name="l00127"></a><span class="lineno">  127</span>&#160;        {</div>
<div class="line"><a name="l00128"></a><span class="lineno">  128</span>&#160;          addProb(i);</div>
<div class="line"><a name="l00129"></a><span class="lineno">  129</span>&#160;        }</div>
<div class="line"><a name="l00130"></a><span class="lineno">  130</span>&#160;        <span class="keyword">function</span> checkWait()</div>
<div class="line"><a name="l00131"></a><span class="lineno">  131</span>&#160;        {</div>
<div class="line"><a name="l00132"></a><span class="lineno">  132</span>&#160;          <span class="keywordflow">if</span> (probs.length != expected_probs || perims.length != expected_perims)</div>
<div class="line"><a name="l00133"></a><span class="lineno">  133</span>&#160;          {</div>
<div class="line"><a name="l00134"></a><span class="lineno">  134</span>&#160;            setTimeout(checkWait, 100);</div>
<div class="line"><a name="l00135"></a><span class="lineno">  135</span>&#160;            <span class="keywordflow">return</span>;</div>
<div class="line"><a name="l00136"></a><span class="lineno">  136</span>&#160;          }</div>
<div class="line"><a name="l00137"></a><span class="lineno">  137</span>&#160;          <span class="comment">//alert(&#39;loaded&#39;);</span></div>
<div class="line"><a name="l00138"></a><span class="lineno">  138</span>&#160;          let perimGroup = L.featureGroup(perims).addTo(map);</div>
<div class="line"><a name="l00139"></a><span class="lineno">  139</span>&#160;          let probGroup = L.featureGroup(probs).addTo(map);</div>
<div class="line"><a name="l00140"></a><span class="lineno">  140</span>&#160;          L.control.layers({</div>
<div class="line"><a name="l00141"></a><span class="lineno">  141</span>&#160;              <span class="stringliteral">&quot;Perimeter&quot;</span>: perimGroup,</div>
<div class="line"><a name="l00142"></a><span class="lineno">  142</span>&#160;              <span class="stringliteral">&quot;Probability&quot;</span>: probGroup,</div>
<div class="line"><a name="l00143"></a><span class="lineno">  143</span>&#160;            }, {}, {</div>
<div class="line"><a name="l00144"></a><span class="lineno">  144</span>&#160;            position: <span class="stringliteral">&#39;bottomleft&#39;</span>,</div>
<div class="line"><a name="l00145"></a><span class="lineno">  145</span>&#160;            collapsed: <span class="keyword">false</span></div>
<div class="line"><a name="l00146"></a><span class="lineno">  146</span>&#160;          }).addTo(map);</div>
<div class="line"><a name="l00147"></a><span class="lineno">  147</span>&#160;          map.fitBounds(probGroup.getBounds());</div>
<div class="line"><a name="l00148"></a><span class="lineno">  148</span>&#160;        }</div>
<div class="line"><a name="l00149"></a><span class="lineno">  149</span>&#160;        setTimeout(checkWait, 100);</div>
<div class="line"><a name="l00150"></a><span class="lineno">  150</span>&#160; </div>
<div class="line"><a name="l00151"></a><span class="lineno">  151</span>&#160;    &lt;/script&gt;</div>
<div class="line"><a name="l00152"></a><span class="lineno">  152</span>&#160;&lt;/body&gt;</div>
<div class="line"><a name="l00153"></a><span class="lineno">  153</span>&#160; </div>
<div class="line"><a name="l00154"></a><span class="lineno">  154</span>&#160;&lt;/html&gt;</div>
<div class="line"><a name="l00155"></a><span class="lineno">  155</span>&#160; </div>
<div class="ttc" id="afirestarr_2index_8php_php_a1e42906f7e81b68b33fc7ca9b36a2748"><div class="ttname"><a href="firestarr_2index_8php.php#a1e42906f7e81b68b33fc7ca9b36a2748">$ROOT_DIR</a></div><div class="ttdeci">$ROOT_DIR</div><div class="ttdef"><b>Definition:</b> <a href="firestarr_2index_8php_source.php#l00029">index.php:29</a></div></div>
<div class="ttc" id="afirestarr_2index_8php_php_abb48f7c83753ddd42467c47693d024cf"><div class="ttname"><a href="firestarr_2index_8php.php#abb48f7c83753ddd42467c47693d024cf">$PERIM_DIR</a></div><div class="ttdeci">$PERIM_DIR</div><div class="ttdef"><b>Definition:</b> <a href="firestarr_2index_8php_source.php#l00030">index.php:30</a></div></div>
<div class="ttc" id="afirestarr_2index_8php_php_adaf36fef4479504eb91934435d643288"><div class="ttname"><a href="firestarr_2index_8php.php#adaf36fef4479504eb91934435d643288">$PROB_DIR</a></div><div class="ttdeci">$PROB_DIR</div><div class="ttdef"><b>Definition:</b> <a href="firestarr_2index_8php_source.php#l00031">index.php:31</a></div></div>
<div class="ttc" id="afirestarr_2index_8php_php_ae0899f18eb7c111fda0c8b5ea1c0f214"><div class="ttname"><a href="firestarr_2index_8php.php#ae0899f18eb7c111fda0c8b5ea1c0f214">listdir</a></div><div class="ttdeci">listdir($dir)</div><div class="ttdef"><b>Definition:</b> <a href="firestarr_2index_8php_source.php#l00032">index.php:32</a></div></div>
<div class="ttc" id="anamespacegethistoric_php_aeb123afc0698fef1cb0a66a9ed29124e"><div class="ttname"><a href="namespacegethistoric.php#aeb123afc0698fef1cb0a66a9ed29124e">gethistoric.url</a></div><div class="ttdeci">url</div><div class="ttdoc">URL for downloading.</div><div class="ttdef"><b>Definition:</b> <a href="gethistoric_8py_source.php#l00025">gethistoric.py:25</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
