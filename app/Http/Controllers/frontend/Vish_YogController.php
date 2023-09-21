<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Vish_YogController extends Controller
{
    function index()
    {
        return view('frontend.vish-yog');
    }
}
