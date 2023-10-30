<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumsController extends Controller
{
    public function forum()
    {
        $forums = Forum::orderBy('id')->get();
        return view('front.press-center.forum', compact(
            'forums'
        ));
    }
}
