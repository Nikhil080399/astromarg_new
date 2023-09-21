<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class StotraController extends Controller
{
    function index()
    {
        return view('frontend.stotra');
    }
}
