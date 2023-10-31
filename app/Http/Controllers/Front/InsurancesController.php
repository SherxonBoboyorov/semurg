<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\InsuranceCategory;
use App\Models\InsuranceProduct;
use Illuminate\Http\Request;

class InsurancesController extends Controller
{
    public function insurancesProduct()
    {
        $insuranceproducts = InsuranceProduct::all();
        $insurancecategories = InsuranceCategory::with('insuranceproducts')->orderBy('id')->get();

        return view('front.insurance-products.for-individuals', [
            'insuranceproducts' => $insuranceproducts,
            'insurancecategories' => $insurancecategories,
        ]);
    }

    // public function show($id)
    // {
    //     $insuranceproduct = InsuranceProduct::find($id);
    //     return view('front.insurance-products.for-individuals_in', compact(
    //         'insuranceproduct',
    //     ));
    // }
}
