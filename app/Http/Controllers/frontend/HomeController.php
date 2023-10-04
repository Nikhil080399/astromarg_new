<?php

namespace App\Http\Controllers\frontend;


use App\Models\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(Blog $blog)
    {
        $blog_latest = Blog::latest()->limit(3)->get();
        return view('frontend/home',compact('blog_latest'));
    }

   
}
