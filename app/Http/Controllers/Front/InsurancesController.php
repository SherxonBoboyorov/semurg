<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\InsuranceCategory;
use App\Models\InsuranceProduct;
use Illuminate\Http\Request;

class InsurancesController extends Controller
{
    public function insurancesProduct($id)
    {
        $menu = InsuranceCategory::where('id', $id)->get();
        $insurancecategories = InsuranceCategory::all();
        $insuranceproducts = InsuranceProduct::where('insurancecategory_id', $id)->get();

        return view('front.insurance-products.for-individuals', compact(
            'insurancecategories',
            'insuranceproducts',
            'menu',
            'id'
        ));
    }

    public function show($id)
    {
        $insuranceproduct = InsuranceProduct::find($id);
        return view('front.insurance-products.for-individuals_in', compact(
            'insuranceproduct',
        ));
    }
}
