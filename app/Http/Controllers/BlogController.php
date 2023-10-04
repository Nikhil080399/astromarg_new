<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image_gallery;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blog = Blog::all();

        return view('admin.blog', compact('blog'));
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
        $blog = new Blog();
        $blog->image = $request->image;
        $blog->title = $request->title;
        $blog->description = $request->description;
        $blog->date = $request->date;
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $blog->image = 'storage/images/' . $imageName; // Assuming 'storage/images' is the public disk link to 'public/storage/images'
        }
        
        $blog->save();
        return redirect('blog')->with('success', 'blog Appointment Added Success');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog $blog)
    {
        $blog = Blog::all();
        return view('frontend.blog_front', compact('blog'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, $id)
    {
        {
            $blog = Blog::find($id);
            return view('admin.update_blog', compact('blog'));
        }
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog, $id)
    {
        {
            $blog = Blog::find($id);
            $blog->date = $request->date;
            $blog->title = $request->title;
            $blog->description = $request->dscription;
    
            if ($request->hasFile('image')) {
                $image = $request->file('image');
                $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
                $imagePath = $image->storeAs('public/images', $imageName);
                $blog->image = 'storage/images/' . $imageName; // Assuming 'storage/images' is the public disk link to 'public/storage/images'
            }
    
            $blog->update();
            return redirect('/blog')->with('update', 'Blog Updated successfully');
        }
    
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog, $id)
    {
        {
            $blog = Blog::find($id);
            $blog->delete();
            return redirect('/blog');
        }
    }
    public function blogPage(Blog $blog,Request $request, $id)
    {
        $blogPost = Blog::find($id);
        $blog_latest = Blog::latest()->limit(3)->get();
        return view('frontend.blog_page', compact('blogPost','blog_latest'));
    }
    
}
