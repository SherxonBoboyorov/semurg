<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqsController extends Controller
{
    public function faq()
    {
        $faqs = Faq::orderBy('id')->get();
        return view('front.press-center.FAQ', compact(
            'faqs'
        ));
    }
}
