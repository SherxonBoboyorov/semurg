<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AutomobileModel;
use App\Models\AutomobilePrice;
use App\Models\Car;
use App\Models\Equipment;
use Illuminate\Http\Request;

class KackoController extends Controller
{
    public function automobileType() {

        $cars = Car::all();
        return view('front.kacko.kacko', compact(
            'cars',
        ));
    }

    public function show($id)
    {
        $car = Car::find($id);
        $carmodels = AutomobileModel::where('car_id', $id)->get();
        return view('front.kacko.kacko2', compact(
            'car',
            'carmodels'
        ));
    }

    public function automobileModel($id)
    {
        $carmodel = AutomobileModel::find($id);
        $equipments = Equipment::where('automobilemodel_id', $id)->get();
        return view('front.kacko.kacko3', compact(
            'carmodel',
            'equipments'
        ));
    }

    public function automobilePrice($id)
    {
        $equipment = Equipment::find($id);
        $automobileprices = AutomobilePrice::where('equipment_id', $id)->get();
        return view('front.kacko.kacko4', compact(
            'equipment',
            'automobileprices'
        ));
    }
}
