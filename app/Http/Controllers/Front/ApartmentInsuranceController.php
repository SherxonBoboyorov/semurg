<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ApartmentInsuranceController extends Controller
{
    public function __invoke(Request $request)
    {
        TelegramBotController::storeApartmentMessage($request->all());

        return redirect('/');
    }
}
