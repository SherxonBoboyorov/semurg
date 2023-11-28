<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateHeaderKacko;
use App\Http\Requests\Admin\UpdateHeaderKacko;
use App\Models\HeaderKacko;
use Illuminate\Http\Request;

class HeaderKackoController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $headerkackos = HeaderKacko::orderBy('id')->get();
        return view('admin.headerkacko.index', compact('headerkackos'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.headerkacko.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateHeaderKacko $request)
    {
        $data = $request->all();

        $data['image'] = HeaderKacko::uploadImage($request);
        $data['icon'] = HeaderKacko::uploadIcon($request);

        if (HeaderKacko::create($data)) {
            return redirect()->route('headerkacko.index')->with('message', "added successfully!!");
        }
        return redirect()->route('headerkacko.index')->with('message', "failed to add successfully!!");
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
        $headerkacko = HeaderKacko::find($id);
        return view('admin.headerkacko.edit', compact('headerkacko'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHeaderKacko $request, string $id)
    {
        if (!HeaderKacko::find($id)) {
            return redirect()->route('headerkacko.index')->with('message', "not fount");
        }

        $headerkacko = HeaderKacko::find($id);

        $data = $request->all();
        $data['image'] = HeaderKacko::updateImage($request, $headerkacko);
        $data['icon'] = HeaderKacko::updateIcon($request, $headerkacko);

        if ($headerkacko->update($data)) {
            return redirect()->route('headerkacko.index')->with('message', "changed successfully!!");
        }
        return redirect()->route('headerkacko.index')->with('message', "failed to update successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HeaderKacko $headerkacko)
    {
        $headerkacko->delete();

        if ($headerkacko->delete()) {
            return redirect()->route('headerkacko.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('headerkacko.index')->with('message', "failed to delete successfully!!");
    }
}
