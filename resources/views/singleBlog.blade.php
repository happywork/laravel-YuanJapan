@extends('layouts.article')

@section('template_title')
    Single page
@endsection

@section('template_fastload_css')
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
                                    <!-- <li class="current-menu-item"><a href="{{url('contact')}}">contact</a></li>    -->                                  
                                </ul><!-- #navigation -->
                            @endif
                        </nav><!-- #nav -->
                    </div>                  
                </div>
            </header><!-- /header -->
        </div><!-- /row -->
    </div><!-- /top-wrap-->

    <div id="section" style="background:url({{ asset('images/homebanner.jpg') }}) no-repeat top center">
        <div class="row">
            <div class="large-12 columns">
                <h3>@lang('home.Home_title')</h3>
            </div><!-- /large-12 -->
        </div><!-- /row -->
    </div><!-- /section -->
    
</div><!-- /header-wrap -->
@endsection

@section('section_title_part')
<div id="section" style="background:url({{ asset('images/contact.jpg') }}) no-repeat top center">
	<div class="row">
		<div class="large-12 columns">
			<h3>Single page</h3>
		</div><!-- /large-12 -->
	</div><!-- /row -->
</div><!-- /section -->
@endsection


@section('main_content')
<div class="large-6 columns">				
    <article class="post group">
        <header class="entry-top">
            <time datetime="2012-02-21">28 <span>Mar</span></time>
            <h1 class="entry-title">Working at Google New York (NYC). Google New York (NYC)</h1>
            <div class="entry-meta">					
                Filed Under: <a href="#">Events</a> <span>&bull;</span>
                <a class="comments-link" href="#">No Comments</a>
            </div>
        </header>	
        
        <figure class="entry-thumb">
            <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
        </figure>
        
        <div class="entry-content">
            <p>Lorem ipsum dolor sit amet, <a href="#">consectetur adipiscing elit. Vivamus luctus urna</a> sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque.</p>
            <h3>h3 header</h3>
            <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque.</p>
            <h4>h4 header</h4>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque.</p>
            <iframe width="560" height="315" src="http://www.youtube.com/embed/7AxI4rxCf2E" frameborder="0" allowfullscreen></iframe>
            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque.</p>
        </div>
        
        <div class="entry-comments">
            <h2>12 Comments</h2>
            <ol id="comment-list">
                <li class="comment depth-1">
                    <div class="comment-text group">
                        <img alt="" src="http://placekitten.com/g/50/50" class="avatar"/>				
                        <div class="comment-copy">
                            <p class="comment-meta">admin - August 17, 2012 10:03 am</p>				
                            <p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Etiam sit amet elit vitae arcu interdum ullamcorper. Nullam ultrices, nisi quis scelerisque convallis, augue neque tempor enim, et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris accumsan vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>
                            <a href="#" class="btn-reply">Reply</a>
                        </div><!-- .comment-copy -->
                    </div><!-- /comment-text.group -->
                </li>
                <li class="comment depth-1">
                    <div class="comment-text group">
                        <img alt="" src="http://placekitten.com/g/50/50" class="avatar"/>				
                        <div class="comment-copy">
                            <p class="comment-meta">admin - August 17, 2012 10:03 am</p>				
                            <p>et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris accumsan vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>
                            <a href="#" class="btn-reply">Reply</a>
                        </div><!-- .comment-copy -->
                    </div><!-- /comment-text.group -->
                </li>
                <li class="comment depth-1">
                    <div class="comment-text group">
                        <img alt="" src="http://placekitten.com/g/50/50" class="avatar"/>				
                        <div class="comment-copy">
                            <p class="comment-meta">admin - August 17, 2012 10:03 am</p>				
                            <p>et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris accumsan vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>
                            <a href="#" class="btn-reply">Reply</a>
                        </div><!-- .comment-copy -->
                    </div><!-- /comment-text.group -->
                </li>
                <li class="comment depth-1">
                    <div class="comment-text group">
                        <img alt="" src="http://placekitten.com/g/50/50" class="avatar"/>				
                        <div class="comment-copy">
                            <p class="comment-meta">admin - August 17, 2012 10:03 am</p>				
                            <p>et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris accumsan vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>
                            <a href="#" class="btn-reply">Reply</a>
                        </div><!-- .comment-copy -->
                    </div><!-- /comment-text.group -->
                </li>
                <li class="comment depth-1">
                    <div class="comment-text group">
                        <img alt="" src="http://placekitten.com/g/50/50" class="avatar"/>				
                        <div class="comment-copy">
                            <p class="comment-meta">admin - August 17, 2012 10:03 am</p>				
                            <p>et mattis justo nibh eu elit. Quisque ultrices gravida pede. Mauris accumsan vulputate tellus. Phasellus condimentum bibendum dolor. Mauris sed ipsum. Phasellus in diam. Nam sapien ligula, consectetuer id, hendrerit in, cursus sed, leo. Nam tincidunt rhoncus urna. Aliquam id massa ut nibh bibendum imperdiet. Curabitur neque mauris, porta vel, lacinia quis, placerat ultrices, orci.</p>
                            <a href="#" class="btn-reply">Reply</a>
                        </div><!-- .comment-copy -->
                    </div><!-- /comment-text.group -->
                </li>
            </ol>
        </div><!-- /post-comments -->
        
        <div id="form-wrapper" class="group">
            <h2>Have your say</h2>
            <div class="post-form">
                <form method="post" action="action.php">
                    <p>
                        <label>Name:</label> <input type="text" class="text" id="name1" name="name1" placeholder="Your name" />
                    </p>

                    <p>
                        <label>Email:</label> <input type="text" class="text" id="email1" name="email1" placeholder="Your Email" />
                    </p>
                    <p>
                        <label>Comment:</label> <textarea cols="5" rows="5" id="comment" name="comment" placeholder="Your comment" ></textarea>
                    </p>
                    <p id="post-action">
                        <input type="submit" class="button fbutton" name="submit1" id="submit1" value="Submit"/>
                    </p>
                </form>
            </div><!-- /post-form -->
        </div><!-- /form-wrapper -->
        
    </article><!-- /post -->
    
