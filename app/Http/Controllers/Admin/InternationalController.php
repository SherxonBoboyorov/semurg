<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateInternational;
use App\Http\Requests\Admin\UpdateInternational;
use App\Models\International;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InternationalController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $internationals = International::orderBy('id')->paginate(10);
        return view('admin.international.index', compact('internationals'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.international.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateInternational $request)
    {
        $data = $request->all();

        $data['image'] = International::uploadImage($request);

        if (International::create($data)) {
            return redirect()->route('international.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('international.index')->back()->with('message', 'failed to add successfully!!');
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
        $international = International::find($id);
        return view('admin.international.edit', compact('international'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateInternational $request, string $id)
    {
        $international = International::find($id);

        $data = $request->all();
        $data['image'] = International::updateImage($request, $international);

        if ($international->update($data)) {
            return redirect()->route('international.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('international.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $international = International::find($id);

        if (File::exists(public_path() . $international->image)) {
            File::delete(public_path() . $international->image);
        }

        if ($international->delete()) {
            return redirect()->route('international.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('international.index')->with('message', "failed to delete successfully!!");
    }
}
