<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\International;
use App\Models\Outgoing;
use Illuminate\Http\Request;

class OutgoingReinsuranceController extends Controller
{
    public function outgoingReinsurance()
    {
        $outgoings = Outgoing::all();
        $partners = International::orderBy('id')->get();
        return view('front.reinsurance.outgoing-reinsurance', compact(
            'outgoings',
            'partners'       
        ));
    }
}
