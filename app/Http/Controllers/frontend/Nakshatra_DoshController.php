<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Nakshatra_DoshController extends Controller
{
    function index()
    {
        return view('frontend.nakshatra-dosh');
    }
}
