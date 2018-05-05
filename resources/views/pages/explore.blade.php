@extends('layouts.app')

@section('content')

@guest
    <h1>You are not Logged in</h1>
@else
<style>
        .jumbotron p {
        font-size: 20px;
    }
    .jumbotron {
        background-image: url("{{ asset('images/map-hero.jpg') }}");
    }
    
    @media only screen and (max-width: 600px){
            .display-3 {
            font-size: 50px;
            }
        }
</style>
<div class="jumbotron">
        
	<div class="container">
          
		<h1 class="display-3">Explore</h1>
          
		<p>Ready to skate cool new spots with your friends? You've come to the right place. Explore all these Spots, Parks, and Shops near you!</p>
        
	</div>
      
</div>
<div class="container">
    <div class="row">
        <div class="row mb-2">  
            @foreach($locations->chunk(3) as $locationChunk)
		
                @foreach($locationChunk as $location)
            
	       <div class="col-md-6">
                <div class="card flex-md-row mb-4 box-shadow h-md-250">
                    <div class="card-body d-flex flex-column align-items-start">
                        <strong class="d-inline-block mb-2 text-primary">{{ $location->type }}</strong>
                        <h3 class="mb-0">
                            <a class="text-dark" href="#">{{ $location->name }}</a>
                        </h3>
                        <div class="mb-1 text-muted">{{ $location->address }}</div>
                        <p class="card-text mb-auto">{{ $location->description }}</p>
                        <a href="#">Continue reading</a>
                    </div>
                    <img class="card-img-right flex-auto d-none d-lg-block" src="{{ $location->image_path }}" alt="Card image cap" width="200px" height="250">
                </div>
            </div>
            
            @endforeach  
		
            @endforeach
        </div>
    </div>
</div>
@endguest
@endsection