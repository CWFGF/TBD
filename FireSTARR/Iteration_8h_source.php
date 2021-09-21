<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: FireSTARR/src/Iteration.h Source File</title>
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
  <div class="headertitle">
<div class="title">Iteration.h</div>  </div>
</div><!--header-->
<div class="contents">
<a href="Iteration_8h.php">Go to the documentation of this file.</a><div class="fragment"><div class="line"><a name="l00001"></a><span class="lineno">    1</span>&#160;<span class="comment">// Copyright (c) 2020-2021, Queen&#39;s Printer for Ontario.</span></div>
<div class="line"><a name="l00002"></a><span class="lineno">    2</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00003"></a><span class="lineno">    3</span>&#160;<span class="comment">// This program is free software: you can redistribute it and/or modify</span></div>
<div class="line"><a name="l00004"></a><span class="lineno">    4</span>&#160;<span class="comment">// it under the terms of the GNU Affero General Public License as</span></div>
<div class="line"><a name="l00005"></a><span class="lineno">    5</span>&#160;<span class="comment">// published by the Free Software Foundation, either version 3 of the</span></div>
<div class="line"><a name="l00006"></a><span class="lineno">    6</span>&#160;<span class="comment">// License, or (at your option) any later version.</span></div>
<div class="line"><a name="l00007"></a><span class="lineno">    7</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00008"></a><span class="lineno">    8</span>&#160;<span class="comment">// This program is distributed in the hope that it will be useful,</span></div>
<div class="line"><a name="l00009"></a><span class="lineno">    9</span>&#160;<span class="comment">// but WITHOUT ANY WARRANTY; without even the implied warranty of</span></div>
<div class="line"><a name="l00010"></a><span class="lineno">   10</span>&#160;<span class="comment">// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the</span></div>
<div class="line"><a name="l00011"></a><span class="lineno">   11</span>&#160;<span class="comment">// GNU Affero General Public License for more details.</span></div>
<div class="line"><a name="l00012"></a><span class="lineno">   12</span>&#160;<span class="comment">//</span></div>
<div class="line"><a name="l00013"></a><span class="lineno">   13</span>&#160;<span class="comment">// You should have received a copy of the GNU Affero General Public License</span></div>
<div class="line"><a name="l00014"></a><span class="lineno">   14</span>&#160;<span class="comment">// along with this program.  If not, see &lt;https://www.gnu.org/licenses/&gt;.</span></div>
<div class="line"><a name="l00015"></a><span class="lineno">   15</span>&#160; </div>
<div class="line"><a name="l00016"></a><span class="lineno">   16</span>&#160;<span class="preprocessor">#pragma once</span></div>
<div class="line"><a name="l00017"></a><span class="lineno">   17</span>&#160;<span class="preprocessor">#include &lt;random&gt;</span></div>
<div class="line"><a name="l00018"></a><span class="lineno">   18</span>&#160;<span class="preprocessor">#include &lt;vector&gt;</span></div>
<div class="line"><a name="l00019"></a><span class="lineno">   19</span>&#160;<span class="preprocessor">#include &quot;<a class="code" href="SafeVector_8h.php">SafeVector.h</a>&quot;</span></div>
<div class="line"><a name="l00020"></a><span class="lineno">   20</span>&#160;<span class="keyword">namespace </span><a class="code" href="namespacefirestarr.php">firestarr</a></div>
<div class="line"><a name="l00021"></a><span class="lineno">   21</span>&#160;{</div>
<div class="line"><a name="l00022"></a><span class="lineno">   22</span>&#160;<span class="keyword">namespace </span>sim</div>
<div class="line"><a name="l00023"></a><span class="lineno">   23</span>&#160;{</div>
<div class="line"><a name="l00024"></a><span class="lineno">   24</span>&#160;<span class="keyword">class </span>ProbabilityMap;</div>
<div class="line"><a name="l00025"></a><span class="lineno">   25</span>&#160;<span class="keyword">class </span>Scenario;</div>
<div class="line"><a name="l00029"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php">   29</a></span>&#160;<span class="keyword">class </span><a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a></div>
<div class="line"><a name="l00030"></a><span class="lineno">   30</span>&#160;{</div>
<div class="line"><a name="l00031"></a><span class="lineno">   31</span>&#160;<span class="keyword">public</span>:</div>
<div class="line"><a name="l00032"></a><span class="lineno">   32</span>&#160;  <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#aace53720196a55cdee20834843f085e9">~Iteration</a>();</div>
<div class="line"><a name="l00037"></a><span class="lineno">   37</span>&#160;  <span class="keyword">explicit</span> <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#ac0d131badf011e4b89f24031f96e3b8a">Iteration</a>(vector&lt;Scenario*&gt; scenarios) noexcept;</div>
<div class="line"><a name="l00042"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#ae7b19d5720209d3e950dc9d7f9f027f4">   42</a></span>&#160;  <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#ae7b19d5720209d3e950dc9d7f9f027f4">Iteration</a>(<span class="keyword">const</span> <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>&amp; rhs) = <span class="keywordflow">default</span>;</div>
<div class="line"><a name="l00047"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#a45d067bf38830ceeb43b33af6a664429">   47</a></span>&#160;  <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a45d067bf38830ceeb43b33af6a664429">Iteration</a>(<a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>&amp;&amp; rhs) = <span class="keywordflow">default</span>;</div>
<div class="line"><a name="l00053"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#aba253601503aba4657ab30fcf66ceaeb">   53</a></span>&#160;  <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>&amp; <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#aba253601503aba4657ab30fcf66ceaeb">operator=</a>(<span class="keyword">const</span> <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>&amp; rhs) = <span class="keywordflow">default</span>;</div>
<div class="line"><a name="l00059"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#a4a88266ccff946d755d5a79cedef64f1">   59</a></span>&#160;  <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>&amp; <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a4a88266ccff946d755d5a79cedef64f1">operator=</a>(<a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>&amp;&amp; rhs) = <span class="keywordflow">default</span>;</div>
<div class="line"><a name="l00066"></a><span class="lineno">   66</span>&#160;  <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php">Iteration</a>* <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a89e3d6b9f08c1024d0e85f2b269e7505">reset</a>(mt19937* mt_extinction, mt19937* mt_spread);</div>
<div class="line"><a name="l00071"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#a5d167ab76a1f0e412559fee647c4423c">   71</a></span>&#160;  <span class="keyword">const</span> vector&lt;Scenario*&gt;&amp; <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a5d167ab76a1f0e412559fee647c4423c">getScenarios</a>() const noexcept</div>
<div class="line"><a name="l00072"></a><span class="lineno">   72</span>&#160;  {</div>
<div class="line"><a name="l00073"></a><span class="lineno">   73</span>&#160;    <span class="keywordflow">return</span> <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a6097e40216a117a840b07bf4003e0787">scenarios_</a>;</div>
<div class="line"><a name="l00074"></a><span class="lineno">   74</span>&#160;  }</div>
<div class="line"><a name="l00079"></a><span class="lineno">   79</span>&#160;  [[nodiscard]] vector&lt;double&gt; <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a45b02ddfcfcd7f2344b6ba7f322f493b">savePoints</a>() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00084"></a><span class="lineno">   84</span>&#160;  [[nodiscard]] <span class="keywordtype">double</span> <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#afe3bed72474dcc56b212920e6ad1a1dc">startTime</a>() <span class="keyword">const</span>;</div>
<div class="line"><a name="l00089"></a><span class="lineno">   89</span>&#160;  [[nodiscard]] <span class="keywordtype">size_t</span> <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#ab2db4102f96838ae69df1a21eb2777df">size</a>() const noexcept;</div>
<div class="line"><a name="l00094"></a><span class="lineno">   94</span>&#160;  [[nodiscard]] util::SafeVector <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#ab217fcbbfb796fa840d4414b3014305e">finalSizes</a>() const;</div>
<div class="line"><a name="l00095"></a><span class="lineno">   95</span>&#160;private:</div>
<div class="line"><a name="l00099"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#a6097e40216a117a840b07bf4003e0787">   99</a></span>&#160;  vector&lt;<a class="code" href="classfirestarr_1_1sim_1_1Scenario.php">Scenario</a>*&gt; <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a6097e40216a117a840b07bf4003e0787">scenarios_</a>;</div>
<div class="line"><a name="l00103"></a><span class="lineno"><a class="line" href="classfirestarr_1_1sim_1_1Iteration.php#a6d72684fc99fa69ed537cb11d54d5298">  103</a></span>&#160;  util::SafeVector <a class="code" href="classfirestarr_1_1sim_1_1Iteration.php#a6d72684fc99fa69ed537cb11d54d5298">final_sizes_</a>{};</div>
<div class="line"><a name="l00104"></a><span class="lineno">  104</span>&#160;};</div>
<div class="line"><a name="l00105"></a><span class="lineno">  105</span>&#160;}</div>
<div class="line"><a name="l00106"></a><span class="lineno">  106</span>&#160;}</div>
<div class="ttc" id="aSafeVector_8h_php"><div class="ttname"><a href="SafeVector_8h.php">SafeVector.h</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php">firestarr::sim::Iteration</a></div><div class="ttdoc">Represents a full set of simulations using all available weather streams.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8h_source.php#l00029">Iteration.h:30</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a45b02ddfcfcd7f2344b6ba7f322f493b"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a45b02ddfcfcd7f2344b6ba7f322f493b">firestarr::sim::Iteration::savePoints</a></div><div class="ttdeci">vector&lt; double &gt; savePoints() const</div><div class="ttdoc">Points in time that ProbabilityMaps get saved for.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00091">Iteration.cpp:91</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a45d067bf38830ceeb43b33af6a664429"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a45d067bf38830ceeb43b33af6a664429">firestarr::sim::Iteration::Iteration</a></div><div class="ttdeci">Iteration(Iteration &amp;&amp;rhs)=default</div><div class="ttdoc">Move constructor.</div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a4a88266ccff946d755d5a79cedef64f1"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a4a88266ccff946d755d5a79cedef64f1">firestarr::sim::Iteration::operator=</a></div><div class="ttdeci">Iteration &amp; operator=(Iteration &amp;&amp;rhs)=default</div><div class="ttdoc">Move assignment.</div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a5d167ab76a1f0e412559fee647c4423c"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a5d167ab76a1f0e412559fee647c4423c">firestarr::sim::Iteration::getScenarios</a></div><div class="ttdeci">const vector&lt; Scenario * &gt; &amp; getScenarios() const noexcept</div><div class="ttdoc">List of Scenarios this Iteration contains.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8h_source.php#l00071">Iteration.h:71</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a6097e40216a117a840b07bf4003e0787"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a6097e40216a117a840b07bf4003e0787">firestarr::sim::Iteration::scenarios_</a></div><div class="ttdeci">vector&lt; Scenario * &gt; scenarios_</div><div class="ttdoc">List of Scenarios this Iteration contains.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8h_source.php#l00099">Iteration.h:99</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a6d72684fc99fa69ed537cb11d54d5298"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a6d72684fc99fa69ed537cb11d54d5298">firestarr::sim::Iteration::final_sizes_</a></div><div class="ttdeci">util::SafeVector final_sizes_</div><div class="ttdoc">SafeVector of sizes that Scenarios have resulted in.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8h_source.php#l00103">Iteration.h:103</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_a89e3d6b9f08c1024d0e85f2b269e7505"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#a89e3d6b9f08c1024d0e85f2b269e7505">firestarr::sim::Iteration::reset</a></div><div class="ttdeci">Iteration * reset(mt19937 *mt_extinction, mt19937 *mt_spread)</div><div class="ttdoc">Create new thresholds for use in each Scenario.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00035">Iteration.cpp:35</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_aace53720196a55cdee20834843f085e9"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#aace53720196a55cdee20834843f085e9">firestarr::sim::Iteration::~Iteration</a></div><div class="ttdeci">~Iteration()</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00024">Iteration.cpp:24</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_ab217fcbbfb796fa840d4414b3014305e"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#ab217fcbbfb796fa840d4414b3014305e">firestarr::sim::Iteration::finalSizes</a></div><div class="ttdeci">util::SafeVector finalSizes() const</div><div class="ttdoc">SafeVector of sizes that Scenarios have resulted in.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00103">Iteration.cpp:103</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_ab2db4102f96838ae69df1a21eb2777df"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#ab2db4102f96838ae69df1a21eb2777df">firestarr::sim::Iteration::size</a></div><div class="ttdeci">size_t size() const noexcept</div><div class="ttdoc">Number of Scenarios in this Iteration.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00099">Iteration.cpp:99</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_aba253601503aba4657ab30fcf66ceaeb"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#aba253601503aba4657ab30fcf66ceaeb">firestarr::sim::Iteration::operator=</a></div><div class="ttdeci">Iteration &amp; operator=(const Iteration &amp;rhs)=default</div><div class="ttdoc">Copy assignment.</div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_ac0d131badf011e4b89f24031f96e3b8a"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#ac0d131badf011e4b89f24031f96e3b8a">firestarr::sim::Iteration::Iteration</a></div><div class="ttdeci">Iteration(vector&lt; Scenario * &gt; scenarios) noexcept</div><div class="ttdoc">Constructor.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00031">Iteration.cpp:31</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_ae7b19d5720209d3e950dc9d7f9f027f4"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#ae7b19d5720209d3e950dc9d7f9f027f4">firestarr::sim::Iteration::Iteration</a></div><div class="ttdeci">Iteration(const Iteration &amp;rhs)=default</div><div class="ttdoc">Copy constructor.</div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Iteration_php_afe3bed72474dcc56b212920e6ad1a1dc"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Iteration.php#afe3bed72474dcc56b212920e6ad1a1dc">firestarr::sim::Iteration::startTime</a></div><div class="ttdeci">double startTime() const</div><div class="ttdoc">Time that simulations start.</div><div class="ttdef"><b>Definition:</b> <a href="Iteration_8cpp_source.php#l00095">Iteration.cpp:95</a></div></div>
<div class="ttc" id="aclassfirestarr_1_1sim_1_1Scenario_php"><div class="ttname"><a href="classfirestarr_1_1sim_1_1Scenario.php">firestarr::sim::Scenario</a></div><div class="ttdoc">A single Scenario in an Iteration using a specific FireWeather stream.</div><div class="ttdef"><b>Definition:</b> <a href="Scenario_8h_source.php#l00047">Scenario.h:48</a></div></div>
<div class="ttc" id="anamespacefirestarr_php"><div class="ttname"><a href="namespacefirestarr.php">firestarr</a></div><div class="ttdef"><b>Definition:</b> <a href="firestarr_8py_source.php#l00001">firestarr.py:1</a></div></div>
</div><!-- fragment --></div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
