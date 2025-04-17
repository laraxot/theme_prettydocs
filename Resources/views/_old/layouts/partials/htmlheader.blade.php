<head>
	{!! Theme::metatags() !!}
	@php
		Theme::add('/theme/bc/bootstrap/dist/css/bootstrap.min.css');
		//Theme::add('/theme/pub/plugins/bootstrap/css/bootstrap.min.css');
		//Theme::add('/theme/pub/plugins/font-awesome/css/font-awesome.css');
		Theme::add('/theme/bc/font-awesome/css/font-awesome.css');
		//Theme::add('/theme/pub/plugins/elegant_font/css/style.css');
		Theme::add('/theme/bc/elegant_font/HTML%20CSS/style.css');
		Theme::add('/theme/pub/css/styles.css');
	@endphp
	{!! Theme::showStyles(false) !!}
    @stack('styles')

</head> 