<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePage;
use App\Http\Requests\Admin\UpdatePage;
use App\Models\Page;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class PageController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pages = Page::all();
        return view('admin.page.index', compact('pages'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.page.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePage $request)
    {
        $data = $request->all();

        $data['image'] = Page::uploadImage($request);

        if (Page::create($data)) {
            return redirect()->route('page.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('page.index')->back()->with('message', 'failed to add successfully!!');
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
        $page = Page::find($id);
        return  view('admin.page.edit', compact('page'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePage $request, string $id)
    {
        $page = Page::find($id);

        $data = $request->all();

        $data['image'] = Page::updateImage($request, $page);

        if ($page->update($data)) {
            return redirect()->route('page.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('page.index')->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $page = Page::find($id);

        if (File::exists(public_path() . $page->image)) {
            File::delete(public_path() . $page->image);
        }

        if ($page->delete()) {
            return redirect()->route('page.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('page.index')->with('message', "failed to delete successfully!!");
    }
}
