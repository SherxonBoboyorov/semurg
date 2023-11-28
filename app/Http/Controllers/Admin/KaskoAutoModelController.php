<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KaskoAutoModelRequest;
use App\Models\KaskoAutoBrand;
use App\Models\KaskoAutoModel;
use Illuminate\Http\Request;

class KaskoAutoModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autoModels = KaskoAutoModel::orderByDesc('created_at')->paginate(20);
        return view('admin.kasko.auto_models.list', compact('autoModels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $autoBrands = KaskoAutoBrand::orderByDesc('created_at')->get();
        return view('admin.kasko.auto_models.create', compact('autoBrands'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KaskoAutoModelRequest $request)
    {
        KaskoAutoModel::create($request->all());
        return redirect()->route('kasko_auto_model.index')->with('message', 'Auto model created successfully');
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
        $autoBrands = KaskoAutoBrand::orderByDesc('created_at')->get();
        
        return view('admin.kasko.auto_models.edit', [
            'autoBrands' => $autoBrands,
            'model' => KaskoAutoModel::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KaskoAutoModelRequest $request, string $id)
    {
        $model = KaskoAutoModel::find($id);
        $model->update($request->all());

        return redirect()->route('kasko_auto_model.index')->with('message', 'Model updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $model = KaskoAutoModel::find($id);
        $model->delete();

        return redirect()->route('kasko_auto_model.index')->with('message', 'Model deleted successfully');
    }
}
