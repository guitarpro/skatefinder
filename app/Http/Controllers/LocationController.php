<?php

namespace App\Http\Controllers;

use App\Locations;
use Illuminate\Http\Request;
use App\Http\Requests;
use Illuminate\Support\Facades\Input;

class LocationController extends Controller
{
    public function getLoc(){
        $locations = Locations::all();
        return view('pages.explore', ['locations' => $locations]);
    }
    
    public function create(){
        return view('pages.create');
    }
    
    public function store(Request $request) {
        $user = new Locations;
        
        $user->name= Input::get('name');
        $user->address= Input::get('address');
        $user->description= Input::get('description');
        if (Input::hasFile('image_path')) {
            $Locations=Input::locations('image_path');
            $Locations->move(public_path(). '/', $Locations->getClientOriginalName());
            
            $user->name = $Locations->getClientOriginalName();
        }
        $user->type= Input::get('type');
        
        $user->save();
        
        return 'data saved in database';
    }
}