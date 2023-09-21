<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Chandal_YogaController extends Controller
{
    function index()
    {
        return view('frontend.chandal-yoga');
    }
}
