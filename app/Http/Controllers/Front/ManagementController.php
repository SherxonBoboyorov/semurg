<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Leadership;
use Illuminate\Http\Request;

class ManagementController extends Controller
{
    public function leadershipManagement()
    {
        $leaderships = Leadership::orderBy('id')->get();
        return view('front.about.leadership-management', compact(
            'leaderships'
        ));
    }
}
