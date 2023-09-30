<?php

namespace App\Http\Controllers;

use App\Models\video_gallery;
use Illuminate\Http\Request;

class VideoGalleryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(video_gallery $video_gallery)
    {
        $video = video_gallery::all();

        return view('admin.pages.video_gallery', compact('video'));
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
            'video' => 'required', // Validation rule for YouTube link
        ]);

        $video_gallery = new video_gallery();

        $video_gallery->video = $request->video;


        $video_gallery->save();
        return redirect('video_gallery')->with('success', 'Video added successfully.');
    }


    /**
     * Display the specified resource.
     */
    public function show(video_gallery $video_gallery)
    {
        $video = video_gallery::all();
        return view('frontend.video', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(video_gallery $video_gallery, $id)
    {
        $video_gallery = video_gallery::find($id);
        return view('admin.pages.update_video_gallery', compact('video_gallery'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, video_gallery $video_gallery, $id)
    {
        $request->validate([
            'video' => 'required',
        ]);

        $video_gallery = video_gallery::findorfail($id);
        $video_gallery->video= $request->video;

        // Save the updated record
        $video_gallery->update();

        return redirect()->route('video_gallery')->with('success', 'Video gallery updated successfully.');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(video_gallery $video_gallery, $id)
    {
        $video_gallery = video_gallery::find($id);
        $video_gallery->delete();
        return redirect('/video_gallery');
    }
}
