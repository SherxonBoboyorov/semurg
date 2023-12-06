<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOcago;
use App\Http\Requests\Admin\UpdateOcago;
use App\Models\Ocago;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class OcagoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $ocagos = Ocago::orderBy('id')->get();
        return view('admin.ocago.index', compact('ocagos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.ocago.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOcago $request)
    {
        $data = $request->all();

        $data['image'] = Ocago::uploadImage($request);

        if (Ocago::create($data)) {
            return redirect()->route('ocago.index')->with("message", "added successfully!!");
        }
        return redirect()->route('ocago.index')->with("message", "failed to add successfully!!");
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
        $ocago = Ocago::find($id);
        return view('admin.ocago.edit', compact('ocago'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOcago $request, string $id)
    {
        $ocago = Ocago::find($id);

        $data = $request->all();
        $data['image'] = Ocago::updateImage($request, $ocago);

        if ($ocago->update($data)) {
            return redirect()->route('ocago.index')->with('message', "changed successfully!!");
        }
        return redirect()->route('ocago.index')->with('message', "failed to update successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $ocago = Ocago::find($id);

        if (File::exists(public_path() . $ocago->image)) {
            File::delete(public_path() . $ocago->image);
        }

        if ($ocago->delete()) {
            return redirect()->route('ocago.index')->with('message', "deleted successfully");
        }

        return redirect()->route('ocago.index')->with('message', "failed to delete successfullt!!");
    }
}
