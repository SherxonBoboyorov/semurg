<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\KaskoAutoEquipmentRequest;
use App\Models\KaskoAutoEquipment;
use App\Models\KaskoAutoModel;
use Illuminate\Http\Request;

class KaskoAutoEquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $autoEquipments = KaskoAutoEquipment::orderByDesc('created_at')->paginate(20);
        return view('admin.kasko.auto_equipments.list', compact('autoEquipments'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $models = KaskoAutoModel::with('brand')->get();
        return view('admin.kasko.auto_equipments.create', compact('models'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(KaskoAutoEquipmentRequest $request)
    {
        KaskoAutoEquipment::create($request->all());
        return redirect()->route('kasko_auto_equipment.index')->with('message', 'Equipment created succesfully');
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
        $models = KaskoAutoModel::with('brand')->get();

        return view('admin.kasko.auto_equipments.edit', [
            'models' => $models,
            'equipment' => KaskoAutoEquipment::find($id)
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(KaskoAutoEquipmentRequest $request, string $id)
    {
        $equipment = KaskoAutoEquipment::find($id);
        $equipment->update($request->all());

        return redirect()->route('kasko_auto_equipment.index')->with('message', 'Equipment updated successfully');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipment = KaskoAutoEquipment::find($id);
        $equipment->delete();

        return redirect()->route('kasko_auto_equipment.index')->with('message', 'Equipment deleted successfully');
    }
}
