<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Pitru_DoshController extends Controller
{
    function index()
    {
        return view('frontend.pitru-dosh');
    }
}