</div>
@endsection

@section('middle_content')
<div class="large-3 columns sidebar sidebar-1">
    <aside class="widget group">
        <h3 class="widget-title">Top 5</h3>
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
        <h4 class="widget-title">Artists</h4>
        <ol class="widget-list">
            <li>
                <figure class="event-thumb">
                    <a href="artist.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-info-sign"></div>
                    </a>
                </figure>
                <h5 class="list-subtitle">Producer</h5>
                <h4 class="list-title"><a href="artist.html">WARUNG SAVAGES + DANNY DAZE</a></h4>
                <a href="artist.html" class="action-btn">View Artist</a>
            </li>
            <li>
                <figure class="event-thumb">
                    <a href="artist.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-info-sign"></div>
                    </a>
                </figure>
                <h5 class="list-subtitle">DJ</h5>
                <h4 class="list-title"><a href="artist.html">WARUNG SAVAGES</a></h4>
                <a href="artist.html" class="action-btn">View Artist</a>
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
    <aside class="widget widget_ci_twitter_widget group">
        <h3 class="widget-title">Twitter</h3>
        <div class="twitter_update_list">
            <ul class="widget-list">
                <li>
                    <span>This is the twitter feed!</span>
                    <a class="twitter-time" href="#">about 12 hours ago</a>
                </li>
    
                <li>
                    <span>Great, I will prepare a few things this weekend so we have something to discuss!</span>
                    <a class="twitter-time" href="#">about 11 hours ago</a>
                </li>
    
                <li>
                    <span>thanx, always a work in progress :) btw i'm going to write down a few ideas about the regional meetup!</span>
                    <a class="twitter-time" href="#">about 5 hours ago</a>
                </li>
            </ul>
        </div>
    </aside>
    <aside class="widget group">
        <h4 class="widget-title">Album (Tracklisting)</h4>
        <ol class="widget-list widget-list-single">
            <li>
                <figure class="event-thumb">
                    <a href="album.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-info-sign"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="album.html">WARUNG SAVAGES + DANNY DAZE</a></h4>
                <a href="album.html" class="action-btn">View Album</a>
                <ol class="tracklisting">
                    <li class="group track">
                        <a href="audio/track1.mp3" class="media-btn">Play</a>
                        <h5 class="track-meta">Dimitri Vegas</h5>
                        <h4 class="track-title">What's Up Suckaz</h4>
                    </li>
                    <li class="group track">
                        <a href="audio/track2.mp3" class="media-btn">Play</a>
                        <h5 class="track-meta">Nicky Romero</h5>
                        <h4 class="track-title">Legacy (Original Mix)</h4>
                    </li>
                    <li class="group track">
                        <a href="audio/track3.mp3" class="media-btn">Play</a>
                        <h5 class="track-meta">Martin Garrix</h5>
                        <h4 class="track-title">Legacy</h4>
                    </li>
                    <li class="group track">
                        <a href="audio/track4.mp3" class="media-btn">Play</a>
                        <h5 class="track-meta">Josh Butler</h5>
                        <h4 class="track-title">Got A Feeling</h4>
                    </li>
                    <li class="group track">
                        <a href="audio/track5.mp3" class="media-btn">Play</a>
                        <h5 class="track-meta">Mike Hawkins</h5>
                        <h4 class="track-title">Jump</h4>
                    </li>
                </ol>
            </li>
        </ol>
    </aside><!-- /widget -->
