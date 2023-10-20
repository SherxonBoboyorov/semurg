<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateStructure;
use App\Http\Requests\Admin\UpdateStructure;
use App\Models\Structure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class StructureController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $structures = Structure::orderBy('id')->get();
        return view('admin.structure.index', compact('structures'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.structure.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateStructure $request)
    {
        $data = $request->all();

        $data['image'] = Structure::uploadImage($request);

        if (Structure::create($data)) {
            return redirect()->route('structure.index')->with("message", "created successfully!!");
        }
        return redirect()->route('structure.index')->with("message", "failed to add successfully!!");
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
        $structure = Structure::find($id);
        return view('admin.structure.edit', compact('structure'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateStructure $request, string $id)
    {
        $structure = Structure::find($id);

        $data = $request->all();
        $data['image'] = Structure::updateImage($request, $structure);

        if ($structure->update($data)) {
            return redirect()->route('structure.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('structure.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $structure = Structure::find($id);

        if (File::exists(public_path() . $structure->image)) {
            File::delete(public_path() . $structure->image);
        }

        if ($structure->delete()) {
            return redirect()->route('structure.index')->with('message', "deleted successfully");
        }

        return redirect()->route('structure.index')->with('message', "failed to delete successfullt!!");
    }
}
