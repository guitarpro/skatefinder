@extends('layouts.app')

@section('content')

    <h1>Create a Spot</h1>
    
    <form action="store" method="post" enctype="multipart/form-data">
        <label for="name">Name</label>
        <input type="text" name="name"><br/>
        <label for="address">Address</label>
        <input type="text" name="address"><br/>
        <label for="description">Description</label>
        <input type="text" name="description"><br/>
        <label for="image_path">Photo</label>
        <input type="file" name="image_path"><br/>
        
        <input type="hidden" name="_token" value="{{ csrf_token() }}">
        
        <label for="type">Location Type</label>
        <select name="type">
            <option>Park</option>
            <option>Shop</option>
            <option>Spot</option>
        </select><br/>
        <input type="submit" name="submit" value="Submit">
    </form>



@endsection