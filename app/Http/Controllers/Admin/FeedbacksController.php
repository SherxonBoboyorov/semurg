<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Feedback;
use Illuminate\Http\Request;

class FeedbacksController extends Controller
{
    public function index()
    {
        $feedbacks = Feedback::orderBy('id')->paginate(10);
        return view('admin.feedback.index', compact(
            'feedbacks'
        ));
    }

    public function show($id)
      {
            $feedback = Feedback::find($id);
            return view('admin.feedback.show', compact('feedback'));
      }

     public function destroy($id)
        {
            $feedback = Feedback::find($id);
            $feedback->delete();
            return redirect()->route('feedback.index')->with('message', "deleted successfully");
        }


}
