<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Structure;
use Illuminate\Http\Request;

class StracturesController extends Controller
{
    public function structureCompany()
    {
        $stracturs = Structure::orderBy('id')->get();
        return view('front.about.structure-company', compact(
            'stracturs'
        ));
    }
}
