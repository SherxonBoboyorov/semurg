<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateBlog;
use App\Http\Requests\Admin\UpdateBlog;
use App\Models\Blog;
use Illuminate\Http\Request;

class BlogController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $blogs = Blog::all();
        return view('admin.blog.index', compact('blogs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.blog.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateBlog $request)
    {
        $data = $request->all();

        if(Blog::create($data)) {
            return redirect()->route('blog.index')->with("message", "Created successfully!!");
        }
        return redirect()->route('blog.index')->with("message", "Failed to create successfully!!");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $blog = Blog::find($id);
        return view('admin.blog.edit', compact('blog'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateBlog $request, string $id)
    {
        $blog = Blog::find($id);

        $data = $request->all();

        if ($blog->update($data)) {
            return redirect()->route('blog.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('blog.index')->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $blog = Blog::find($id);

        if ($blog->delete()) {
            return redirect()->route('blog.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('blog.index')->with('message', "failed to delete successfully!!");
    }
}
