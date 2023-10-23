<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateTender;
use App\Http\Requests\Admin\UpdateTender;
use App\Models\Tender;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Str;

class TenderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $tenders = Tender::orderBy('id')->paginate(10);
        return view('admin.tender.index', compact('tenders'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.tender.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateTender $request)
    {
        $data = $request->all();
    
        $data['image'] = Tender::uploadImage($request);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if (Tender::create($data)) {
            return redirect()->route('tender.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('tender.index')->with('message', 'failed to add successfully!!');
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
        $tender = Tender::find($id);
        return view('admin.tender.edit', compact('tender'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateTender $request, string $id)
    {
        $tender = Tender::find($id);

        $data = $request->all();
        $data['image'] = Tender::updateImage($request, $tender);
        $data['slug_ru'] = Str::slug($request->title_ru, '-', 'ru');
        $data['slug_uz'] = Str::slug($request->title_uz, '-', 'uz');
        $data['slug_en'] = Str::slug($request->title_en, '-', 'en');

        if ($tender->update($data)) {
            return redirect()->route('tender.index')->with('message', "update successfully!!");
        }
        return redirect()->route('tender.index')->with('message', "failed to add successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Tender::find($id)) {
            return redirect()->route('tender.index')->with('message', "not found");
        }

        $tender = Tender::find($id);

        if (File::exists(public_path() . $tender->image)) {
            File::delete(public_path() . $tender->image);
        }

        if ($tender->delete()) {
            return redirect()->route('tender.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('tender.index')->with('message', "failed to delete successfully!!");
    }
}
