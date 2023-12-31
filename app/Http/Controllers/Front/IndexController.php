<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Carousel;
use App\Models\Client;
use App\Models\InsuranceCategory;
use App\Models\InsuranceProduct;
use App\Models\Ocago;
use App\Models\Page;
use App\Models\Slider;
use App\Models\Useful;
use Illuminate\Http\Request;

class IndexController extends Controller
{
    public function homepage()
    {
        $sliders = Slider::orderBy('id')->get();
        $ocagos = Ocago::take(1)->get();
        $pages = Page::all();
        $insurancecategories = InsuranceCategory::all();
        $insuranceproducts = InsuranceProduct::where('order', 1)->get();
        $news = Article::orderBy('created_at', 'DESC')->paginate(3);
        $carousels = Carousel::orderBy('id')->get();
        $usefuls = Useful::orderBy('id')->get();
        $clients = Client::orderBy('id')->get();

        return view('front.index', compact(
            'sliders',
            'ocagos',
            'pages',
            'insurancecategories',
            'insuranceproducts',
            'news',
            'carousels',
            'usefuls',
            'clients'
        ));
    }
}
