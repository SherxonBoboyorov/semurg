<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateHistory;
use App\Http\Requests\Admin\UpdateHistory;
use App\Models\History;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $histories = History::orderBy('id')->get();
        return view('admin.history.index', compact('histories'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.history.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateHistory $request)
    {
        $data = $request->all();

        if(History::create($data)) {
            return redirect()->route('history.index')->with('message', "Created successfully!!");
        }
        return redirect()->route('history.index')->with('message', "Failed to create successfully!!");
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
        $history = History::find($id);
        return view('admin.history.edit', compact('history'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHistory $request, string $id)
    {
        $history = History::find($id);

        $data = $request->all();

        if ($history->update($data)) {
            return redirect()->route('history.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('history.index')->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $history = History::find($id);

        if ($history->delete()) {
            return redirect()->route('history.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('history.index')->with('message', "failed to delete successfully!!");
    }
}
