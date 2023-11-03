<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Leadership;
use App\Models\Tender;
use Illuminate\Http\Request;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        if(strlen($request->phrase) < 0) {
            return redirect()->route('/');
        }
        $news = Article::whereLike(['title_uz', 'title_ru', 'title_en'], $request->phrase)->get();
        $leaderships = Leadership::whereLike(['name_uz', 'name_ru', 'name_en'], $request->phrase)->get();
        $tenders = Tender::whereLike(['title_uz', 'title_ru', 'title_en'], $request->phrase)->get();

        return view('front.search', compact(
            'articles',
            'leaderships',
            'tenders'
        ));
    }
}
