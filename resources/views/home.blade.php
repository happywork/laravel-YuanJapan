@extends('layouts.main')

@section('template_title')
    Homepage
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
                                    <!-- <li class="current-menu-item"><a href="{{url('contact')}}">contact</a></li>     -->                                 
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
@section('content')
<div class="aboutus_section">
    <div class="row">
        <div class="large-6 columns">
            <aside class="widget group">
                <h3 class="widget-title">@lang('home.about_company')</h3>
                <div class="widget-content">                    
                    <p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. 
                    Curabitur vulputate, m vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu eui ligula lacinia scelerisque tempor, lacus lacus ornare ante. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus.</p>
                    <p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. 
                    Curabitur vulputate, m vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu eui ligula lacinia scelerisque tempor, lacus lacus ornare ante. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus.</p>

                    <p>Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus in blandit. 
                    Curabitur vulputate, m vestibulum, arcu sodales feugiat consectetur, nisl orci bibendum elit, eu eui ligula lacinia scelerisque tempor, lacus lacus ornare ante. Nulla at nulla justo, eget luctus tortor. Nulla facilisi. Duis aliquet egestas purus.</p>
                    <p>acus lacus ornare ante. Nulla at nulla justo, eget luctus tortor. Nulla fac</p>
                </div>
            </aside><!-- /widget -->
        </div>
        <div class="large-6 columns">
             <img src="{{ asset('images/company_building.jpg') }}" class="alignleft" alt="about me">
        </div>            
    </div><!-- /row -->
</div>
<div id="main-wrap">
	<div id="main" class="row">
		<div class="large-4 columns">
	
			<h3 class="widget-title widget-title-pos">@lang('home.article')</h3>			
			<article class="post group">
				<header class="entry-top">
					<time datetime="2012-02-21">28 <span>Mar</span></time>
					<h2 class="entry-title"><a href="single.html">The Hydra outlines 2013 lineups</a></h2>
					<div class="entry-meta">					
						Filed Under: <a href="#">Events</a> <span>&bull;</span>
						<a class="comments-link" href="#">No Comments</a>
					</div>
				</header>	
				<figure class="entry-thumb">
					<img src="{{ asset('images/articles1.jpg') }}" alt="" />
				</figure>
				<div class="entry-content">
					 <p>@lang('home.article_content1')</p>
					<a href="single.html" class="read-more">Read more</a>
				</div>
			</article><!-- /post -->
		</div>
		<div class="large-4 columns">
			<article class="post">
				<header class="entry-top">
					<time datetime="2012-02-21">28 <span>Mar</span></time>
					<h2 class="entry-title"><a href="single.html">Tom Trago trips The Light Fantastic</a></h2>
					<div class="entry-meta">					
						Filed Under: <a href="#">Events</a> <span>&bull;</span>
						<a class="comments-link" href="#">No Comments</a>
					</div>
				</header>	
				<figure class="entry-thumb">
					<iframe width="560" height="315" src="http://www.youtube.com/embed/7AxI4rxCf2E" frameborder="0" allowfullscreen></iframe>
				</figure>
				<div class="entry-content">
					 <p>@lang('home.article_content2')</p>
					<a href="single.html" class="read-more">Read more</a>
				</div>
			</article><!-- /post -->
		</div>			
		<div class="large-4 columns">
			<article class="post">
				<header class="entry-top">
					<time datetime="2012-02-21">28 <span>Mar</span></time>
					<h2 class="entry-title"><a href="single.html">The xx announce Latin American tour</a></h2>
					<div class="entry-meta">					
						Filed Under: <a href="#">Events</a> <span>&bull;</span>
						<a class="comments-link" href="#">No Comments</a>
					</div>
				</header>	
				<figure class="entry-thumb">
					<img src="{{ asset('images/articles1.jpg') }}" alt="" />
				</figure>
				<div class="entry-content">
					 <p>@lang('home.article_content3')</p>
					<a href="single.html" class="read-more">Read more</a>
				</div>
			</article><!-- /post -->
		</div>					
        </div>	        
	</div><!-- /main -->
</div><!-- /main-wrap -->

<div id="contact-us">
	<div id="main" class="row">
		<div class="large-9 columns">
            <article class="post group">
                
                <header class="entry-top special-top">
                    <h1 class="entry-title page-title">Contact US</h1>
                </header>	
                                
                <div class="entry-content">	
                    <p>Lorem ipsum dolor sit amet, <strong>consectetur adipiscing</strong> elit. Vivamus luctus urna sed urna ultricies ac tempor dui sagittis. In condimentum facilisis porta. Sed nec diam eu diam mattis viverra. Nulla fringilla, orci ac euismod semper, magna diam porttitor mauris, quis sollicitudin sapien justo in libero. Vestibulum mollis mauris enim. Morbi euismod magna ac lorem rutrum elementum. Donec viverra auctor lobortis. Pellentesque eu est a nulla placerat dignissim. Morbi a enim in magna semper bibendum. Etiam scelerisque, nunc ac egestas consequat, odio nibh euismod nulla, eget auctor orci nibh vel nisi. Aliquam erat volutpat. Mauris vel neque sit amet nunc gravida congue sed sit amet purus. Quisque.</p>
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
                </div>
            
            </article><!-- /post -->               
        </div>	    
        <div class="large-3 columns sidebar sidebar-1">			
			<aside class="widget group">
				<h4 class="widget-title ">Contact information</h4>
				<ol class="widget-list widget-list-single">
					<li>
						<figure class="event-thumb">
							<a href="artist.html">
								<img src="{{ asset('images/admin.jpg') }}" alt="" style="width: 100%;">								
							</a>
						</figure>
						<h5 class="list-subtitle">Phone</h5>
						<h4 class="list-title"><a href="artist.html" class="action-btn">1234567890</a></h4>
						<h5 class="list-subtitle">Email</h5>
						<h4 class="list-title"><a href="artist.html" class="action-btn">admin@gmail.com</a></h4>
						<h5 class="list-subtitle">Name</h5>
						<h4 class="list-title"><a href="artist.html" class="action-btn">Stewart</a></h4>						
					</li>
				</ol>
			</aside><!-- /widget -->
		</div>    
	</div><!-- /main -->
</div><!-- /main-wrap -->
@endsection

@section('credits_wrap')
<div id="credits-wrap">
	<div class="row">
		<div class="large-12 columns">
			<div class="row credits">
				<div class="large-6 columns">
					Yuna-Japan, Inc. All rights reserved.
				</div>
				<div class="large-6 columns text-right">
					&copy; <?php
						$copyYear = 2018; // Set your website start date
						$curYear = date('Y'); // Keeps the second year updated
						echo $copyYear . (($copyYear != $curYear) ? '-' . $curYear : '');
						?> Copyright.
				</div>				
			</div><!-- /row -->
		</div><!-- /large-12 -->
	</div><!-- /row -->
</div><!-- /credits-wrap -->
@endsection