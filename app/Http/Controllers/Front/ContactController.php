<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\ContactList;
use Illuminate\Http\Request;

class ContactController extends Controller
{
    public function contact()
    {
        $contacts = ContactList::orderBy('id')->get();
        return view('front.contact', compact(
            'contacts'
        ));
    }
}
