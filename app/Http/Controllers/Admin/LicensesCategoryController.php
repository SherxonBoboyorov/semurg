<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLicensesCategory;
use App\Http\Requests\Admin\UpdateLicensesCategory;
use App\Models\LicensesCategory;
use Illuminate\Http\Request;

class LicensesCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licensescategories = LicensesCategory::orderBy('id')->get();
        return view('admin.licensescategory.index', compact('licensescategories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.licensescategory.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLicensesCategory $request)
    {
        $data = $request->all();

        if (LicensesCategory::create($data)) {
            return redirect()
                   ->route('licensescategory.index')
                   ->with('message', 'added successfully!!');
        }
        return redirect()
               ->route('licensescategory.index')
               ->with('message', 'failed to add successfully!!');
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
        $licensescategory = LicensesCategory::find($id);
        return view('admin.licensescategory.edit', compact('licensescategory'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLicensesCategory $request, string $id)
    {
        $licensescategory = LicensesCategory::find($id);

        $data = $request->all();

        if ($licensescategory->update($data)) {
            return redirect()
                   ->route('licensescategory.index')
                   ->with('message', 'updated successfully!!');
        }

        return redirect()
               ->route('licensescategory.index')
               ->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $licensescategory = LicensesCategory::find($id);

        if ($licensescategory->delete()) {
            return redirect()
                   ->route('licensescategory.index')
                   ->with('message', "deleted successfully!!");
        }

        return redirect()
               ->route('licensescategory.index')
               ->with('message', "failed to delete successfully!!");
    }
}
