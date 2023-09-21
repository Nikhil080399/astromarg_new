<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vastu_ConsulationController extends Controller
{
    function index()
    {
        return view('frontend.vastu-consulation');
    }
    
}
