<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateInsuranceProduct;
use App\Http\Requests\Admin\UpdateInsuranceProduct;
use App\Models\InsuranceCategory;
use App\Models\InsuranceProduct;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class InsuranceProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $insuranceproducts = InsuranceProduct::orderBy('id')->paginate(10);
        return view('admin.insuranceproduct.index',[
            'insuranceproducts' => $insuranceproducts
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $insurancecategories = InsuranceCategory::all();
        return view('admin.insuranceproduct.create', compact('insurancecategories'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  App\Http\Requests\Admin\CreateInsuranceProduct  $request
     * @return \Illuminate\Http\Response
     */
    public function store(CreateInsuranceProduct $request)
    {
        $data = $request->all();

        $data['image'] = InsuranceProduct::uploadImage($request);
        // $data['icon'] = InsuranceProduct::uploadIcon($request);

        if (InsuranceProduct::create($data)) {
            return redirect()->route('insuranceproduct.index')->with('message', "added successfully!!");
        }
        return redirect()->route('insuranceproduct.index')->with('message', "failed to add successfully!!");
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
    public function edit(InsuranceProduct $insuranceproduct)
    {
        $insurancecategory = InsuranceCategory::all();
        return view('admin.insuranceproduct.edit', [
            'insurancecategory' => $insurancecategory,
            'insuranceproduct' => $insuranceproduct
        ]);
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  App\Http\Requests\Admin\UpdateInsuranceProduct $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateInsuranceProduct $request, $id)
    {
        if (!InsuranceProduct::find($id)) {
            return redirect()->route('insuranceproduct.index')->with('message', "not fount");
        }

        $insuranceproduct = InsuranceProduct::find($id);

        $data = $request->all();
        $data['image'] = InsuranceProduct::updateImage($request, $insuranceproduct);
        // $data['icon'] = InsuranceProduct::updateIcon($request, $insuranceproduct);

        if ($insuranceproduct->update($data)) {
            return redirect()->route('insuranceproduct.index')->with('message', "changed successfully!!");
        }
        return redirect()->route('insuranceproduct.index')->with('message', "failed to update successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy(InsuranceProduct $insuranceproduct)
    {

        $insuranceproduct->delete();

        if ($insuranceproduct->delete()) {
            return redirect()->route('insuranceproduct.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('insuranceproduct.index')->with('message', "failed to delete successfully!!");
    }
}
