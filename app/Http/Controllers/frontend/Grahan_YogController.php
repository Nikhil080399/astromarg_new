<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class Grahan_YogController extends Controller
{
    function index()
    {
        return view('frontend.grahan-yog');
    }
}
