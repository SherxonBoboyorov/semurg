<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AccidentInsuranceController extends Controller
{
    public function __invoke(Request $request)
    {
        TelegramBotController::storeAccidentMessage($request->all());

        return redirect('/');
    }
}
