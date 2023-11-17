<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
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
    public function edit(string $id)
    {
        //
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
