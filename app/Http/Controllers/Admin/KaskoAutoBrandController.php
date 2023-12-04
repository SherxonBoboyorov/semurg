<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KaskoAutoBrandRequest;
use App\Models\KaskoAutoBrand;
use Illuminate\Http\Request;

class KaskoAutoBrandController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autoBrands = KaskoAutoBrand::orderByDesc('created_at')->paginate(20);
        return view('admin.kasko.auto_brands.list', compact('autoBrands'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.kasko.auto_brands.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KaskoAutoBrandRequest $request)
    {
        KaskoAutoBrand::create($request->all());

        return redirect()->route('kasko_auto_brand.index')->with('message', "Brand created successfully");
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
        $brand = KaskoAutoBrand::find($id);

        return view('admin.kasko.auto_brands.edit', compact('brand'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KaskoAutoBrandRequest $request, string $id)
    {
        $brand = KaskoAutoBrand::find($id);
        $brand->update($request->all());

        return redirect()->route('kasko_auto_brand.index')->with('message', "Brand updated successfully");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $brand = KaskoAutoBrand::find($id);
        $brand->delete();

        return redirect()->route('kasko_auto_brand.index')->with('message', "Brand deleted successfully");
    }
}
