<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;

class DocumentsController extends Controller
{
    public function document($id)
    {
        $categories = Category::orderBy('id')->get();
        $documents = Product::where('category_id', $id)->orderBy('id')->get();

        return view('front.shareholders-investors.affiliates', compact(
            'categories',
            'documents',
            'id'
        ));
    }
}
