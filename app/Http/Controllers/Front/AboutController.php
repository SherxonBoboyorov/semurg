<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Director;
use App\Models\Page;
use Illuminate\Http\Request;

class AboutController extends Controller
{
    public function about()
    {
        $directors = Director::all();
        $pages = Page::all();
        return view('front.about.about-us', compact(
            'directors',
            'pages'
        ));
    }
}
