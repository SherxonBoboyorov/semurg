<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\CalculationResult;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

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
    public function store(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'type' => 'required|max:255',
        ])->validate();

        $car = Car::create([
            'type' => $input['type'],
        ]);

        if (isset($input['attributes']) && $input['attributes'] !== null && json_decode($input['attributes'], true)) {
            foreach(json_decode($input['attributes'], true) as $attr) {
                CalculationResult::create([
                    'car_id' => $car->id,
                    'key' => $attr['attr'],
                    'value' => $attr['val_attr']
                ]);
            }
        }

        return redirect()->route('car.index')->with('message', "created successfully!!");
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
    public function update(Request $request, string $id)
    {
        $input = $request->all();

        Validator::make($input, [
            'type' => 'required|max:255',
        ])->validate();

        $car = Car::find($id);

        $car->type = $input['type'];

        if (isset($input['attributes']) && $input['attributes'] !== null && json_decode($input['attributes'], true)) {
            foreach(json_decode($input['attributes'], true) as $attr) {
                CalculationResult::create([
                    'car_id' => $car->id,
                    'key' => $attr['key'],
                    'value' => $attr['value']
                ]);
            }
        }

        return redirect()->route('car.index')->with('message', "updated successfully!!");
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
    }
}
