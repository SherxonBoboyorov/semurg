<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOcagoBanner;
use App\Http\Requests\Admin\UpdateOcagoBanner;
use App\Models\OcagoBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OcagoBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ocagobanners = OcagoBanner::orderBy('created_at', 'DESC')->get();
        return view('admin.ocagobanner.index', compact('ocagobanners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ocagobanner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOcagoBanner $request)
    {
        $data = $request->all();

        $data['image'] = OcagoBanner::uploadImage($request);

        if(OcagoBanner::create($data)) {
            return redirect()->route('ocagobanner.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('ocagobanner.index')->with('message', 'failed to add successfully!!');
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
        $ocagobanner = OcagoBanner::find($id);
        return view('admin.ocagobanner.edit', compact('ocagobanner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOcagoBanner $request, string $id)
    {
        $ocagobanner = OcagoBanner::find($id);

        $data = $request->all();
        $data['image'] = OcagoBanner::updateImage($request, $ocagobanner);

        if ($ocagobanner->update($data)) {
            return redirect()->route('ocagobanner.index')->with('message', "changed successfully!!");
        }
        return redirect()->route('ocagobanner.index')->with('message', "failed to update successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ocagobanner = OcagoBanner::find($id);

        if (File::exists(public_path() . $ocagobanner->image)) {
            File::delete(public_path() . $ocagobanner->image);
        }

        if ($ocagobanner->delete()) {
            return redirect()->route('ocagobanner.index')->with('message', "deleted successfully");
        }

        return redirect()->route('ocagobanner.index')->with('message', "failed to delete successfullt!!");
    }
}