</div>
@endsection

@section('right_sidebar_content')
<div class="large-3 columns sidebar sidebar-2">
    <aside class="widget group">
        <h4 class="widget-title">Upcoming Events</h4>
        <ol class="widget-list">
            <li>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="event.html">MARCO CAROLA</a></h4>
                <a href="event.html" class="action-btn">Buy Tickets</a>
            </li>
            <li>
                <time class="list-subtitle" datetime="2016-05-20 22:00">20 Mar 2013</time>
                <h4 class="list-title"><a href="event.html">SASHA</a></h4>
                <a href="event.html" class="action-btn">Buy Tickets</a>
            </li>
            <li>
                <time class="list-subtitle" datetime="2016-05-20 22:00">15 Mar 2013</time>
                <h4 class="list-title"><a href="event.html">JOHN DIGWEED</a></h4>
                <a href="event.html" class="action-btn">Buy Tickets</a>
            </li>
            <li>
                <time class="list-subtitle" datetime="2016-05-20 22:00">10 Mar 2013</time>
                <h4 class="list-title"><a href="event.html">TIESTO</a></h4>
                <a href="event.html" class="action-btn">Buy Tickets</a>
            </li>
            <li>
                <time class="list-subtitle" datetime="2016-05-20 22:00">5 Mar 2013</time>
                <h4 class="list-title"><a href="event.html">PAUL OAKENFOLD</a></h4>
                <a href="event.html" class="action-btn">Buy Tickets</a>
            </li>
        </ol>
    </aside><!-- /widget -->
    <aside class="widget group">
        <h4 class="widget-title">Don't Miss</h4>
        <ol class="widget-list widget-list-single">
            <li>
                <figure class="event-thumb">
                    <a href="event.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-info-sign"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="event.html">WAVEFRONT MUSIC FESTIVAL</a></h4>
                <a href="event.html" class="action-btn">Buy Tickets</a>
            </li>
        </ol>
    </aside><!-- /widget -->
    <aside class="widget group">
        <h4 class="widget-title">Photo Galleries</h4>
        <ol class="widget-list">
            <li>
                <figure class="event-thumb">
                    <a href="gallery.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-picture"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="gallery.html">WARUNG SAVAGES + DANNY DAZE</a></h4>
                <a href="gallery.html" class="action-btn">View Gallery</a>
            </li>
            <li>
                <figure class="event-thumb">
                    <a href="galery.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-picture"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="gallery.html">WARUNG SAVAGES</a></h4>
                <a href="gallery.html" class="action-btn">View Gallery</a>
            </li>
        </ol>
    </aside><!-- /widget -->
    <aside class="widget group">
        <h4 class="widget-title">Videos</h4>
        <ol class="widget-list">
            <li>
                <figure class="event-thumb">
                    <a href="https://www.youtube.com/watch?v=fICiDOCsaDQ" data-rel="prettyPhoto">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-play-sign"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="video.html">WARUNG SAVAGES</a></h4>
                <a href="video.html" class="action-btn">View Video Details</a>
            </li>
            <li>
                <figure class="event-thumb">
                    <a href="https://www.youtube.com/watch?v=fICiDOCsaDQ" data-rel="prettyPhoto">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-play-sign"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="video.html">WARUNG SAVAGES + DANNY DAZE</a></h4>
                <a href="video.html" class="action-btn">View Video Details</a>
            </li>
        </ol>
    </aside><!-- /widget -->
    <aside class="widget group">
        <h4 class="widget-title">Album</h4>
        <ol class="widget-list widget-list-single">
            <li>
                <figure class="event-thumb">
                    <a href="album.html">
                        <img src="http://dummyimage.com/750x500/000000/fff.png" alt="" />
                        <div class="overlay icon-info-sign"></div>
                    </a>
                </figure>
                <time class="list-subtitle" datetime="2016-05-20 22:00">23 Mar 2013</time>
                <h4 class="list-title"><a href="album.html">WARUNG SAVAGES + DANNY DAZE</a></h4>
                <a href="album.html" class="action-btn">View Album</a>
            </li>
        </ol>
    </aside><!-- /widget -->
</div>
@endsection

@section('credits_wrap')
<div id="credits-wrap">
	<div class="row">
		<div class="large-12 columns">
			<div class="row credits">
				<div class="large-6 columns">
					An entertainment site template
				</div>
				<div class="large-6 columns text-right">
					Made in <a href="http://www.cssigniter.com">cssigniter.com</a>
				</div>				
			</div><!-- /row -->
		</div><!-- /large-12 -->
	</div><!-- /row -->
</div><!-- /credits-wrap -->
@endsection