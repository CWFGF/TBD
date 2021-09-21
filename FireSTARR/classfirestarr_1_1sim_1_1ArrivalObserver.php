<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>FireSTARR: firestarr::sim::ArrivalObserver Class Reference</title>
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
<li class="navelem"><a class="el" href="namespacefirestarr.php">firestarr</a></li><li class="navelem"><a class="el" href="namespacefirestarr_1_1sim.php">sim</a></li><li class="navelem"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a></li>  </ul>
</div>
</div><!-- top -->
<div class="header">
  <div class="summary">
<a href="#pub-methods">Public Member Functions</a> &#124;
<a href="classfirestarr_1_1sim_1_1ArrivalObserver-members.php">List of all members</a>  </div>
  <div class="headertitle">
<div class="title">firestarr::sim::ArrivalObserver Class Reference<span class="mlabels"><span class="mlabel">final</span></span></div>  </div>
</div><!--header-->
<div class="contents">

<p>Tracks when fire initially arrives in a Cell.  
 <a href="classfirestarr_1_1sim_1_1ArrivalObserver.php#details">More...</a></p>

<p><code>#include &lt;<a class="el" href="Observer_8h_source.php">Observer.h</a>&gt;</code></p>
<div class="dynheader">
Inheritance diagram for firestarr::sim::ArrivalObserver:</div>
<div class="dyncontent">
<div class="center"><img src="classfirestarr_1_1sim_1_1ArrivalObserver__inherit__graph.png" border="0" usemap="#afirestarr_1_1sim_1_1ArrivalObserver_inherit__map" alt="Inheritance graph"/></div>
<map name="afirestarr_1_1sim_1_1ArrivalObserver_inherit__map" id="afirestarr_1_1sim_1_1ArrivalObserver_inherit__map">
<area shape="rect" title="Tracks when fire initially arrives in a Cell." alt="" coords="5,839,193,1004"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1MapObserver.php" title=" " alt="" coords="11,551,187,789"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1IObserver.php" title="Interface for observers that get notified when cells burn so they can track things." alt="" coords="17,5,171,215"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1MapObserver.php" title="An IObserver that tracks notification data using a GridMap." alt="" coords="116,264,323,488"/>
</map>
</div>
<div class="dynheader">
Collaboration diagram for firestarr::sim::ArrivalObserver:</div>
<div class="dyncontent">
<div class="center"><img src="classfirestarr_1_1sim_1_1ArrivalObserver__coll__graph.png" border="0" usemap="#afirestarr_1_1sim_1_1ArrivalObserver_coll__map" alt="Collaboration graph"/></div>
<map name="afirestarr_1_1sim_1_1ArrivalObserver_coll__map" id="afirestarr_1_1sim_1_1ArrivalObserver_coll__map">
<area shape="rect" title="Tracks when fire initially arrives in a Cell." alt="" coords="30,1147,218,1312"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1MapObserver.php" title=" " alt="" coords="36,859,212,1097"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1IObserver.php" title="Interface for observers that get notified when cells burn so they can track things." alt="" coords="5,315,160,524"/>
<area shape="rect" href="classfirestarr_1_1sim_1_1MapObserver.php" title="An IObserver that tracks notification data using a GridMap." alt="" coords="150,587,357,796"/>
<area shape="rect" title=" " alt="" coords="184,373,344,465"/>
<area shape="rect" title=" " alt="" coords="192,153,328,230"/>
<area shape="rect" title=" " alt="" coords="241,5,279,83"/>
<area shape="rect" title=" " alt="" coords="373,381,451,458"/>
<area shape="rect" title=" " alt="" coords="351,145,475,237"/>
</map>
</div>
<table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="pub-methods"></a>
Public Member Functions</h2></td></tr>
<tr class="memitem:a84b75eeda0360c2426c4f37200df198d"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a84b75eeda0360c2426c4f37200df198d">~ArrivalObserver</a> ()=default</td></tr>
<tr class="separator:a84b75eeda0360c2426c4f37200df198d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5faab947586e79acc3cb3dbd3f541628"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a5faab947586e79acc3cb3dbd3f541628">ArrivalObserver</a> (const <a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;rhs)=delete</td></tr>
<tr class="separator:a5faab947586e79acc3cb3dbd3f541628"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a1052ac83155e4f5a6bc9fa3ee62c49b5"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a1052ac83155e4f5a6bc9fa3ee62c49b5">ArrivalObserver</a> (<a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&amp;rhs)=delete</td></tr>
<tr class="separator:a1052ac83155e4f5a6bc9fa3ee62c49b5"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a10ea5cc6a00248e8f210772f701f7788"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a10ea5cc6a00248e8f210772f701f7788">operator=</a> (const <a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;rhs)=delete</td></tr>
<tr class="separator:a10ea5cc6a00248e8f210772f701f7788"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3f75a82754db8c1e3cd9fc1316ad5f4d"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a3f75a82754db8c1e3cd9fc1316ad5f4d">operator=</a> (<a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&amp;rhs)=delete</td></tr>
<tr class="separator:a3f75a82754db8c1e3cd9fc1316ad5f4d"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a56c08bf1fcf071a7e0e83f8de9dad3f9"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a56c08bf1fcf071a7e0e83f8de9dad3f9">ArrivalObserver</a> (const <a class="el" href="classfirestarr_1_1sim_1_1Scenario.php">Scenario</a> &amp;scenario)</td></tr>
<tr class="memdesc:a56c08bf1fcf071a7e0e83f8de9dad3f9"><td class="mdescLeft">&#160;</td><td class="mdescRight">Constructor.  <a href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a56c08bf1fcf071a7e0e83f8de9dad3f9">More...</a><br /></td></tr>
<tr class="separator:a56c08bf1fcf071a7e0e83f8de9dad3f9"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a31e4574ac5d9a9688f1369bc34e14aee"><td class="memItemLeft" align="right" valign="top">double&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a31e4574ac5d9a9688f1369bc34e14aee">getValue</a> (const <a class="el" href="classfirestarr_1_1sim_1_1Event.php">Event</a> &amp;event) const noexcept override</td></tr>
<tr class="memdesc:a31e4574ac5d9a9688f1369bc34e14aee"><td class="mdescLeft">&#160;</td><td class="mdescRight">Function that returns the value we care about regarding the <a class="el" href="classfirestarr_1_1sim_1_1Event.php" title="A specific Event scheduled in a specific Scenario.">Event</a>.  <a href="classfirestarr_1_1sim_1_1ArrivalObserver.php#a31e4574ac5d9a9688f1369bc34e14aee">More...</a><br /></td></tr>
<tr class="separator:a31e4574ac5d9a9688f1369bc34e14aee"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_classfirestarr_1_1sim_1_1MapObserver')"><img src="closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">firestarr::sim::MapObserver&lt; double &gt;</a></td></tr>
<tr class="memitem:a1fcefb912f9c359bd8335157886a2dcf inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#a1fcefb912f9c359bd8335157886a2dcf">~MapObserver</a> ()=default</td></tr>
<tr class="separator:a1fcefb912f9c359bd8335157886a2dcf inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a479585ccd1737a4f9f7c3703e0583919 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#a479585ccd1737a4f9f7c3703e0583919">MapObserver</a> (const <a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">MapObserver</a> &amp;rhs)=delete</td></tr>
<tr class="separator:a479585ccd1737a4f9f7c3703e0583919 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aaee34211ea028a17b2dd8c6746cb5ebb inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#aaee34211ea028a17b2dd8c6746cb5ebb">MapObserver</a> (<a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">MapObserver</a> &amp;&amp;rhs)=delete</td></tr>
<tr class="separator:aaee34211ea028a17b2dd8c6746cb5ebb inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a3e51c76a6f2f9776cdff4743b6759b46 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#a3e51c76a6f2f9776cdff4743b6759b46">MapObserver</a> (const <a class="el" href="classfirestarr_1_1sim_1_1Scenario.php">Scenario</a> &amp;scenario, double nodata, string suffix)</td></tr>
<tr class="memdesc:a3e51c76a6f2f9776cdff4743b6759b46 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="mdescLeft">&#160;</td><td class="mdescRight">Keeps observations in a map.  <a href="classfirestarr_1_1sim_1_1MapObserver.php#a3e51c76a6f2f9776cdff4743b6759b46">More...</a><br /></td></tr>
<tr class="separator:a3e51c76a6f2f9776cdff4743b6759b46 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a997b7ff8731e9c8db42467c340a584ca inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">MapObserver</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#a997b7ff8731e9c8db42467c340a584ca">operator=</a> (const <a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">MapObserver</a> &amp;rhs)=delete</td></tr>
<tr class="separator:a997b7ff8731e9c8db42467c340a584ca inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ab7b43e5c8335a413313d49520a1ad44e inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">MapObserver</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#ab7b43e5c8335a413313d49520a1ad44e">operator=</a> (<a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php">MapObserver</a> &amp;&amp;rhs)=delete</td></tr>
<tr class="separator:ab7b43e5c8335a413313d49520a1ad44e inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a4a4e343e1e1439ae6765cf50e1c23c56 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#a4a4e343e1e1439ae6765cf50e1c23c56">handleEvent</a> (const <a class="el" href="classfirestarr_1_1sim_1_1Event.php">Event</a> &amp;event) override</td></tr>
<tr class="memdesc:a4a4e343e1e1439ae6765cf50e1c23c56 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="mdescLeft">&#160;</td><td class="mdescRight">Handle given event.  <a href="classfirestarr_1_1sim_1_1MapObserver.php#a4a4e343e1e1439ae6765cf50e1c23c56">More...</a><br /></td></tr>
<tr class="separator:a4a4e343e1e1439ae6765cf50e1c23c56 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:afdaac04f3df0a525656064b77a571853 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#afdaac04f3df0a525656064b77a571853">save</a> (const string &amp;dir, const string &amp;base_name) const override</td></tr>
<tr class="memdesc:afdaac04f3df0a525656064b77a571853 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="mdescLeft">&#160;</td><td class="mdescRight">Save observations.  <a href="classfirestarr_1_1sim_1_1MapObserver.php#afdaac04f3df0a525656064b77a571853">More...</a><br /></td></tr>
<tr class="separator:afdaac04f3df0a525656064b77a571853 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aafd8d358b23ae450f904a7ae285ceb10 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memItemLeft" align="right" valign="top">void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#aafd8d358b23ae450f904a7ae285ceb10">reset</a> () noexcept override</td></tr>
<tr class="memdesc:aafd8d358b23ae450f904a7ae285ceb10 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="mdescLeft">&#160;</td><td class="mdescRight">Clear all observations.  <a href="classfirestarr_1_1sim_1_1MapObserver.php#aafd8d358b23ae450f904a7ae285ceb10">More...</a><br /></td></tr>
<tr class="separator:aafd8d358b23ae450f904a7ae285ceb10 inherit pub_methods_classfirestarr_1_1sim_1_1MapObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pub_methods_classfirestarr_1_1sim_1_1IObserver"><td colspan="2" onclick="javascript:toggleInherit('pub_methods_classfirestarr_1_1sim_1_1IObserver')"><img src="closed.png" alt="-"/>&#160;Public Member Functions inherited from <a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">firestarr::sim::IObserver</a></td></tr>
<tr class="memitem:a1f4443d3dfc971ec84b56f9062799455 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top">virtual&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#a1f4443d3dfc971ec84b56f9062799455">~IObserver</a> ()=default</td></tr>
<tr class="separator:a1f4443d3dfc971ec84b56f9062799455 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a71bc9553ec42b6bb0fb131ce878da43f inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#a71bc9553ec42b6bb0fb131ce878da43f">IObserver</a> (const <a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">IObserver</a> &amp;rhs)=delete</td></tr>
<tr class="separator:a71bc9553ec42b6bb0fb131ce878da43f inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:a5662b2130ce021e2a5a4b8609d380a9c inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#a5662b2130ce021e2a5a4b8609d380a9c">IObserver</a> (<a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">IObserver</a> &amp;&amp;rhs)=delete</td></tr>
<tr class="separator:a5662b2130ce021e2a5a4b8609d380a9c inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:af60e1cf373622851b02daa5b6c7e3055 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">IObserver</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#af60e1cf373622851b02daa5b6c7e3055">operator=</a> (const <a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">IObserver</a> &amp;rhs)=delete</td></tr>
<tr class="separator:af60e1cf373622851b02daa5b6c7e3055 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:ad2a21ac2b61c2209049355cd39159692 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">IObserver</a> &amp;&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#ad2a21ac2b61c2209049355cd39159692">operator=</a> (<a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">IObserver</a> &amp;&amp;rhs)=delete</td></tr>
<tr class="separator:ad2a21ac2b61c2209049355cd39159692 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="memitem:aa0a3a8e6dcc799c5db0d0c71e1361f15 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top">virtual void&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#aa0a3a8e6dcc799c5db0d0c71e1361f15">save</a> (const string &amp;dir, const string &amp;base_name) const =0</td></tr>
<tr class="memdesc:aa0a3a8e6dcc799c5db0d0c71e1361f15 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="mdescLeft">&#160;</td><td class="mdescRight">Save observations.  <a href="classfirestarr_1_1sim_1_1IObserver.php#aa0a3a8e6dcc799c5db0d0c71e1361f15">More...</a><br /></td></tr>
<tr class="separator:aa0a3a8e6dcc799c5db0d0c71e1361f15 inherit pub_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table><table class="memberdecls">
<tr class="heading"><td colspan="2"><h2 class="groupheader"><a name="inherited"></a>
Additional Inherited Members</h2></td></tr>
<tr class="inherit_header pub_static_methods_classfirestarr_1_1sim_1_1IObserver"><td colspan="2" onclick="javascript:toggleInherit('pub_static_methods_classfirestarr_1_1sim_1_1IObserver')"><img src="closed.png" alt="-"/>&#160;Static Public Member Functions inherited from <a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">firestarr::sim::IObserver</a></td></tr>
<tr class="memitem:adacd9cfd852b21084b6d39c91dac4c39 inherit pub_static_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top">static string&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#adacd9cfd852b21084b6d39c91dac4c39">makeName</a> (const string &amp;base_name, const string &amp;suffix)</td></tr>
<tr class="memdesc:adacd9cfd852b21084b6d39c91dac4c39 inherit pub_static_methods_classfirestarr_1_1sim_1_1IObserver"><td class="mdescLeft">&#160;</td><td class="mdescRight">Make name to save file as.  <a href="classfirestarr_1_1sim_1_1IObserver.php#adacd9cfd852b21084b6d39c91dac4c39">More...</a><br /></td></tr>
<tr class="separator:adacd9cfd852b21084b6d39c91dac4c39 inherit pub_static_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
<tr class="inherit_header pro_methods_classfirestarr_1_1sim_1_1IObserver"><td colspan="2" onclick="javascript:toggleInherit('pro_methods_classfirestarr_1_1sim_1_1IObserver')"><img src="closed.png" alt="-"/>&#160;Protected Member Functions inherited from <a class="el" href="classfirestarr_1_1sim_1_1IObserver.php">firestarr::sim::IObserver</a></td></tr>
<tr class="memitem:a19a9f0c6ae31d03c9a6d375280c06c66 inherit pro_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memItemLeft" align="right" valign="top">&#160;</td><td class="memItemRight" valign="bottom"><a class="el" href="classfirestarr_1_1sim_1_1IObserver.php#a19a9f0c6ae31d03c9a6d375280c06c66">IObserver</a> ()=default</td></tr>
<tr class="separator:a19a9f0c6ae31d03c9a6d375280c06c66 inherit pro_methods_classfirestarr_1_1sim_1_1IObserver"><td class="memSeparator" colspan="2">&#160;</td></tr>
</table>
<a name="details" id="details"></a><h2 class="groupheader">Detailed Description</h2>
<div class="textblock"><p>Tracks when fire initially arrives in a Cell. </p>

<p class="definition">Definition at line <a class="el" href="Observer_8h_source.php#l00134">134</a> of file <a class="el" href="Observer_8h_source.php">Observer.h</a>.</p>
</div><h2 class="groupheader">Constructor &amp; Destructor Documentation</h2>
<a id="a84b75eeda0360c2426c4f37200df198d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a84b75eeda0360c2426c4f37200df198d">&#9670;&nbsp;</a></span>~ArrivalObserver()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">firestarr::sim::ArrivalObserver::~ArrivalObserver </td>
          <td>(</td>
          <td class="paramname"></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">default</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a5faab947586e79acc3cb3dbd3f541628"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a5faab947586e79acc3cb3dbd3f541628">&#9670;&nbsp;</a></span>ArrivalObserver() <span class="overload">[1/3]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">firestarr::sim::ArrivalObserver::ArrivalObserver </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&#160;</td>
          <td class="paramname"><em>rhs</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a1052ac83155e4f5a6bc9fa3ee62c49b5"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a1052ac83155e4f5a6bc9fa3ee62c49b5">&#9670;&nbsp;</a></span>ArrivalObserver() <span class="overload">[2/3]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">firestarr::sim::ArrivalObserver::ArrivalObserver </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>rhs</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a56c08bf1fcf071a7e0e83f8de9dad3f9"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a56c08bf1fcf071a7e0e83f8de9dad3f9">&#9670;&nbsp;</a></span>ArrivalObserver() <span class="overload">[3/3]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">firestarr::sim::ArrivalObserver::ArrivalObserver </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classfirestarr_1_1sim_1_1Scenario.php">Scenario</a> &amp;&#160;</td>
          <td class="paramname"><em>scenario</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">explicit</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Constructor. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">scenario</td><td><a class="el" href="classfirestarr_1_1sim_1_1Scenario.php" title="A single Scenario in an Iteration using a specific FireWeather stream.">Scenario</a> to track </td></tr>
  </table>
  </dd>
</dl>

<p class="definition">Definition at line <a class="el" href="Observer_8cpp_source.php#l00032">32</a> of file <a class="el" href="Observer_8cpp_source.php">Observer.cpp</a>.</p>

</div>
</div>
<h2 class="groupheader">Member Function Documentation</h2>
<a id="a31e4574ac5d9a9688f1369bc34e14aee"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a31e4574ac5d9a9688f1369bc34e14aee">&#9670;&nbsp;</a></span>getValue()</h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname">double firestarr::sim::ArrivalObserver::getValue </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classfirestarr_1_1sim_1_1Event.php">Event</a> &amp;&#160;</td>
          <td class="paramname"><em>event</em></td><td>)</td>
          <td> const</td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">override</span><span class="mlabel">virtual</span><span class="mlabel">noexcept</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

<p>Function that returns the value we care about regarding the <a class="el" href="classfirestarr_1_1sim_1_1Event.php" title="A specific Event scheduled in a specific Scenario.">Event</a>. </p>
<dl class="params"><dt>Parameters</dt><dd>
  <table class="params">
    <tr><td class="paramname">event</td><td></td></tr>
  </table>
  </dd>
</dl>
<dl class="section return"><dt>Returns</dt><dd></dd></dl>

<p>Implements <a class="el" href="classfirestarr_1_1sim_1_1MapObserver.php#a20ce8feaf7c9816d6c7ebf172830561b">firestarr::sim::MapObserver&lt; double &gt;</a>.</p>

<p class="definition">Definition at line <a class="el" href="Observer_8cpp_source.php#l00036">36</a> of file <a class="el" href="Observer_8cpp_source.php">Observer.cpp</a>.</p>

</div>
</div>
<a id="a3f75a82754db8c1e3cd9fc1316ad5f4d"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a3f75a82754db8c1e3cd9fc1316ad5f4d">&#9670;&nbsp;</a></span>operator=() <span class="overload">[1/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a>&amp; firestarr::sim::ArrivalObserver::operator= </td>
          <td>(</td>
          <td class="paramtype"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&amp;&#160;</td>
          <td class="paramname"><em>rhs</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<a id="a10ea5cc6a00248e8f210772f701f7788"></a>
<h2 class="memtitle"><span class="permalink"><a href="#a10ea5cc6a00248e8f210772f701f7788">&#9670;&nbsp;</a></span>operator=() <span class="overload">[2/2]</span></h2>

<div class="memitem">
<div class="memproto">
<table class="mlabels">
  <tr>
  <td class="mlabels-left">
      <table class="memname">
        <tr>
          <td class="memname"><a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a>&amp; firestarr::sim::ArrivalObserver::operator= </td>
          <td>(</td>
          <td class="paramtype">const <a class="el" href="classfirestarr_1_1sim_1_1ArrivalObserver.php">ArrivalObserver</a> &amp;&#160;</td>
          <td class="paramname"><em>rhs</em></td><td>)</td>
          <td></td>
        </tr>
      </table>
  </td>
  <td class="mlabels-right">
<span class="mlabels"><span class="mlabel">delete</span></span>  </td>
  </tr>
</table>
</div><div class="memdoc">

</div>
</div>
<hr/>The documentation for this class was generated from the following files:<ul>
<li>FireSTARR/src/<a class="el" href="Observer_8h_source.php">Observer.h</a></li>
<li>FireSTARR/src/<a class="el" href="Observer_8cpp_source.php">Observer.cpp</a></li>
</ul>
</div><!-- contents -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
