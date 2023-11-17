<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAutomobilePrice;
use App\Http\Requests\Admin\UpdateAutomobilePrice;
use App\Models\AutomobileModel;
use App\Models\AutomobilePrice;
use App\Models\Car;
use App\Models\Equipment;
use Illuminate\Http\Request;

class AutomobilePriceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $automobileprices = AutomobilePrice::orderBy('id')->paginate(10);
        return view('admin.automobileprice.index', [
            'automobileprices' => $automobileprices
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        $automobilemodels = AutomobileModel::all();
        $equipments = Equipment::all();
        return view('admin.automobileprice.create', compact(
            'cars',
            'automobilemodels',
            'equipments',
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateAutomobilePrice $request)
    {
        $data = $request->all();

        if (AutomobilePrice::create($data)) {
            return redirect()->route('automobileprice.index')->with("message", "created successfully!!");
        }
        return redirect()->route('automobileprice.index')->with("message", "failed to add successfully!!");
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
    public function edit(AutomobilePrice $automobileprice)
    {
        $car = Car::all();
        $automobilemodel = AutomobileModel::all();
        $equipment = Equipment::all();
        return view('admin.automobileprice.edit', [
            'car' => $car,
            'automobilemodel' =>$automobilemodel,
            'equipment' => $equipment,
            'automobileprice' => $automobileprice
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAutomobilePrice $request, string $id)
    {
        $automobileprice = AutomobilePrice::find($id);

        $data = $request->all();

        if ($automobileprice->update($data)) {
            return redirect()->route('automobileprice.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('automobileprice.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $automobileprice = AutomobilePrice::find($id);

        if ($automobileprice->delete()) {
            return redirect()->route('automobileprice.index')->with('message', "deleted successfully");
        }

        return redirect()->route('automobileprice.index')->with('message', "failed to delete successfullt!!");
    }
}
