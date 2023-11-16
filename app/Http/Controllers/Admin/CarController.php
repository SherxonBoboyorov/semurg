<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCar;
use App\Http\Requests\Admin\UpdateCar;
use App\Models\Car;
use Illuminate\Http\Request;

class CarController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $cars = Car::orderBy('id')->paginate(10);
        return view('admin.car.index', compact('cars'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.car.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCar $request)
    {
        $data = $request->all();

        if(Car::create($data)) {
            return redirect()->route('car.index')->with('message', "Created successfully!!");
        }
        return redirect()->route('car.index')->with('message', "Failed to create successfully!!");
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
        $car = Car::find($id);
        return view('admin.car.edit', compact('car'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCar $request, string $id)
    {
        $car = Car::find($id);

        $data = $request->all();

        if ($car->update($data)) {
            return redirect()->route('car.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('car.index')->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $car = Car::find($id);

        if ($car->delete()) {
            return redirect()->route('car.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('car.index')->with('message', "failed to delete successfully!!");
    }
}
