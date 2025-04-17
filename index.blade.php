@extends('pub_theme::layouts.app')
@section('content')
@include('pub_theme::includes.components')
@include('pub_theme::includes.flash')
<section class="cards-section text-center">
	<div class="container">
		<h2 class="title">Getting started is easy!</h2>
		<div class="intro">
			<p>Welcome to documentation.</p>
			{{--
			<div class="cta-container">
				<a class="btn btn-primary btn-cta" href="http://themes.3rdwavemedia.com/" target="_blank"><i class="fa fa-cloud-download"></i> Download Now</a>
			</div>
			--}} 
		</div>
		<!--//intro-->
		<div id="cards-wrapper" class="cards-wrapper row">
			{{-- dd($blog->archive()->toSql()) --}}
			@foreach($postCat->archive()->get()as $post) 
			<div class="item item-green col-md-4 col-sm-6 col-xs-6">
				<div class="item-inner">
					<div class="icon-holder">
						<i class="icon fa fa-paper-plane"></i>
					</div>
					<!--//icon-holder-->
					<h3 class="title">{{ $post->title }} !  </h3>
					<p class="intro">{{ $post->subtitle }}</p>
					<a class="link" href="{{ $post->url }}"><span></span></a>
				</div>
				<!--//item-inner-->
			</div>
			<!--//item-->
			@endforeach
		</div>
		<!--//cards-->
	</div>
	<!--//container-->
</section>
<!--//cards-section-->
@endsection