@extends('layouts.app')

@section('title')
    Skate Finder
@endsection

@section('content')
<style>
   @media only screen and (max-width: 600px){
            .display-3 {
            font-size: 50px;
            }
        }
</style>

<div class="jumbotron">
        
	<div class="container">
          
		<h1 class="display-3">Welcome to Skate Finder</h1>
          
		<p>Skate.Finder is the ultimate platform for skateboarders. Your go-to for anything skateboarding: finding local skate shops, 		skate parks, and even finding the most hidden and exclusive skate spots in your area. Find, skate, and share your best tricks at 		the spots you find! Upload your own spot discoveries, or rate others spots. Check out our online store for essential skate 		product!</p>
        @guest
            <p><a class="btn btn-primary btn-lg" href="{{ route('login') }}" role="button">Log In &raquo;</a>
            <a class="btn btn-primary btn-lg" href="{{ route('register') }}" role="button">Sign Up &raquo;</a>
            </p>
        @else
            <p><a class="btn btn-primary btn-lg" href="{{ route('home') }}" role="button">Go To Dashboard &raquo;</a></p>
        @endguest
	</div>
      
</div>



<div class="container marketing">
    
        <!-- Three columns of text below the carousel -->
        <div class="row">
          <div class="col-lg-4">
            <img class="rounded-circle" src="http://icons.iconarchive.com/icons/paomedia/small-n-flat/1024/map-marker-icon.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Explore.</h2>
            <p>Create an account with us to find the best skatespots near you! Or upload some of your favorite spots to get the word out to fellow skaters.</p>
              @guest
            <p><a class="btn btn-secondary" href="{{ route('login') }}" role="button">View details &raquo;</a></p>
              @else
              <p><a class="btn btn-secondary" href="{{ route('explore') }}" role="button">View details &raquo;</a></p>
              @endguest
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://www.shareicon.net/download/2016/10/18/845252_commerce_512x512.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Shop.</h2>
            <p>All those cool spots and possibilities arent much use to you without the proper gear. Sign up today to recieve the best deals on your favorite skateboarding products. Need gear today? Search for skate shops near you!</p>
            <p><a class="btn btn-secondary" href="{{ route('products') }}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
          <div class="col-lg-4">
            <img class="rounded-circle" src="https://upload.wikimedia.org/wikipedia/commons/thumb/d/dd/Circle-icons-skateboard.svg/2000px-Circle-icons-skateboard.svg.png" alt="Generic placeholder image" width="140" height="140">
            <h2>Skate.</h2>
            <p>Skate Finder is the ultimate one stop shop for all skateboarding needs. Get the sessions going and keep the tricks comming. Upload your best tricks and clips with a Skate.Finder account today!</p>
            <p><a class="btn btn-secondary" href="{{ route('register') }}" role="button">View details &raquo;</a></p>
          </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->
</div>
  
@endsection

