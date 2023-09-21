<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Astromarg_SolutionController extends Controller
{
    function index()
    {
        return view('frontend.astromarg-solution');
    }
}
