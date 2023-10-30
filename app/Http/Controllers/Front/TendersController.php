<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Tender;
use Illuminate\Http\Request;

class TendersController extends Controller
{
    public function list(){

        $tenders = Tender::orderBy('id')->paginate(8);
        return view('front.press-center.tender.list', compact(
            'tenders'
        ));
    }
 
    public function show($slug) {
        $tender = Tender::where('slug_uz', $slug)
        ->orWhere('slug_ru', $slug)
        ->orWhere('slug_en', $slug)
        ->first();

        return view('front.press-center.tender.show', compact(
            'tender',
        ));
    }
}
