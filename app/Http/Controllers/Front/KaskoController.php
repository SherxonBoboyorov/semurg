<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\KaskoAutoBrand;
use App\Models\KaskoAutoEquipment;
use App\Models\KaskoAutoModel;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Number;

class KaskoController extends Controller
{
    public function kaskoStart() 
    {
        $brands = KaskoAutoBrand::orderByDesc('created_at')->get();
        $models = KaskoAutoModel::all();
        $equipments = KaskoAutoEquipment::all();

        return view('front.kasko.kasko', [
            'brands' => $brands,
            'models' => $models,
            'equipments' => $equipments
        ]);
    }

    public function calculationAmount(Request $request): JsonResponse
    {
        $kaskoEquipment = KaskoAutoEquipment::find($request->input('equipment_id'));
        $amountLiability = $kaskoEquipment->price - ($kaskoEquipment->price / 100 * ((date('Y') - $request->input('year')) * 10));
        $insurancePremium = $amountLiability / 100 * $kaskoEquipment->tariff;
        
        return response()->json([
            'amountLiability' => Number::currency($amountLiability, in: "UZS", locale: "uz"),
            'insurancePremium' => Number::currency($insurancePremium, in: "UZS", locale: "uz")
        ]);
    }

    public function registerPolicy() 
    {
        return view('front.kasko.kacko-form');
    }
}
