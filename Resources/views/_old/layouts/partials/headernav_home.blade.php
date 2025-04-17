<!-- ******Header****** -->
<header class="header text-center">
	<div class="container">
		<div class="branding">
			<h1 class="logo">
				<span aria-hidden="true" class="icon_documents_alt icon"></span>
				<span class="text-highlight">{{ $home->title }}</span>&nbsp;<span class="text-bold">Docs</span>
			</h1>
		</div><!--//branding-->
		<div class="tagline">
			<p>{{ $home->subtitle }}</p>
			<p>Designed with <i class="fa fa-heart"></i> for developers</p>
		</div><!--//tagline-->
		@include('lu::auth.links')
	</div><!--//container-->
</header><!--//header-->