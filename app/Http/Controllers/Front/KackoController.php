<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Car;
use Illuminate\Http\Request;

class KackoController extends Controller
{
    public function kacko() {

        $cars = Car::orderBy('id')->get();

        return view('front.kacko.kacko', compact('cars'));
    }

    public function show($id)
    {
        $car = Car::find($id);
        return view('front.kacko.kacko', compact(
            'car'
        ));
    }
}
