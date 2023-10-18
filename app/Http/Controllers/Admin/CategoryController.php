<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCategory;
use App\Http\Requests\Admin\UpdateCategory;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
      /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $categories = Category::orderBy('id')->get();
        return view('admin.category.index', compact('categories'));
    }

     /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.category.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCategory $request)
    {
        $data = $request->all();

        if (Category::create($data)) {
            return redirect()
                   ->route('category.index')
                   ->with('message', 'added successfully!!');
        }
        return redirect()
               ->route('category.index')
               ->with('message', 'failed to add successfully!!');
    }

    /**
     * Display the specified resource.
     *
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $category = Category::find($id);
        return view('admin.category.edit', compact(
            'category'
        ));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCategory $request, $id)
    {
        $category = Category::find($id);

        $data = $request->all();

        if ($category->update($data)) {
            return redirect()
                   ->route('category.index')
                   ->with('message', 'updated successfully!!');
        }

        return redirect()
               ->route('category.index')
               ->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        $category = Category::find($id);

        if ($category->delete()) {
            return redirect()
                   ->route('category.index')
                   ->with('message', "deleted successfully!!");
        }

        return redirect()
               ->route('category.index')
               ->with('message', "failed to delete successfully!!");
    }
}
