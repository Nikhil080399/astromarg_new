<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Astro_ServicesController extends Controller
{
    function index()
    {
        return view('frontend.astro-services');
    }
}
