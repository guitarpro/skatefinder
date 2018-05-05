@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card card-default">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success">
                            {{ session('status') }}
                        </div>
                    @endif
                        Welcome, {{ Auth::user()->name }}!
                </div>
            </div>
        </div>
    </div>
    <main role="main" class="container">

      <div class="my-3 p-3 bg-white rounded box-shadow">
        <h6 class="border-bottom border-gray pb-2 mb-0">User Options</h6>
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Create Spot</strong>
              <a href="{{ route('create') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
            <span class="d-block">Upload a new location that you've found for everyone else to skate!</span>
          </div>
        </div>
          
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">Custom Spots</strong>
              <a href="#"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
            <span class="d-block">View and edit all the skate spots you've uploaded so far.</span>
          </div>
        </div>  
          
        <div class="media text-muted pt-3">
          <img data-src="holder.js/32x32?theme=thumb&bg=007bff&fg=007bff&size=1" alt="" class="mr-2 rounded">
          <div class="media-body pb-3 mb-0 small lh-125 border-bottom border-gray">
            <div class="d-flex justify-content-between align-items-center w-100">
              <strong class="text-gray-dark">View Cart</strong>
              <a href="{{ route('pages.shopping-cart') }}"><i class="far fa-arrow-alt-circle-right"></i></a>
            </div>
            <span class="d-block">Remove or add products to your cart before checkout.</span>
          </div>
        </div>

      </div>
    </main>
</div>
@endsection
