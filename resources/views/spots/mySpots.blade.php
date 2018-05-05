@extends('layouts.app')

@section('content')
	@foreach($locations as $location)
		<p>{{ $business->location_name }}</p>
		<a href="/locations/{{ $location->id }}/edit">EDIT</a>
	@endforeach
@endsection
