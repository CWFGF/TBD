<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "https://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/xhtml;charset=UTF-8"/>
<meta http-equiv="X-UA-Compatible" content="IE=9"/>
<meta name="generator" content="Doxygen 1.9.1"/>
<meta name="viewport" content="width=device-width, initial-scale=1"/>
<title>WeatherSHIELD: chartjs-plugin-annotation.js</title>
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

</div><!-- top -->
<div class="PageDoc"><div class="header">
  <div class="headertitle">
<div class="title">chartjs-plugin-annotation.js </div>  </div>
</div><!--header-->
<div class="contents">
<div class="textblock"><p><a href="https://cdnjs.com/libraries/chartjs-plugin-annotation"><img src="https://img.shields.io/cdnjs/v/chartjs-plugin-annotation.svg" alt="CDNJS version" style="pointer-events: none;" class="inline"/></a></p>
<p>An annotation plugin for Chart.js &gt;= 2.4.0</p>
<p>This plugin draws lines and boxes on the chart area.</p>
<p>Annotations work with line, bar, scatter and bubble charts that use linear, logarithmic, time, or category scales. Annotations will not work on any chart that does not have exactly two axes, including pie, radar, and polar area charts.</p>
<p><img src="https://www.dropbox.com/s/92cmt8zrth55z55/Screenshot%202017-05-20%2018.26.39.png?raw=1" alt="Example Screenshot from Dropbox" class="inline"/></p>
<p><a href="https://codepen.io/compwright/full/mmQMrZ/">View this example on CodePen</a></p>
<h1><a class="anchor" id="autotoc_md1"></a>
Configuration</h1>
<p>To configure the annotations plugin, you can simply add new config options to your chart config.</p>
<div class="fragment"><div class="line">{</div>
<div class="line">    plugins: {</div>
<div class="line">        annotation: {</div>
<div class="line">            // Defines when the annotations are drawn.</div>
<div class="line">            // This allows positioning of the annotation relative to the other</div>
<div class="line">            // elements of the graph.</div>
<div class="line">            //</div>
<div class="line">            // Should be one of: afterDraw, afterDatasetsDraw, beforeDatasetsDraw</div>
<div class="line">            // See http://www.chartjs.org/docs/#advanced-usage-creating-plugins</div>
<div class="line">            drawTime: &#39;afterDatasetsDraw&#39;, // (default)</div>
<div class="line"> </div>
<div class="line">            // Mouse events to enable on each annotation.</div>
<div class="line">            // Should be an array of one or more browser-supported mouse events</div>
<div class="line">            // See https://developer.mozilla.org/en-US/docs/Web/Events</div>
<div class="line">            events: [&#39;click&#39;],</div>
<div class="line"> </div>
<div class="line">            // Double-click speed in ms used to distinguish single-clicks from</div>
<div class="line">            // double-clicks whenever you need to capture both. When listening for</div>
<div class="line">            // both click and dblclick, click events will be delayed by this</div>
<div class="line">            // amount.</div>
<div class="line">            dblClickSpeed: 350, // ms (default)</div>
<div class="line"> </div>
<div class="line">            // Array of annotation configuration objects</div>
<div class="line">            // See below for detailed descriptions of the annotation options</div>
<div class="line">            annotations: [{</div>
<div class="line">                drawTime: &#39;afterDraw&#39;, // overrides annotation.drawTime if set</div>
<div class="line">                id: &#39;a-line-1&#39;, // optional</div>
<div class="line">                type: &#39;line&#39;,</div>
<div class="line">                mode: &#39;horizontal&#39;,</div>
<div class="line">                scaleID: &#39;y-axis-0&#39;,</div>
<div class="line">                value: &#39;25&#39;,</div>
<div class="line">                borderColor: &#39;red&#39;,</div>
<div class="line">                borderWidth: 2,</div>
<div class="line"> </div>
<div class="line">                // Fires when the user clicks this annotation on the chart</div>
<div class="line">                // (be sure to enable the event in the events array below).</div>
<div class="line">                onClick: function(e) {</div>
<div class="line">                    // `this` is bound to the annotation element</div>
<div class="line">                }</div>
<div class="line">            }]</div>
<div class="line">        }</div>
<div class="line">    }</div>
<div class="line">}</div>
</div><!-- fragment --><h2><a class="anchor" id="autotoc_md2"></a>
Line Annotations</h2>
<p>Vertical or horizontal lines are supported.</p>
<div class="fragment"><div class="line">{</div>
<div class="line">    type: &#39;line&#39;,</div>
<div class="line"> </div>
<div class="line">    // optional drawTime to control layering, overrides global drawTime setting</div>
<div class="line">    drawTime: &#39;afterDatasetsDraw&#39;,</div>
<div class="line"> </div>
<div class="line">    // optional annotation ID (must be unique)</div>
<div class="line">    id: &#39;a-line-1&#39;,</div>
<div class="line"> </div>
<div class="line">    // set to &#39;vertical&#39; to draw a vertical line</div>
<div class="line">    mode: &#39;horizontal&#39;,</div>
<div class="line"> </div>
<div class="line">    // ID of the scale to bind onto</div>
<div class="line">    scaleID: &#39;y-axis-0&#39;,</div>
<div class="line"> </div>
<div class="line">    // Data value to draw the line at</div>
<div class="line">    value: 25,</div>
<div class="line"> </div>
<div class="line">    // Optional value at which the line draw should end</div>
<div class="line">    endValue: 26,</div>
<div class="line"> </div>
<div class="line">    // Line color</div>
<div class="line">    borderColor: &#39;red&#39;,</div>
<div class="line"> </div>
<div class="line">    // Line width</div>
<div class="line">    borderWidth: 2,</div>
<div class="line"> </div>
<div class="line">    // Line dash</div>
<div class="line">    // https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/setLineDash</div>
<div class="line">    borderDash: [2, 2],</div>
<div class="line"> </div>
<div class="line">    // Line Dash Offset</div>
<div class="line">    // https://developer.mozilla.org/en-US/docs/Web/API/CanvasRenderingContext2D/lineDashOffset</div>
<div class="line">    borderDashOffset: 5,</div>
<div class="line"> </div>
<div class="line">    label: {</div>
<div class="line">        // Background color of label, default below</div>
<div class="line">        backgroundColor: &#39;rgba(0,0,0,0.8)&#39;,</div>
<div class="line"> </div>
<div class="line">        // Font family of text, inherits from global</div>
<div class="line">        fontFamily: &quot;sans-serif&quot;,</div>
<div class="line"> </div>
<div class="line">        // Font size of text, inherits from global</div>
<div class="line">        fontSize: 12,</div>
<div class="line"> </div>
<div class="line">        // Font style of text, default below</div>
<div class="line">        fontStyle: &quot;bold&quot;,</div>
<div class="line"> </div>
<div class="line">        // Font color of text, default below</div>
<div class="line">        fontColor: &quot;#fff&quot;,</div>
<div class="line"> </div>
<div class="line">        // Padding of label to add left/right, default below</div>
<div class="line">        xPadding: 6,</div>
<div class="line"> </div>
<div class="line">        // Padding of label to add top/bottom, default below</div>
<div class="line">        yPadding: 6,</div>
<div class="line"> </div>
<div class="line">        // Radius of label rectangle, default below</div>
<div class="line">        cornerRadius: 6,</div>
<div class="line"> </div>
<div class="line">        // Anchor position of label on line, can be one of: top, bottom, left, right, center. Default below.</div>
<div class="line">        position: &quot;center&quot;,</div>
<div class="line"> </div>
<div class="line">        // Adjustment along x-axis (left-right) of label relative to above number (can be negative)</div>
<div class="line">        // For horizontal lines positioned left or right, negative values move</div>
<div class="line">        // the label toward the edge, and positive values toward the center.</div>
<div class="line">        xAdjust: 0,</div>
<div class="line"> </div>
<div class="line">        // Adjustment along y-axis (top-bottom) of label relative to above number (can be negative)</div>
<div class="line">        // For vertical lines positioned top or bottom, negative values move</div>
<div class="line">        // the label toward the edge, and positive values toward the center.</div>
<div class="line">        yAdjust: 0,</div>
<div class="line"> </div>
<div class="line">        // Whether the label is enabled and should be displayed</div>
<div class="line">        enabled: false,</div>
<div class="line"> </div>
<div class="line">        // Text to display in label - default is null. Provide an array to display values on a new line</div>
<div class="line">        content: &quot;Test label&quot;,</div>
<div class="line"> </div>
<div class="line">        // Rotation of label, in degrees, default is 0</div>
<div class="line">        rotation: 90</div>
<div class="line">    },</div>
<div class="line"> </div>
<div class="line">    // Mouse event handlers - be sure to enable the corresponding events in the</div>
<div class="line">    // annotation events array or the event handler will not be called.</div>
<div class="line">    // See https://developer.mozilla.org/en-US/docs/Web/Events for a list of</div>
<div class="line">    // supported mouse events.</div>
<div class="line">    onMouseenter: function(e) {},</div>
<div class="line">    onMouseover: function(e) {},</div>
<div class="line">    onMouseleave: function(e) {},</div>
<div class="line">    onMouseout: function(e) {},</div>
<div class="line">    onMousemove: function(e) {},</div>
<div class="line">    onMousedown: function(e) {},</div>
<div class="line">    onMouseup: function(e) {},</div>
<div class="line">    onClick: function(e) {},</div>
<div class="line">    onDblclick: function(e) {},</div>
<div class="line">    onContextmenu: function(e) {},</div>
<div class="line">    onWheel: function(e) {}</div>
<div class="line">}</div>
</div><!-- fragment --><h2><a class="anchor" id="autotoc_md3"></a>
Box Annotations</h2>
<p>Box annotations are supported. If one of the axes is not specified, the box will take the entire chart dimension.</p>
<p>The 4 coordinates, xMin, xMax, yMin, yMax are optional. If not specified, the box is expanded out to the edges</p>
<div class="fragment"><div class="line">{</div>
<div class="line">    type: &#39;box&#39;,</div>
<div class="line"> </div>
<div class="line">    // optional drawTime to control layering, overrides global drawTime setting</div>
<div class="line">    drawTime: &#39;beforeDatasetsDraw&#39;,</div>
<div class="line"> </div>
<div class="line">    // optional annotation ID (must be unique)</div>
<div class="line">    id: &#39;a-box-1&#39;,</div>
<div class="line"> </div>
<div class="line">    // ID of the X scale to bind onto</div>
<div class="line">    xScaleID: &#39;x-axis-0&#39;,</div>
<div class="line"> </div>
<div class="line">    // ID of the Y scale to bind onto</div>
<div class="line">    yScaleID: &#39;y-axis-0&#39;,</div>
<div class="line"> </div>
<div class="line">    // Left edge of the box. in units along the x axis</div>
<div class="line">    xMin: 25,</div>
<div class="line"> </div>
<div class="line">    // Right edge of the box</div>
<div class="line">    xMax: 40,</div>
<div class="line"> </div>
<div class="line">    // Top edge of the box in units along the y axis</div>
<div class="line">    yMax: 20,</div>
<div class="line"> </div>
<div class="line">    // Bottom edge of the box</div>
<div class="line">    yMin:  15,</div>
<div class="line"> </div>
<div class="line">    // Stroke color</div>
<div class="line">    borderColor: &#39;red&#39;,</div>
<div class="line"> </div>
<div class="line">    // Stroke width</div>
<div class="line">    borderWidth: 2,</div>
<div class="line"> </div>
<div class="line">    // Fill color</div>
<div class="line">    backgroundColor: &#39;green&#39;,</div>
<div class="line"> </div>
<div class="line">    // Mouse event handlers - be sure to enable the corresponding events in the</div>
<div class="line">    // annotation events array or the event handler will not be called.</div>
<div class="line">    // See https://developer.mozilla.org/en-US/docs/Web/Events for a list of</div>
<div class="line">    // supported mouse events.</div>
<div class="line">    onMouseenter: function(e) {},</div>
<div class="line">    onMouseover: function(e) {},</div>
<div class="line">    onMouseleave: function(e) {},</div>
<div class="line">    onMouseout: function(e) {},</div>
<div class="line">    onMousemove: function(e) {},</div>
<div class="line">    onMousedown: function(e) {},</div>
<div class="line">    onMouseup: function(e) {},</div>
<div class="line">    onClick: function(e) {},</div>
<div class="line">    onDblclick: function(e) {},</div>
<div class="line">    onContextmenu: function(e) {},</div>
<div class="line">    onWheel: function(e) {}</div>
<div class="line">}</div>
</div><!-- fragment --><h1><a class="anchor" id="autotoc_md4"></a>
To-do Items</h1>
<p>The following features still need to be done:</p>
<ul>
<li>Box annotation labels</li>
<li>Point annotations</li>
<li>Text annotations</li>
</ul>
<h1><a class="anchor" id="autotoc_md5"></a>
Installation</h1>
<p>To download a zip, go to the Chart.Annotation.js on Github</p>
<p>To install via npm:</p>
<div class="fragment"><div class="line">npm install chartjs-plugin-annotation --save</div>
</div><!-- fragment --><p>Prior to v0.2.0 this plugin was known as Chart.Annotation.js. You can still install this old version via NPM.</p>
<h1><a class="anchor" id="autotoc_md6"></a>
Documentation</h1>
<p>You can find documentation for Chart.js at <a href="http://www.chartjs.org/docs">www.chartjs.org/docs</a>.</p>
<h1><a class="anchor" id="autotoc_md7"></a>
Contributing</h1>
<p>Before submitting an issue or a pull request to the project, please take a moment to look over the contributing guidelines first.</p>
<h1><a class="anchor" id="autotoc_md8"></a>
License</h1>
<p>Chart.Annotation.js is available under the <a href="http://opensource.org/licenses/MIT">MIT license</a>. </p>
</div></div><!-- contents -->
</div><!-- PageDoc -->
<!-- start footer part -->
<hr class="footer"/><address class="footer"><small>
Generated by&#160;<a href="https://www.doxygen.org/index.html"><img class="footer" src="doxygen.svg" width="104" height="31" alt="doxygen"/></a> 1.9.1
</small></address>
</body>
</html>
