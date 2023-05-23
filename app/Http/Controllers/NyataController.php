<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class NyataController extends Controller
{
    public function index()
    {
        $title = "Welcome to Laravel";
        $description = "This is description";
        return view('product.index', compact('title', 'description'));
        //compact() return any variable made in this php
        //index($variable) give variable from input url from route into this function
    }

    public function about()
    {
        return 'About Time';
    }

    public function show($id)
    {
    }
    //
}
