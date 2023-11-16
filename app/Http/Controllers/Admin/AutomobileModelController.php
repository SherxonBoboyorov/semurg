<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\AutomobileModel;
use App\Models\Car;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AutomobileModelController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $automobilemodels = AutomobileModel::orderBy('id')->paginate(10);
        return view('admin.automobilemodel.index', [
            'automobilemodels' => $automobilemodels
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $cars = Car::all();
        return view('admin.automobilemodel.create', compact(
            'cars'
        ));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
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
    public function edit(AutomobileModel $automobilemodel)
    {
        $car = Car::all();
        return view('admin.automobilemodel.edit', [
            'car' => $car,
            'automobilemodel' => $automobilemodel
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
