<?php

namespace App\Http\Controllers;

use App\Models\Rquirement;
use Illuminate\Http\Request;

class RquirementController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $requirement = Rquirement::all();

        return view('admin.pages.requirement', compact('requirement'));
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
            'product' => 'required',
            'quantity' => 'required',
            'piece' => 'required',
            'number' => 'required',
        ]);

        $product = $request->get('product');
        $quantity = $request->get('quantity');
        $piece = $request->get('piece');
        $number = $request->get('number');

        $requirement = new Rquirement();
        $requirement->product = $product;
        $requirement->quantity = $quantity;
        $requirement->piece = $piece;
        $requirement->number = $number;
        
        $requirement->save();
        return redirect('solar_pump')->with('success', 'Requirement Submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(Rquirement $rquirement)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Rquirement $rquirement)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Rquirement $rquirement)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Rquirement $rquirement)
    {
        $rquirement->delete();
        return redirect('admin/pages/requirement');
    }
}
