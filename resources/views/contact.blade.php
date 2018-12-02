@extends('layouts.sidebar')

@section('template_title')
    Contact US
@endsection
@section('section_nav_menu')
<div id="header-wrap">  
    <div id="top-wrap">
        <div class="row">
            <header class="header large-12 columns">
                <div class="row">
                    <div class="logo large-4 columns">
                        <h1><a class='current' href="{{'/'}}"><img src="{{ asset('images/logo.png') }}" alt="" /></a></h1>
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
                                    <!-- <li class="current-menu-item"><a href="{{url('contact')}}">contact</a></li>      -->
                                </ul><!-- #navigation -->
                            @endif
                        </nav><!-- #nav -->
                    </div>                  
                </div>
            </header><!-- /header -->
        </div><!-- /row -->
    </div><!-- /top-wrap-->
</div><!-- /header-wrap -->
@endsection
@section('section_title_part')
<div id="section" style="background:url({{ asset('images/contact.jpg') }}) no-repeat top center">
	<div class="row">
		<div class="large-12 columns">
			<h3>@lang('home.contactus') </h3>
		</div><!-- /large-12 -->
	</div><!-- /row -->
</div><!-- /section -->
@endsection

@section('main_content')
<div class="large-9 columns">				
    <article class="post group">
    
        <header class="entry-top special-top">
            <h1 class="entry-title page-title">@lang('home.letstalk')</h1>
        </header>	
        @if ($errors->any())
            <div class="alert alert-danger">
              <ul>
                  @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                  @endforeach
              </ul>
            </div><br />
        @endif    
        <div class="entry-content">	
            <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque.</p>
            <form method="post" action="{{route('contactform')}}">
                @csrf
                <p>
                    <label>@lang('home.contact_name'):</label> <input type="text" class="text" id="name1" name="contact_name" placeholder="Your name" />
                </p>

                <p>
                    <label>@lang('home.contact_email'):</label> <input type="text" class="text" id="email1" name="contact_email" placeholder="Your Email" />
                </p>
                <p>
                    <label>@lang('home.contact_comment'):</label> <textarea cols="5" rows="5" id="comment" name="contact_comments" placeholder="Your comment" ></textarea>
                </p>
                <p id="post-action">
                    <input type="submit" class="button fbutton" name="submit1" id="submit1" value="@lang('home.contact_submit')"/>
                </p>
            </form>
        </div>
    
    </article><!-- /post -->
    
</div>
@endsection
@section('right_sidebar_content')
<div class="large-3 columns sidebar sidebar-1">
    <aside class="widget group">        
        <ol class="tracklisting tracklisting-top">
            <li class="group track">
                <a href="audio/track6.mp3" class="media-btn">Play</a>
                <h5 class="track-meta">Dimitri Vegas</h5>
                <h4 class="track-title">What's Up Suckaz</h4>
            </li>
            <li class="group track">
                <a href="audio/track7.mp3" class="media-btn">Play</a>
                <h5 class="track-meta">Nicky Romero</h5>
                <h4 class="track-title">Legacy (Original Mix)</h4>
            </li>
            <li class="group track">
                <a href="audio/track8.mp3" class="media-btn">Play</a>
                <h5 class="track-meta">Martin Garrix</h5>
                <h4 class="track-title">Legacy</h4>
            </li>
            <li class="group track">
                <a href="audio/track9.mp3" class="media-btn">Play</a>
                <h5 class="track-meta">Josh Butler</h5>
                <h4 class="track-title">Got A Feeling</h4>
            </li>
            <li class="group track">
                <a href="audio/track10.mp3" class="media-btn">Play</a>
                <h5 class="track-meta">Mike Hawkins</h5>
                <h4 class="track-title">Jump</h4>
            </li>
        </ol>
    </aside><!-- /widget -->
    <aside class="widget group">
        <h4 class="widget-title">Artist</h4>
        <ol class="widget-list widget-list-single">
            <li>
                <figure class="event-thumb">
                    <a href="artist.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-info-sign"></div>
                    </a>
                </figure>
                <h5 class="list-subtitle">Producer</h5>
                <h4 class="list-title"><a href="artist.html">DANNY DAZE</a></h4>
                <a href="artist.html" class="action-btn">View Artist</a>
            </li>
        </ol>
    </aside><!-- /widget -->
</div>
@endsection

