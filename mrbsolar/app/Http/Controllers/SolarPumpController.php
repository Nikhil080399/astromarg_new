<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\DB;
use App\Models\Gird_Tie_system;
use App\Models\SolarPump;
use App\Models\Blog;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class SolarPumpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(SolarPump $solarPump)
    {
        $pumps = SolarPump::all();

        return view('admin.pages.solar_pump_products', compact('pumps'));
    }


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'solar_module' => 'required',
            'dynamic_pump_head' => 'required',
            'water_discharge' => 'required',
            'features' => 'required',
            'components' => 'required',
            'benefits' => 'required',
            'type' => 'required',
            'card_image' => 'image|mimes:png,jpg,jpeg',
            'banner_image' => 'image|mimes:png,jpg,jpeg',
        ]);

        $title = $request->get('title');
        $solar_module = $request->get('solar_module');
        $dynamic_pump_head = $request->get('dynamic_pump_head');
        $water_discharge = $request->get('water_discharge');
        $features = $request->get('features');
        $components = $request->get('components');
        $benefits = $request->get('benefits');
        $type = $request->get('type');

        $products = new SolarPump();
        $products->title = $title;
        $products->solar_module = $solar_module;
        $products->dynamic_pump_head = $dynamic_pump_head;
        $products->water_discharge = $water_discharge;
        $products->features = $features;
        $products->components = $components;
        $products->benefits = $benefits;
        $products->type = $type;

        if ($request->hasFile('card_image')) {
            $cardImage = $request->file('card_image');
            $cardImageName = Str::uuid() . '.' . $cardImage->getClientOriginalExtension();
            $cardImagePath = $cardImage->storeAs('public/images', $cardImageName);
            $products->card_image = $cardImageName;
        }

        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageName = Str::uuid() . '.' . $bannerImage->getClientOriginalExtension();
            $bannerImagePath = $bannerImage->storeAs('public/images', $bannerImageName);
            $products->banner_image = $bannerImageName;
        }

        $products->save();
        return redirect('solar_pump_products')->with('success', 'Product added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(SolarPump $solarPump)
    {
        $pumps = SolarPump::all();
        return view('frontend.solar_pump', compact('pumps'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(SolarPump $solarPump, $id)
    {
        $solarPump = SolarPump::find($id);
        return view('admin.pages.update_solar_pump_products', compact('solarPump'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, SolarPump $solarPump, $id)
    {
        // dd($request);
        $solarPump = SolarPump::find($id);
        // dd($solarPump);
        // die();
        $solarPump->title = $request->title;
        $solarPump->solar_module = $request->solar_module;
        $solarPump->dynamic_pump_head = $request->dynamic_pump_head;
        $solarPump->water_discharge = $request->water_discharge;
        $solarPump->features = $request->features;
        $solarPump->components = $request->components;
        $solarPump->benefits = $request->benefits;
        $solarPump->type = $request->type;

        if ($request->hasFile('card_image')) {
            $cardImage = $request->file('card_image');
            $cardImageName = Str::uuid() . '.' . $cardImage->getClientOriginalExtension();
            $cardImagePath = $cardImage->storeAs('public/images', $cardImageName);
            $solarPump->card_image = $cardImageName;
        }

        if ($request->hasFile('banner_image')) {
            $bannerImage = $request->file('banner_image');
            $bannerImageName = Str::uuid() . '.' . $bannerImage->getClientOriginalExtension();
            $bannerImagePath = $bannerImage->storeAs('public/images', $bannerImageName);
            $solarPump->banner_image = $bannerImageName;
        }
        $solarPump->update();
        return redirect('/solar_pump_products')->with('update', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(SolarPump $solarPump, $id)
    {
        $solarPump = SolarPump::find($id);
        $solarPump->delete();
        return redirect('/solar_pump_products');
    }

    public function get_pump_id(Request $request)
    {
        $pump_detail = SolarPump::where('id', $request->input('pumpclick'))->get();
        // dd( $pump_detail );
        // die();
        return response()->json([
            'pump_detail' => $pump_detail,
        ]);
    }

    public function product_detail(Request $request)
    {
        $encoded_pump_detail = $request->input('pump_detail');

        // If the 'pump_detail' parameter is not present or empty
        if (!$encoded_pump_detail) {
            return redirect()->back()->with('error', 'Data not found');
        }

        // Use urldecode to decode the encoded data
        $pump_detail = json_decode(urldecode($encoded_pump_detail), true);

        $pumps = SolarPump::latest('id')->limit(4)->get();


        return view('frontend.product_detail', compact('pump_detail', 'pumps'));
    }

    public function indexLatest()
    {
        $indexLatest = SolarPump::latest('id')->limit(4)->get();
        $gridLatest = Gird_Tie_system::limit(4)->get();
        $blogLatest = Blog::limit(6)->get();
        $sliders = Carousel::all();

        return view('frontend.index', compact('indexLatest', 'gridLatest','sliders','blogLatest'));
    }

    public function pumpInquery(SolarPump $id)
    {
        $pumpInquery = SolarPump::find($id);

        return view('frontend.index', compact('pumpInquery'));
    }

}
