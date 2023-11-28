<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Leadership;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Database\Eloquent\Builder;

class SearchController extends Controller
{
    public function search(Request $request)
    {
        $searchTerm = $request->get('price');

        $news = Article::query()
            ->where('title_' . app()->getLocale(), 'LIKE', "%{$searchTerm}%")
            ->orWhere('content_' . app()->getLocale(), 'LIKE', "%{$searchTerm}%")
            ->get();

        $leaderships = Leadership::query()
            ->where('name_' . app()->getLocale(), 'LIKE', "%{$searchTerm}%")
            ->orWhere('content_' . app()->getLocale(), 'LIKE', "%{$searchTerm}%")
            ->get();

        $tenders = Tender::query()
            ->where('title_' . app()->getLocale(), 'LIKE', "%{$searchTerm}%")
            ->orWhere('content_' . app()->getLocale(), 'LIKE', "%{$searchTerm}%")
            ->get();

        return view('front.search', compact(
            'searchTerm',
            'news',
            'leaderships',
            'tenders'
        ));
    }
}
