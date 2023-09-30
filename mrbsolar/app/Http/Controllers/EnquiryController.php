<?php

namespace App\Http\Controllers;

use App\Models\enquiry;
use Illuminate\Http\Request;

class EnquiryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(enquiry $enquiry)
    {
        $enquiry = enquiry::all();

        return view('admin.pages.enquiry', compact('enquiry'));
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
            'interest' => 'required',
            'firstname' => 'required',
            'lastname' => 'required',
            'company' => 'required',
            'number' => 'required|digits:10',
            'email' => 'required|email',
            'country' => 'required',
            'state' => 'required',
            'city' => 'required',
            'message' => 'required',
        ]);

        $interest = $request->get('interest');
        $firstname = $request->get('firstname');
        $lastname = $request->get('lastname');
        $company = $request->get('company');
        $number = $request->get('number');
        $email = $request->get('email');
        $country = $request->get('country');
        $state = $request->get('state');
        $city = $request->get('city');
        $message = $request->get('message');

        $enquiry = new enquiry();
        $enquiry->interest = $interest;
        $enquiry->lastname = $lastname;
        $enquiry->firstname = $firstname;
        $enquiry->company = $company;
        $enquiry->number = $number;
        $enquiry->email = $email;
        $enquiry->country = $country;
        $enquiry->state = $state;
        $enquiry->city = $city;
        $enquiry->message = $message;
        
        $enquiry->save();
        return redirect('enquiry')->with('success', 'Enquiry Submitted');
    }

    /**
     * Display the specified resource.
     */
    public function show(enquiry $enquiry)
    {
       
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(enquiry $enquiry)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, enquiry $enquiry)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(enquiry $enquiry, $id)
    {
        $enquiry = enquiry::find($id);
        $enquiry->delete();
        return redirect('admin/pages/enquiry');
    }
}
