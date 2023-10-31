<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Incoming;
use App\Models\International;
use Illuminate\Http\Request;

class IncomingReinsuranceController extends Controller
{
    public function incomingReinsurance()
    {
        $incomings = Incoming::all();
        $partners = International::orderBy('id')->get();
        return view('front.reinsurance.incoming-reinsurance', compact(
            'incomings',
            'partners'       
        ));
    }
}
