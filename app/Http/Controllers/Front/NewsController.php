<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use Illuminate\Http\Request;

class NewsController extends Controller
{
    public function list(){

        $news = Article::orderBy('id')->paginate(12);
        return view('front.press-center.news.list', compact(
            'news'
        ));
    }

    public function show($slug) {
        $new = Article::where('slug_uz', $slug)
            ->orWhere('slug_ru', $slug)
            ->orWhere('slug_en', $slug)
            ->first();

        return view('front.press-center.news.show', compact(
            'new',
        ));

    }

}
