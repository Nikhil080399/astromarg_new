<?php

namespace App\Http\Controllers;

use App\Models\Gird_Tie_system;
use App\Models\Off_Gird_system;
use Illuminate\Http\Request;

class GirdTieSystemController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Gird_Tie_system $gridTie)
    {
        $grid = Gird_Tie_system::all();

        return view('admin.pages.grid_tie_system', compact('grid'));
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

        $grid = new Gird_Tie_system();
        $grid->roof_of_area = $roof_of_area;
        $grid->title = $title;
        $grid->points = $points;

        $grid->save();
        return redirect('grid_tie_system')->with('success', 'Grid added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Gird_Tie_system $gird_Tie_system)
    {
        $grid = Gird_Tie_system::all();
        $offgrid = Off_Gird_system::all();
        return view('frontend.rooftop', compact('grid','offgrid'));
    }
    
    

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Gird_Tie_system $gird_Tie_system, $id)
    {
        $gird_Tie_system = Gird_Tie_system::find($id);
        return view('admin.pages.update_grid_tie', compact('gird_Tie_system'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Gird_Tie_system $gird_Tie_system, $id)
    {
        $gird_Tie_system = Gird_Tie_system::find($id);
        $gird_Tie_system->roof_of_area = $request->roof_of_area;
        $gird_Tie_system->title = $request->title;
        $gird_Tie_system->points = $request->points;

        $gird_Tie_system->update();
        return redirect('/grid_tie_system')->with('update', 'Product Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Gird_Tie_system $gird_Tie_system, $id)
    {
        $gird_Tie_system = Gird_Tie_system::find($id);
        $gird_Tie_system->delete();
        return redirect('/grid_tie_system');
    }
}
