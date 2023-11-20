<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\AutomobileModel;
use App\Models\Car;
use Illuminate\Http\Request;

class KackoController extends Controller
{
    public function kacko() {

        $cars = Car::with('automobilemodels')->orderBy('id')->get();
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
}
