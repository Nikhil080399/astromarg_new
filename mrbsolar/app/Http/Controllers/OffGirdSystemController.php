<?php

namespace App\Http\Controllers;

use App\Models\Off_Gird_system;
use Illuminate\Http\Request;

class OffGirdSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Off_Gird_system $offgrid)
    {
        $offgrid = Off_Gird_system::all();

        return view('admin.pages.off_grid_system', compact('offgrid'));
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
            'roof_of_area' => 'required',
            'title' => 'required',
            'points' => 'required',
        ]);

        $roof_of_area = $request->get('roof_of_area');
        $title = $request->get('title');
        $points = $request->get('points');

        $offgrid = new Off_Gird_system();
        $offgrid->roof_of_area = $roof_of_area;
        $offgrid->title = $title;
        $offgrid->points = $points;
        
        $offgrid->save();
        return redirect('off_grid_system')->with('success', 'Off-Grid added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Off_Gird_system $off_Gird_system)
    {
        $offgrid = Off_Gird_system::all();
        return view('frontend.rooftop', compact('offgrid'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Off_Gird_system $off_Gird_system, $id)
    {
        $off_Gird_system = Off_Gird_system::find($id);
        return view('admin.pages.update_offgrid', compact('off_Gird_system'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Off_Gird_system $off_Gird_system, $id)
    {
        $off_Gird_system = Off_Gird_system::find($id);
        $off_Gird_system->roof_of_area = $request->roof_of_area;
        $off_Gird_system->title = $request->title;
        $off_Gird_system->points = $request->points;

        $off_Gird_system->update();
        return redirect('/off_grid_system')->with('update', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Off_Gird_system $off_Gird_system , $id)
    {
        $off_Gird_system = Off_Gird_system::find($id);
        $off_Gird_system->delete();
        return redirect('/off_grid_system');
    }
}
