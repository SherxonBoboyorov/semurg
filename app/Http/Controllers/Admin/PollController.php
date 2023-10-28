<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Poll;
use App\Models\PollAnswer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class PollController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $polls = Poll::orderBy('id')->get();
        return view('admin.poll.index', compact('polls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.poll.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $input = $request->all();

        Validator::make($input, [
            'question_uz' => 'required|max:255',
            'question_ru' => 'required|max:255',
            'question_en' => 'required|max:255',

        ])->validate();

        $poll = Poll::create([
            'question_uz' => $input['question_uz'],
            'question_ru' => $input['question_ru'],
            'question_en' => $input['question_en'],
        ]);

        if (isset($input['answers']) && $input['answers'] !== null && json_decode($input['answers'], true)) {
            foreach(json_decode($input['answers'], true) as $answer) {
                PollAnswer::create([
                    'poll_id' => $poll->id,
                    'answer_uz' => $answer['answer_uz'],
                    'answer_ru' => $answer['answer_ru'],
                    'answer_en' => $answer['answer_en'],
                ]);
            }
        }

        dd($request->all());

        return redirect()->route('poll.index')->with('message', "Created successfully!!");

    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $poll = Poll::find($id);

        if ($poll->delete()) {
            return redirect()->route('poll.index')->with('message', "Deleted successfully!!");
        }
        return redirect()->route('poll.index')->with('message', "Failed to delete successfully!!");
    }
}
