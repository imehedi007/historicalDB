<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    function read(){
        return view('frontend.pages.blogread');
    }
}
