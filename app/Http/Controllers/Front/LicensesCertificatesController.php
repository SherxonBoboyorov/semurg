<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\LicensesCategory;
use App\Models\LicensesDocument;
use Illuminate\Http\Request;

class LicensesCertificatesController extends Controller
{
    public function licensesCertificates()
    {

        $licensesdocuments = LicensesDocument::orderBy('id')->get();
        $licensescategories = LicensesCategory::with('licensesdocuments')->get();
        return view('front.about.licenses-certificates', compact(
            'licensescategories',
            'licensesdocuments'
        ));
    }
}
