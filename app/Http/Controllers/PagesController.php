<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = "Welcome to SkateFinder";
        //return view('pages.index', compact('title'));
        return view('pages.index')->with('title', $title);
    }

    public function about(){
        $title = "About Page";
        return view('pages.about')->with('title', $title);
    }

    public function explore(){
        return view('pages.explore');
    }
    
    

}
