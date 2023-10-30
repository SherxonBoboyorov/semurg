<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InsurancesController extends Controller
{
    public function insurancesProduct()
    {
        return view('front.insurance-products.for-individuals');
    }
}
