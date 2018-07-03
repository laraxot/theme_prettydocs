<!DOCTYPE html>
<!--[if IE 8]> <html lang="{{ $lang }}" class="ie8"> <![endif]-->  
<!--[if IE 9]> <html lang="{{ $lang }}" class="ie9"> <![endif]-->  
<!--[if !IE]><!--> <html lang="{{ $lang }}"> <!--<![endif]-->
@section('htmlheader')
	@include('pub_theme::layouts.partials.htmlheader')
@show
{{--
<body class="landing-page">
--}}
<body class="body-green"> 
@yield('body')
@section('scripts')
	@include('pub_theme::layouts.partials.scripts')
@show
</body>
</html>