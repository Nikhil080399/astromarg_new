<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Blog;
use App\Models\Video;

class HomeController extends Controller
{
    function index()
    {
        $blog_latest = Blog::latest()->limit(3)->get();
        $video_latest = Video::latest()->limit(3)->get();
        return view('frontend/home',compact('blog_latest','video_latest'));
    }

    
}
