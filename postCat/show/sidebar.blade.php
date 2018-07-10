<div class="doc-sidebar hidden-xs">
	<nav id="doc-nav">
		<ul id="doc-menu" class="nav doc-menu" data-spy="affix">
			@foreach($row->related as $row1)
			<li><a class="scrollto" href="#{{ $row1->guid }}">{{ $row1->title }}</a></li>
			@endforeach
			{{--
			<li><a class="scrollto" href="#download-section">Download</a></li>
			<li>
				<a class="scrollto" href="#installation-section">Installation</a>
				<ul class="nav doc-sub-menu">
					<li><a class="scrollto" href="#step1">Step One</a></li>
					<li><a class="scrollto" href="#step2">Step Two</a></li>
					<li><a class="scrollto" href="#step3">Step Three</a></li>
				</ul>
				<!--//nav-->
			</li>
			<li>
				<a class="scrollto" href="#code-section">Code</a>
				<ul class="nav doc-sub-menu">
					<li><a class="scrollto" href="#html">HTML</a></li>
					<li><a class="scrollto" href="#css">CSS</a></li>
					<li><a class="scrollto" href="#less">LESS</a></li>
					<li><a class="scrollto" href="#sass">Sass</a></li>
					<li><a class="scrollto" href="#javascript">JavaScript</a></li>
					<li><a class="scrollto" href="#python">Python</a></li>
					<li><a class="scrollto" href="#php">PHP</a></li>
					<li><a class="scrollto" href="#handlebars">Handlebars</a></li>
				</ul>
				<!--//nav-->
			</li>
			<li><a class="scrollto" href="#callouts-section">Callouts</a></li>
			<li><a class="scrollto" href="#tables-section">Tables</a></li>
			<li><a class="scrollto" href="#buttons-section">Buttons</a></li>
			<li><a class="scrollto" href="#video-section">Video</a></li>
			<li><a class="scrollto" href="#icons-section">Icons</a></li>
			--}}
		</ul>
		<!--//doc-menu-->
	</nav>
</div>
<!--//doc-sidebar-->