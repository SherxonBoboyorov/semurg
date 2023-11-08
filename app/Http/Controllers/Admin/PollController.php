<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreatePoll;
use App\Http\Requests\Admin\UpdatePoll;
use App\Models\Poll;
use App\Models\PollAnswer;
use Illuminate\Http\JsonResponse;
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
    public function store(CreatePoll $request)
    {
        $data = $request->all();

        if (Poll::create($data)) {
            return redirect()
                   ->route('poll.index')
                   ->with('message', 'added successfully!!');
        }
        return redirect()
               ->route('poll.index')
               ->with('message', 'failed to add successfully!!');
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
        $poll = Poll::find($id);
        return view('admin.poll.edit', compact('poll'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdatePoll $request, string $id)
    {
        $poll = Poll::find($id);

        $data = $request->all();

        if ($poll->update($data)) {
            return redirect()
                   ->route('poll.index')
                   ->with('message', 'updated successfully!!');
        }

        return redirect()
               ->route('poll.index')
               ->with('message', 'failed to update successfully!!');
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
