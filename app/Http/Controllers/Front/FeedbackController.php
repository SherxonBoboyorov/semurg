<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Http\Requests\Front\FeedbackRequest;
use App\Mail\FeedbackMail;
use App\Models\Feedback;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class FeedbackController extends Controller
{
    public function __invoke(FeedbackRequest $request)
    {
        $data = $request->all();

        $feedback = Feedback::create($data);

        Mail::to('sherxonbabayar@gmail.com')->send(new FeedbackMail($feedback));

        return back()->with('message', 'Success');

    }
}
