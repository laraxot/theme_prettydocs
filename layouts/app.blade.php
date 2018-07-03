@extends('pub_theme::layouts.plane')
@section('body')
	@include('pub_theme::includes.components')
	@include('pub_theme::includes.flash')
	{{--
	<div class="site-wrapper animsition" data-animsition-in="fade-in" data-animsition-out="fade-out">
	--}}
	<div class="page-wrapper">
		@include('pub_theme::layouts.partials.headernav')
		@yield('content')
	</div>
	@if(isset($footer) && $footer=='off')
	@else
	@include('pub_theme::layouts.partials.footer')
	@endif
	</div>
</div>
@endsection    


