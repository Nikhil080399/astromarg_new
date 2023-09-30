<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;
use Illuminate\Support\Facades\DB;


class DashboardController extends Controller
{
   
    public function index()
    {
        // // Get the total inquiry count
        $totalInquiryCount = DB::table('enquiries')
            ->count();

        $totalBuyCount = DB::table('rquirements')
        ->count();

        $totalBlogCount = DB::table('blogs')
        ->count();

        // Pass the inquiry counts to the view
        return view('admin.dashboard', [
            'totalBuyCount' => $totalBuyCount,
            'totalInquiryCount' => $totalInquiryCount,
            'totalBlogCount' => $totalBlogCount,
            // 'totalJobCount' => $totalJobCount,
        ]);
    }

}
