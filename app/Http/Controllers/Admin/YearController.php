<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateYear;
use App\Http\Requests\Admin\UpdateYear;
use App\Models\AutomobileModel;
use App\Models\AutomobilePrice;
use App\Models\Car;
use App\Models\Equipment;
use App\Models\Year;
use Illuminate\Http\Request;
use PhpParser\Node\Stmt\Return_;

class YearController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $years = Year::orderBy('id')->paginate(10);
        return view('admin.year.index', [
            'years' => $years
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
        $automobileprices = AutomobilePrice::all();
        return view('admin.year.create', compact(
            'cars',
            'automobilemodels',
            'equipments',
            'automobileprices'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateYear $request)
    {
        $data = $request->all();

        if (Year::create($data)) {
            return redirect()->route('year.index')->with("message", "created successfully!!");
        }
        return redirect()->route('year.index')->with("message", "failed to add successfully!!");
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
    public function edit(Year $year)
    {
        $car = Car::all();
        $automobilemodel = AutomobileModel::all();
        $equipment = Equipment::all();
        $automobileprice = AutomobilePrice::all();
        return view('admin.year.edit', [
            'car' => $car,
            'automobilemodel' =>$automobilemodel,
            'equipment' => $equipment,
            'automobileprice' => $automobileprice,
            'year' => $year
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateYear $request, string $id)
    {
        $year = Year::find($id);

        $data = $request->all();

        if ($year->update($data)) {
            return redirect()->route('year.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('year.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $year = Year::find($id);

        if ($year->delete()) {
            return redirect()->route('year.index')->with('message', "deleted successfully");
        }

        return redirect()->route('year.index')->with('message', "failed to delete successfullt!!");
    }
}

