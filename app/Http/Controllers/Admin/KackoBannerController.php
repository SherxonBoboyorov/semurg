<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateKackoBanner;
use App\Http\Requests\Admin\UpdateKackoBanner;
use App\Models\KackoBanner;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class KackoBannerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $kackobanners = KackoBanner::orderBy('created_at', 'DESC')->get();
        return view('admin.kackobanner.index', compact('kackobanners'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kackobanner.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateKackoBanner $request)
    {
        $data = $request->all();

        $data['image'] = KackoBanner::uploadImage($request);

        if(KackoBanner::create($data)) {
            return redirect()->route('kackobanner.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('kackobanner.index')->with('message', 'failed to add successfully!!');
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
        $kackobanner = KackoBanner::find($id);
        return view('admin.kackobanner.edit', compact('kackobanner'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateKackoBanner $request, string $id)
    {
        $kackobanner = KackoBanner::find($id);

        $data = $request->all();
        $data['image'] = KackoBanner::updateImage($request, $kackobanner);

        if ($kackobanner->update($data)) {
            return redirect()->route('kackobanner.index')->with('message', "changed successfully!!");
        }
        return redirect()->route('kackobanner.index')->with('message', "failed to update successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $kackobanner = KackoBanner::find($id);

        if (File::exists(public_path() . $kackobanner->image)) {
            File::delete(public_path() . $kackobanner->image);
        }

        if ($kackobanner->delete()) {
            return redirect()->route('kackobanner.index')->with('message', "deleted successfully");
        }

        return redirect()->route('kackobanner.index')->with('message', "failed to delete successfullt!!");
    }
}
