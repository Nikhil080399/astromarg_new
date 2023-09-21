<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Sarp_DoshController extends Controller
{
    function index()
    {
        return view('frontend.sarp-dosh');
    }
}
