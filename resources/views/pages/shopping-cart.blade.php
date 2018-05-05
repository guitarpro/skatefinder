@extends('layouts.app')

@section('title')
    Skate Finder
@endsection

@section('content')

    @if(Session::has('cart'))
        
        <div class="row">
            <div class="col"></div>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <ul class="list-group">
                    @foreach($products as $product)
                        <li class="list-group-item">
                            <span class="badge badge-success">{{ $product['qty'] }}</span>
                            <strong>{{ $product['item']['title'] }}</strong>
                            <span class="label label-success">${{ $product['price'] }}</span>   
                            <div class="dropdown">
                                  <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Action
                                  </button>
                                  <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <a class="dropdown-item" href="#">Reduce by 1</a>
                                    <a class="dropdown-item" href="#">Remove All</a>
                                  </div>
                            </div>
                        </li>
                    @endforeach
                </ul>
            </div>
            <div class="col"></div>
        </div>

        <div class="row">
            <div class="col"></div>
            <div class="col"></div>
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <strong>Total: ${{ $totalPrice }}</strong>
            </div>
        </div>
        <hr>
        <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <a href="{{ route('pages.checkout') }}" class="btn btn-success">Checkout</a>
            </div>
        </div>

    @else
        
         <div class="row">
            <div class="col-sm-6 col-md-6 col-md-offset-3 col-sm-offset-3">
                <h2>NO ITEMS IN CART</h2>
            </div>
        </div>
    
    @endif

@endsection