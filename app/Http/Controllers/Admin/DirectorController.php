<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateDirector;
use App\Http\Requests\Admin\UpdateDirector;
use App\Models\Director;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class DirectorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $directors = Director::orderBy('id')->paginate(10);
        return view('admin.director.index', compact('directors'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.director.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateDirector $request)
    {
        $data = $request->all();

        $data['image'] = Director::uploadImage($request);

        if (Director::create($data)) {
            return redirect()->route('director.index')->with("message", "created successfully!!");
        }
        return redirect()->route('director.index')->with("message", "failed to add successfully!!");
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
        $director = Director::find($id);
        return view('admin.director.edit', compact('director'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDirector $request, string $id)
    {
        $director = Director::find($id);

        $data = $request->all();
        $data['image'] = Director::updateImage($request, $director);

        if ($director->update($data)) {
            return redirect()->route('director.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('director.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $director = Director::find($id);

        if (File::exists(public_path() . $director->image)) {
            File::delete(public_path() . $director->image);
        }

        if ($director->delete()) {
            return redirect()->route('director.index')->with('message', "deleted successfully");
        }

        return redirect()->route('director.index')->with('message', "failed to delete successfullt!!");
    }
}