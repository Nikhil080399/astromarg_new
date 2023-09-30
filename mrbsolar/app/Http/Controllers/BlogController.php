<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use App\Models\Image_gallery;
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

        return view('admin.pages.blog', compact('blog'));
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
            'date' => 'required',
            'title' => 'required',
            'discription' => 'required',
        ]);

        $date = $request->get('date');
        $title = $request->get('title');
        $discription = $request->get('discription');

        $blog = new Blog();
        $blog->date = $date;
        $blog->title = $title;
        $blog->discription = $discription;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $blog->image = 'storage/images/' . $imageName; // Assuming 'storage/images' is the public disk link to 'public/storage/images'
        }

        $blog->save();
        return redirect('blog')->with('success', 'Blog added successfully.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Blog  $blog)
    {
        $blog = Blog::all();
        return view('frontend.blog_front', compact('blog'));
    }

    public function blogPage(Blog $blog,Request $request, $id)
    {
        $blogPost = Blog::find($id);
        $image_gal = Image_gallery::latest()->limit(9)->get();
        $blog_latest = Blog::latest()->limit(3)->get();
        return view('frontend.blog_page', compact('blogPost','image_gal','blog_latest'));
    }


    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        return view('admin.pages.update_blog', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $blog->date = $request->date;
        $blog->title = $request->title;
        $blog->discription = $request->discription;

        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $imageName = Str::uuid() . '.' . $image->getClientOriginalExtension();
            $imagePath = $image->storeAs('public/images', $imageName);
            $blog->image = 'storage/images/' . $imageName; // Assuming 'storage/images' is the public disk link to 'public/storage/images'
        }

        $blog->update();
        return redirect('/blog')->with('update', 'Blog Updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Blog $blog, $id)
    {
        $blog = Blog::find($id);
        $blog->delete();
        return redirect('/blog');
    }
}
