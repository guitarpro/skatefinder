@extends('layouts.app')

@section('content')

<style>
    .jumbotron p {
        font-size: 20px;
    }
    .jumbotron {
        background-image: url("{{ asset('images/index-hero.jpg') }}");
    }
        @media only screen and (max-width: 600px){
            .display-3 {
            font-size: 50px;
            }
        }
    

</style>
<div class="jumbotron">
        
	<div class="container">
          
		<h1 class="display-3">Products</h1>
          
		<p>In order to skate all the cool spots you'll find with Skate Finder, you need only the best skateboarding gear. Shop boards and find spots all in one stop!</p>
          
		<p><a class="btn btn-primary btn-lg" href="{{ route('pages.shopping-cart') }}" role="button">View Cart &raquo;</a>
		</p>
        
	</div>
      
</div>

    <div class="container">
        <div class="row">
            @foreach($products->chunk(3) as $productChunk)
		
                @foreach($productChunk as $product)
                    <div class="col-md-3 col-sm-6 border">
                        <span class="thumbnail">
                            <img class="img-responsive" style="height: 250px; width: 250px" src="{{ $product->imagePath }}" alt="Card image cap">
                            <h5>{{ $product->title }}</h5>
                            <p>{{ $product->description }}</p>
                            <hr class="line">
                            <div class="row">
                                <div class="col-md-6 col-sm-6">
                                    <p class="price">${{ $product->price }}</p>
                                </div>
                                <div class="col-md-6 col-sm-6">
                                    <a href="{{ route('product.addToCart', ['id' => $product->id]) }}" class="btn btn-success">ADD TO CART</a>
                                </div>
                            </div>    
                        </span>  
                    </div>
                @endforeach  
		
            @endforeach
        </div>    
    </div>


@endsection


