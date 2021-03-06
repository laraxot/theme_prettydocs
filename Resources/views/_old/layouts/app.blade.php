<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
<head>
    <title>rawdocs.com - Share your documents</title>
    <!-- Meta -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="">
    <meta name="author" content="">
    <link rel="shortcut icon" href="favicon.ico">
    <link href='http://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800' rel='stylesheet' type='text/css'>
    <!-- Global CSS -->
    <link rel="stylesheet" href="/plugins/bootstrap/css/bootstrap.min.css">
    <!-- Plugins CSS -->
    <link rel="stylesheet" href="/plugins/font-awesome/css/font-awesome.css">
    <link rel="stylesheet" href="/plugins/elegant_font/css/style.css">

    <!-- Theme CSS -->
    <link id="theme-style" rel="stylesheet" href="{{ Theme::asset('pub_theme::css/styles.css') }}">
    <link rel="stylesheet" href="{{ Theme::asset('pub_theme::css/modal.css') }}">
    <!-- HTML5 shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body>
    @include('pub_theme::layouts.loginModal')
    @include('pub_theme::layouts.registerModal')
    @include('pub_theme::layouts.uploadModal')

    <div class="container">
    <div class="row" style="font-size: 12px; padding-bottom: 2%">
    @if(!Auth::user())
    <a href="#" target="_blank" data-toggle="modal" data-target="#signInModal">Sign in</a>|<a href="#" target="_blank" data-toggle="modal" data-target="#registerModal">Register</a>
    @else
    <a href="/user/{{Auth::user()->name}}/docs" style="color: black" >{{Auth::user()->name}}</a>
    @endif
    |<a href="#" target="_blank" data-toggle="modal" data-target="#myModal">Upload Now</a>
    @if(Auth::user())
    |<a href="/logout" style="color: black">Log Out</a>
    |<a href="/user/{{Auth::user()->name}}/private-docs">Private Docs</a>
    @endif
    |<small>Documents, programming code, links, hacks, cheat codes etc. sharing site</small>
    <small><i>WE ARE NOT RESPONSIBLE FOR ANY DOCUMENTS THAT VISITORS UPLOAD.</i></small>
    <a href="/" class="pull-right">Raw Docs</a>

        @yield('content')
</div>
</div>
        <!-- Main Javascript -->
    <script type="text/javascript" src="/plugins/jquery-1.12.3.min.js"></script>
    <script type="text/javascript" src="/plugins/bootstrap/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="{{ Theme::asset('pub_theme::js/submitDoc.js') }}"></script>
    <script type="text/javascript" src="{{ Theme::asset('pub_theme::js/search.js') }}"></script>
</body>
</html>
