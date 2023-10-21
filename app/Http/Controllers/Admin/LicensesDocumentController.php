<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLicensesDocument;
use App\Http\Requests\Admin\UpdateLicensesDocument;
use App\Models\LicensesCategory;
use App\Models\LicensesDocument;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LicensesDocumentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $licensesdocuments = LicensesDocument::orderBy('id')->get();
        return view('admin.licensesdocument.index', [
            'licensesdocuments' => $licensesdocuments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $licensescategories = LicensesCategory::all();
        return view('admin.licensesdocument.create', compact('licensescategories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLicensesDocument $request)
    {
        $data = $request->all();

        $data['image'] = LicensesDocument::uploadImage($request);

        if (LicensesDocument::create($data)) {
            return redirect()->route('licensesdocument.index')->with("message", "created successfully!!");
        }
        return redirect()->route('licensesdocument.index')->with("message", "failed to add successfully!!");
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
    public function edit(LicensesDocument $licensesdocument)
    {
        $licensescategory = LicensesCategory::all();
        return view('admin.licensesdocument.edit', [
            'licensescategory' => $licensescategory,
            'licensesdocument' => $licensesdocument
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLicensesDocument $request, string $id)
    {
        $licensesdocument = LicensesDocument::find($id);

        $data = $request->all();
        $data['image'] = LicensesDocument::updateImage($request, $licensesdocument);

        if ($licensesdocument->update($data)) {
            return redirect()->route('licensesdocument.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('licensesdocument.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $licensesdocument = LicensesDocument::find($id);

        if (File::exists(public_path() . $licensesdocument->image)) {
            File::delete(public_path() . $licensesdocument->image);
        }

        if ($licensesdocument->delete()) {
            return redirect()->route('licensesdocument.index')->with('message', "deleted successfully");
        }

        return redirect()->route('licensesdocument.index')->with('message', "failed to delete successfullt!!");
    }
}
