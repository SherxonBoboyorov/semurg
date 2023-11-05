<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Leadership;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            'news',
            'leaderships',
            'tenders'
        ));
        
        // $search = request()->query('search');

        // if($search) {
        //     $news = Article::where('title_uz', 'title_ru', 'title_en', 'LIKE', "%{$search}%")->get();
        //     $leaderships = Leadership::where('name_uz', 'name_ru', 'name_en', 'LIKE', "%{$search}%")->get();
        //     $tenders = Tender::where('title_uz', 'title_ru', 'title_en', 'LIKE', "%{$search}%")->get(); 
        // } else {
        //     $news = Article::paginate(1);
        //     $leaderships = Leadership::paginate(1);
        //     $tenders = Tender::paginate(1);
        // }
    
        // return view('front.search', compact(
        //     'search',
        //     'news',
        //     'leaderships',
        //     'tenders'
        // ));
    }
}
