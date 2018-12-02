@extends('layouts.app')

@section('content')

<div id="main-login" class="row">      
    <div class="large-offset-3 large-6 columns">
        <article class="post group">
            
            <header class="entry-top special-top">
                <h1 class="entry-title page-title">Login</h1>
            </header>	
                            
            <div class="entry-content">	                   
                <form method="post" action="{{url('login')}}">
                    @csrf
                    <p>
                        <label>Email:</label> <input type="text" class="text" id="email1" name="email" placeholder="Your Email" />
                    </p>
                    <p>
                        <label>Password:</label> <input type="password" class="text" id="password" name="password" placeholder="Your Password" />
                    </p>
                    <p id="post-action">
                        <input type="submit" class="button fbutton" name="submit" id="submit" value="Submit"/>
                    </p>
                </form>
            </div>            
        </article><!-- /post -->               
    </div>	              
</div><!-- /main -->
@endsection
