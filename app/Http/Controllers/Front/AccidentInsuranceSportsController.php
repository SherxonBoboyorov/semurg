<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccidentInsuranceSportsController extends Controller
{
    public function __invoke(Request $request)
    {
        TelegramBotController::storeAccidentSportsMessage($request->all());

        return redirect('/');
    }
}
