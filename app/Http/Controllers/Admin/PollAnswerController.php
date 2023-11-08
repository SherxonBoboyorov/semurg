<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePollAnswer;
use App\Http\Requests\Admin\UpdatePollAnswer;
use App\Models\Poll;
use App\Models\PollAnswer;
use Illuminate\Http\Request;

class PollAnswerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $pollanswers = PollAnswer::orderBy('id')->paginate(10);
        return view('admin.pollanswer.index', [
            'pollanswers' => $pollanswers
        ]);
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $polls = Poll::all();
        return view('admin.pollanswer.create', compact('polls'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreatePollAnswer $request)
    {
        $data = $request->all();

        if (PollAnswer::create($data)) {
            return redirect()->route('pollanswer.index')->with("message", "created successfully!!");
        }
        return redirect()->route('pollanswer.index')->with("message", "failed to add successfully!!");
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
    public function edit(PollAnswer $pollanswer)
    {
        $poll = Poll::all();
        return view('admin.pollanswer.edit', [
            'poll' => $poll,
            'pollanswer' => $pollanswer
        ]);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePollAnswer $request, string $id)
    {
        $pollanswer = PollAnswer::find($id);

        $data = $request->all();

        if ($pollanswer->update($data)) {
            return redirect()->route('pollanswer.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('pollanswer.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $pollanswer = PollAnswer::find($id);

        if ($pollanswer->delete()) {
            return redirect()->route('pollanswer.index')->with('message', "deleted successfully");
        }

        return redirect()->route('pollanswer.index')->with('message', "failed to delete successfullt!!");
    }
}
