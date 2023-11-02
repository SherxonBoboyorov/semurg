<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class KackoController extends Controller
{
    public function kacko() {
        return view('front.kacko.kacko-form');
    }
}
