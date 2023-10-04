<?php

namespace App\Http\Controllers;

use App\Models\Video;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class VideoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(video $video)

    {
        $video = video::all();

        return view('admin.video', compact('video'));
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

        $video = new video();

        $video->video = $request->video;


        $video->save();
        return redirect('video')->with('success', 'Video added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Video $video)
    {
        $video = Video::all();
        return view('frontend.videof', compact('video'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Video $video, $id)
    {
        $video = Video::find($id);
        return view('admin.update_video', compact('video'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Video $video, $id)
    {

        $video = Video::findorfail($id);
        $video->video = $request->video;

        // Save the updated record
        $video->update();

        return redirect()->route('video')->with('success', 'Video updated successfully.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Video $video, $id)
    {
        $video = Video::find($id);
        $video->delete();
        return redirect('/video');
    }
}
