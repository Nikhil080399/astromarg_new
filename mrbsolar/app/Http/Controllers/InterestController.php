<?php

namespace App\Http\Controllers;

use App\Models\interest;
use Illuminate\Http\Request;

class InterestController extends Controller
{
    public function index()
    {
        $interests = Interest::all();

        return view('admin.pages.interest', compact('interests'));
    }

    public function create()
    {
        // Create a view for adding new interests
        return view('admin.pages.interest');
    }

    public function store(Request $request)
    {
        $request->validate([
            'interest' => 'required|unique:interests', // Add a rule for unique interests
        ]);

        $interest = new interest();
        $interest->interest = $request->input('interest');
        $interest->save();

        return redirect('interest')->with('success', 'Category added successfully.');
    }

    public function show(interest $interest)
    {
        $interests = interest::all();
        return view('frontend.enquiry', compact('interests'));
    }

    public function edit($id)
    {
        $interest = interest::find($id);
        return view('admin.pages.update_interest', compact('interest'));
    }

    public function update(Request $request, $id)
    {
        $interest = interest::find($id);
        $request->validate([
            'interest' => 'required|unique:interests,interest,' . $id, // Add a rule for unique interests, excluding the current ID
        ]);

        $interest->interest = $request->input('interest');
        $interest->update();

        return redirect('/interest')->with('update', 'Category updated successfully');
    }

    public function destroy($id)
    {
        $interest = interest::find($id);
        $interest->delete();

        return redirect('/interest');
    }
}
