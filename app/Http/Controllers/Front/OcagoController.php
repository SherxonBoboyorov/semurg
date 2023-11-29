<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class OcagoController extends Controller
{
    public function ocago()
    {
        return view('front.kasko.ocago');
    }

    public function accidentInsurance()
    {
        return view('front.kasko.accident-insurance');
    }

    public function accidentInsuranceSports()
    {
        return view('front.kasko.accident-insurance-sports');
    }

    public function propertyInsurance()
    {
        return view('front.kasko.property-insurance');
    }
}
