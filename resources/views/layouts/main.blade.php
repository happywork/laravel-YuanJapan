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
        <link href="{{ asset('css/normalize.css') }}" rel="stylesheet">
        <link href="{{ asset('css/foundation.css') }}" rel="stylesheet">
        <link href="{{ asset('css/flexslider.css') }}" rel="stylesheet">
        <link href="{{ asset('css/prettyPhoto.css') }}" rel="stylesheet">        
        <link href="{{ asset('css/font-awesome.min.css') }}" rel="stylesheet">
        <link href="{{ asset('css/style.css') }}" rel="stylesheet">                 
        <link href="{{ asset('css/default.css') }}" rel="stylesheet">
        
        <script type="text/javascript" src="{{ asset('js/modernizr.js') }}"></script>        
        <script src="http://maps.google.com/maps/api/js?sensor=false"></script>

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
 
    <div id="header-wrap">  
        <div id="top-wrap">
            <div class="row">
                <header class="header large-12 columns">
                    <div class="row">
                        <div class="logo large-4 columns">
                            <h1><!-- <a class='current' href="{{'/'}}"><img src="{{ asset('images/logo.png') }}" alt="" /></a> -->
                                <span>Yuna Japan Inc</span>
                            </h1>
                        </div><!-- /logo -->                    
                        <div class="large-8 columns">
                            <nav id="nav">                          
                                @if (Auth::check())
                                    <ul id="navigation" class="group">                              
                                        <li class="current-menu-item">
                                            <a href="index.html">@lang('home.language_menu')</a>
                                            <ul>
                                                <li><a href="locale/en">English</a></li>
                                                <li><a href="locale/jp">Japan</a></li>                  
                                                <li><a href="locale/ru">Russian</a></li> 
                                            </ul>
                                        </li>      
                                        <li class="current-menu-item">
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                                                @lang('home.logout_menu')
                                            </a>
                                        </li>   
                                        <li class="current-menu-item"><a href="{{url('admin')}}">@lang('home.admin_menu')</a></li>     
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                        <!-- <li class="current-menu-item"><a href="{{url('contact')}}">@lang('home.contact_menu')</a></li>   -->
                                    </ul><!-- #navigation -->
                                @else
                                    <ul id="navigation" class="group">      
                                     <li class="current-menu-item">
                                        <a href="index.html">@lang('home.language_menu')</a>
                                        <ul>
                                            <li><a href="locale/en">English</a></li>
                                            <li><a href="locale/jp">Japan</a></li>                  
                                            <li><a href="locale/ru">Russian</a></li> 
                                        </ul>
                                    </li>                              
                                    <li class="current-menu-item"><a href="{{url('login')}}">Login</a></li>                                    
                                    <!-- <li class="current-menu-item"><a href="{{url('contact')}}">contact</a></li>    -->                                  
                                </ul><!-- #navigation -->   
                                @endif
                            </nav><!-- #nav -->
                        </div>                  
                    </div>
                </header><!-- /header -->
            </div><!-- /row -->
        </div><!-- /top-wrap-->

        <div id="section" style="background:url({{ asset('images/hero.jpg') }}) no-repeat top center; height: 1601px;">
            <div class="row">
                <div class="large-12 columns">
                    <h3 class="home_title">@lang('home.Home_title')</h3>
                </div><!-- /large-12 -->
            </div><!-- /row -->
        </div><!-- /section -->
        
    </div><!-- /header-wrap -->

@yield('content')

<!-- @yield('footer_scripts') -->

@yield('credits_wrap')

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

</body>
</html>
