<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryCompanysController extends Controller
{
    public function historyCompany(History $years)
    {
        return view('front.about.history-company', [
            'years' => $years,
            'list' => History::orderBy('id')->get(),
        ]);      
    }
}
