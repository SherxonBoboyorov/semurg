<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Vacancy;
use Illuminate\Http\Request;

class VacancysController extends Controller
{
    public function vacancies()
    {
        $vacancies = Vacancy::orderBy('id')->get();
        return view('front.press-center.vacancies', compact(
            'vacancies'
        ));
    }
}
