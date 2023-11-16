<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateEquipment;
use App\Http\Requests\Admin\UpdateEquipment;
use App\Models\AutomobileModel;
use App\Models\Car;
use App\Models\Equipment;
use Illuminate\Http\Request;

class EquipmentController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $equipments = Equipment::orderBy('id')->paginate(10);
        return view('admin.equipment.index', [
            'equipments' => $equipments
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        $automobilemodels = AutomobileModel::all();
        return view('admin.equipment.create', compact(
            'cars',
            'automobilemodels'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateEquipment $request)
    {
        $data = $request->all();

        if (Equipment::create($data)) {
            return redirect()->route('equipment.index')->with("message", "created successfully!!");
        }
        return redirect()->route('equipment.index')->with("message", "failed to add successfully!!");
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
    public function edit(Equipment $equipment)
    {
        $car = Car::all();
        $automobilemodel = AutomobileModel::all();
        return view('admin.equipment.edit', [
            'car' => $car,
            'automobilemodel' =>$automobilemodel,
            'equipment' => $equipment
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateEquipment $request, string $id)
    {
        $equipment = Equipment::find($id);

        $data = $request->all();

        if ($equipment->update($data)) {
            return redirect()->route('equipment.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('equipment.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $equipment = Equipment::find($id);

        if ($equipment->delete()) {
            return redirect()->route('equipment.index')->with('message', "deleted successfully");
        }

        return redirect()->route('equipment.index')->with('message', "failed to delete successfullt!!");
    }
}
