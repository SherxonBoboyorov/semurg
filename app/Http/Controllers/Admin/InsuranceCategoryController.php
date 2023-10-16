<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateInsuranceCategory;
use App\Http\Requests\Admin\UpdateInsuranceCategory;
use App\Models\InsuranceCategory;
use Illuminate\Http\Request;

class InsuranceCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insurancecategories = InsuranceCategory::orderBy('id')->get();
        return view('admin.insurancecategory.index', compact('insurancecategories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view('admin.insurancecategory.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateInsuranceCategory  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInsuranceCategory $request)
    {
        $data = $request->all();

        if (InsuranceCategory::create($data)) {
            return redirect()
                   ->route('insurancecategory.index')
                   ->with('message', 'added successfully!!');
        }
        return redirect()
               ->route('insurancecategory.index')
               ->with('message', 'failed to add successfully!!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $insurancecategory = InsuranceCategory::find($id);
        return view('admin.insurancecategory.edit', compact(
            'insurancecategory'
        ));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateInsuranceCategory  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsuranceCategory $request, $id)
    {
        $insurancecategory = InsuranceCategory::find($id);

        $data = $request->all();

        if ($insurancecategory->update($data)) {
            return redirect()
                   ->route('insurancecategory.index')
                   ->with('message', 'updated successfully!!');
        }

        return redirect()
               ->route('insurancecategory.index')
               ->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $insurancecategory = InsuranceCategory::find($id);

        if ($insurancecategory->delete()) {
            return redirect()
                   ->route('insurancecategory.index')
                   ->with('message', "deleted successfully!!");
        }

        return redirect()
               ->route('insurancecategory.index')
               ->with('message', "failed to delete successfully!!");
    }
}
