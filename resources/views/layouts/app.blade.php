<!DOCTYPE html>
<html lang="{{ config('app.locale') }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        {{-- CSRF Token --}}
        <meta name="csrf-token" content="{{ csrf_token() }}">

        <title>@if (trim($__env->yieldContent('template_title')))@yield('template_title') | @endif {{ config('app.name', Lang::get('titles.app')) }}</title>
        <meta name="description" content="">
        <meta name="author" content="Maxsim">
        <link rel="shortcut icon" href="/favicon.ico">

        {{-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries --}}
        <!--[if lt IE 9]>
            <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
            <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
        <![endif]-->

        {{-- Fonts --}}
        @yield('template_linked_fonts')

        {{-- Styles --}}        
        <link href='http://fonts.googleapis.com/css?family=Source+Sans+Pro:400,700&amp;subset=latin,latin-ext' rel='stylesheet' type='text/css'>
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/foundation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">
        <link href="{{ asset('css/default.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">	

        @yield('template_linked_css')

        <style type="text/css">
            @yield('template_fastload_css')
        </style>

        {{-- Scripts --}}
        <script>
            window.Laravel = {!! json_encode([
                'csrfToken' => csrf_token(),
            ]) !!};
        </script>        

        @yield('head')

    </head>
    <body class="home">
    <div id="mobile-bar">
		<a class="menu-trigger" href="#"></a>
		<h1 class="mob-title">Club 88</h1>
	</div>
@yield('content')

{{-- Scripts --}}
<script type="text/javascript" src="{{ asset('js/jquery-1.10.1.min.js') }}"></script>        
<script type="text/javascript" src="{{ asset('js/superfish-1.7.2.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.flexslider-min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.fitvids.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.equalHeights.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jRespond.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.jpanelmenu.min.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/soundmanager2.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/inlineplayer.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/jquery.prettyPhoto.js') }}">
    
</script>

<script type="text/javascript" src="{{ asset('js/scripts.js') }}"></script>
<script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>
<script src="http://maps.google.com/maps/api/js?sensor=false"></script>        

</body>
</html>
