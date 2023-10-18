<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateArticle;
use App\Http\Requests\Admin\UpdateArticle;
use App\Models\Article;
use Illuminate\Http\Request;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\File;

class ArticleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $articles = Article::orderBy('id')->paginate(10);
        return view('admin.article.index', compact('articles'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.article.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateArticle $request)
    {
        $data = $request->all();
    
        $data['image'] = Article::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if (Article::create($data)) {
            return redirect()->route('article.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('article.index')->with('message', 'failed to add successfully!!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $article = Article::find($id);
        return view('admin.article.edit', compact('article'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateArticle $request, string $id)
    {
        $article = Article::find($id);

        $data = $request->all();
        $data['image'] = Article::updateImage($request, $article);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($article->update($data)) {
            return redirect()->route('article.index')->with('message', "update successfully!!");
        }
        return redirect()->route('article.index')->with('message', "failed to add successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Article::find($id)) {
            return redirect()->route('article.index')->with('message', "not found");
        }

        $article = Article::find($id);

        if (File::exists(public_path() . $article->image)) {
            File::delete(public_path() . $article->image);
        }

        if ($article->delete()) {
            return redirect()->route('article.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('article.index')->with('message', "failed to delete successfully!!");
    }
}
