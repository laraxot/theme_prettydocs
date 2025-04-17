<header id="header" class="header">
	<div class="container">
		<div class="branding">
			<h1 class="logo">
				<a href="{{ url($lang) }}">
					<span aria-hidden="true" class="icon_documents_alt icon"></span>
					<span class="text-highlight">{{ $home->title }}</span> <span class="text-bold">Docs</span>
				</a>
			</h1>
		</div><!--//branding-->
		@include('lu::auth.links')
		@include('pub_theme::layouts.partials.breadcrumb')
		
	</div><!--//container-->
</header>