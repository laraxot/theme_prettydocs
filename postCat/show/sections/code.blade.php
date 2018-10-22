<section id="code-section" class="doc-section">
	<h2 class="section-title">Code</h2>
	<div class="section-block">
		<p>
			<a href="http://prismjs.com/" target="_blank">PrismJS</a> is used as the syntax highlighter here. You can <a href="http://prismjs.com/download.html" target="_blank">build your own version</a> via their website should you need to.
		</p>
	</div>
	<!--//section-block-->
	<div id="html" class="section-block">
		<div class="callout-block callout-success">
			<div class="icon-holder">
				<i class="fa fa-thumbs-up"></i>
			</div>
			<!--//icon-holder-->
			<div class="content">
				<h4 class="callout-title">Useful Tip:</h4>
				<p>You can use this online <a href="https://mothereff.in/html-entities" target="_blank">HTML entity encoder/decoder</a> to generate your code examples.</p>
			</div>
			<!--//content-->
		</div>
		<div class="code-block">
			<h6>HTML Code Example</h6>
			<pre><code class="language-markup">&lt;!DOCTYPE html&gt; 
&lt;html lang=&quot;en&quot;&gt; 
...
&lt;div class=&quot;jumbotron&quot;&gt; 
&lt;h1&gt;Hello, world!&lt;/h1&gt; 
&lt;p&gt;...&lt;/p&gt; 
&lt;p&gt;&lt;a class=&quot;btn btn-primary btn-lg&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Learn more&lt;/a&gt;&lt;/p&gt; 
&lt;/div&gt;
&lt;div class=&quot;jumbotron&quot;&gt; 
&lt;h1&gt;Hello, world!&lt;/h1&gt; 
&lt;p&gt;...&lt;/p&gt; 
&lt;p&gt;&lt;a class=&quot;btn btn-primary btn-lg&quot; href=&quot;#&quot; role=&quot;button&quot;&gt;Learn more&lt;/a&gt;&lt;/p&gt; 
&lt;/div&gt;
...
&lt;/html&gt;</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="css" class="section-block">
		<div class="code-block">
			<h6>CSS Code Example</h6>
			<pre><code class="language-css">/* ======= Base Styling ======= */
body {
font-family: 'Open Sans', arial, sans-serif; 
color: #333; 
font-size: 16px; 
-webkit-font-smoothing: antialiased; 
-moz-osx-font-smoothing: grayscale; 
}</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="less" class="section-block">
		<div class="code-block">
			<h6>LESS Code Example</h6>
			<pre><code class="language-css">/*
* Template Name: prettyDocs - Responsive Website Template for documentations 
* Version: 1.0 
* Author: Xiaoying Riley 
* License: Creative Commons Attribution 3.0 License 
* Twitter: @3rdwave_themes 
* Website: http://themes.3rdwavemedia.com/ 
*/ 
@import &quot;mixins.less&quot;; 
@import &quot;theme-default.less&quot;; 
@import &quot;base.less&quot;; 
@import &quot;doc.less&quot;; 
@import &quot;landing.less&quot;; 
@import &quot;responsive.less&quot;;</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="sass" class="section-block">
		<div class="code-block">
			<h6>Sass Code Example</h6>
			<pre><code class="language-sass">#main {
$width: 5em; 
width: $width; 
}

#sidebar { 
width: $width; 
}</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="javascript" class="section-block">
		<div class="code-block">
			<h6>JavaScript Code Example</h6>
			<pre><code class="language-javascript">&lt;script&gt; 
function myFunction(a, b) { 
return a * b; 
} 

document.getElementById(&quot;demo&quot;).innerHTML = myFunction(4, 3); 
&lt;/script&gt;</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="python" class="section-block">
		<div class="code-block">
			<h6>Python Code Example</h6>
			<pre><code class="language-python">&gt;&gt;&gt; x = int(input(&quot;
Please enter an integer: &quot;)) Please enter an integer: 42 
&gt;&gt;&gt; if x &lt; 0: 
... x = 0 
... print('Negative changed to zero') 
... elif x == 0: 
... print('Zero') 
... elif x == 1: 
... print('Single') 
... else: 
... print('More') 
... More</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="php" class="section-block">
		<div class="code-block">
			<h6>PHP Code Example</h6>
			<pre><code class="language-php">&lt;?php 
$txt = &quot;Hello world!&quot;; 
$x = 5; 
$y = 10.5; 

echo $txt; 
echo &quot;&lt;br&gt;&quot;; 
echo $x; 
echo &quot;&lt;br&gt;&quot;; 
echo $y; 
?&gt;</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
	<div id="handlebars" class="section-block">
		<div class="code-block">
			<h6>Handlebars Code Example</h6>
			<pre><code class="language-handlebars">Handlebars.registerHelper('list', function(items, options) { 
var out = &quot;&lt;ul&gt;&quot;; 

for(var i=0, l=items.length; i&lt;l; i++) { 
out = out + &quot;&lt;li&gt;&quot; + options.fn(items[i]) + &quot;&lt;/li&gt;&quot;; 
} 

return out + &quot;&lt;/ul&gt;&quot;; 
});</code></pre>
		</div>
		<!--//code-block-->
		<div class="code-block">
			<h6>Git Code Example</h6>
			<pre><code class="language-git">$ git add Documentation.txt</code></pre>
		</div>
		<!--//code-block-->
	</div>
	<!--//section-block-->
</section>
<!--//doc-section-->