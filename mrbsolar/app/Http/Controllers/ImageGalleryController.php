<?php

namespace App\Http\Controllers;

use App\Models\Image_gallery;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class ImageGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Image_gallery $image_gallery)
    {
        $image = Image_gallery::all();

        return view('admin.pages.image_gallery', compact('image'));
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
            'image' => 'image|mimes:png,jpg,jpeg',
            'title' => 'required',
        ]);

        $title = $request->get('title');

        $image_gallery = new Image_gallery();
        $image_gallery->title = $title;

        if ($request->hasFile('image')) {
            $Image = $request->file('image');
            $ImageName = Str::uuid() . '.' . $Image->getClientOriginalExtension();
            $ImagePath = $Image->storeAs('public/images', $ImageName);
            $image_gallery->image = $ImageName;
        }

        $image_gallery->save();
        return redirect('image_gallery')->with('success', 'Image added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Image_gallery $image_gallery)
    {
        $image = Image_gallery::all();
        return view('frontend.images', compact('image'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Image_gallery $image_gallery , $id)
    {
        $image_gallery = Image_gallery::find($id);
        return view('admin.pages.update_image_gallery', compact('image_gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Image_gallery $image_gallery, $id)
    {
        $image_gallery = Image_gallery::find($id);
        $image_gallery->title = $request->title;

        if ($request->hasFile('image')) {
            $Image = $request->file('image');
            $ImageName = Str::uuid() . '.' . $Image->getClientOriginalExtension();
            $ImagePath = $Image->storeAs('public/images', $ImageName);
            $image_gallery->image = $ImageName;
        }

        $image_gallery->update();
        return redirect('/image_gallery')->with('update', 'Image Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Image_gallery $image_gallery,$id)
    {
        $image_gallery = Image_gallery::find($id);
        $image_gallery->delete();
        return redirect('/image_gallery');
    }
}
