<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateAutomobileModel;
use App\Http\Requests\Admin\UpdateAutomobileModel;
use App\Models\AutomobileModel;
use App\Models\Car;
use Illuminate\Http\Request;

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
    public function store(CreateAutomobileModel $request)
    {
        $data = $request->all();

        if (AutomobileModel::create($data)) {
            return redirect()->route('automobilemodel.index')->with("message", "created successfully!!");
        }
        return redirect()->route('automobilemodel.index')->with("message", "failed to add successfully!!");
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
    public function update(UpdateAutomobileModel $request, string $id)
    {
        $automobilemodel = AutomobileModel::find($id);

        $data = $request->all();

        if ($automobilemodel->update($data)) {
            return redirect()->route('automobilemodel.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('automobilemodel.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $automobilemodel = AutomobileModel::find($id);

        if ($automobilemodel->delete()) {
            return redirect()->route('automobilemodel.index')->with('message', "deleted successfully");
        }

        return redirect()->route('automobilemodel.index')->with('message', "failed to delete successfullt!!");
    }
}
