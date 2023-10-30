<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HistoryCompanysController extends Controller
{
    public function historyCompany()
    {
        return view('front.about.history-company');
    }
}
