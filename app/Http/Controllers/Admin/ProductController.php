<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateProduct;
use App\Http\Requests\Admin\UpdateProduct;
use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $products = Product::orderBy('id')->paginate(10);
        return view('admin.product.index', [
            'products' => $products
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $categories = Category::all();
        return view('admin.product.create', compact('categories'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateProduct $request)
    {
        $data = $request->all();

        $data['image'] = Product::uploadImage($request);

        if (Product::create($data)) {
            return redirect()->route('product.index')->with("message", "created successfully!!");
        }
        return redirect()->route('product.index')->with("message", "failed to add successfully!!");
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
    public function edit(Product $product)
    {
        $category = Category::all();
        return view('admin.product.edit', [
            'category' => $category,
            'product' => $product
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateProduct $request, string $id)
    {
        $product = Product::find($id);

        $data = $request->all();
        $data['image'] = Product::updateImage($request, $product);

        if ($product->update($data)) {
            return redirect()->route('product.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('product.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $product = Product::find($id);

        if (File::exists(public_path() . $product->image)) {
            File::delete(public_path() . $product->image);
        }

        if ($product->delete()) {
            return redirect()->route('product.index')->with('message', "deleted successfully");
        }

        return redirect()->route('product.index')->with('message', "failed to delete successfullt!!");
    }
}
