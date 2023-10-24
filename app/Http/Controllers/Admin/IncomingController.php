<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateIncoming;
use App\Http\Requests\Admin\UpdateIncoming;
use App\Models\Incoming;
use Illuminate\Http\Request;

class IncomingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $incomings = Incoming::all();
        return view('admin.incoming.index', compact('incomings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.incoming.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateIncoming $request)
    {
        $data = $request->all();

        if(Incoming::create($data)) {
            return redirect()->route('incoming.index')->with("message", "Created successfully!!");
        }
        return redirect()->route('incoming.index')->with("message", "Failed to create successfully!!");

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
        $incoming = Incoming::find($id);
        return view('admin.incoming.edit', compact('incoming'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateIncoming $request, string $id)
    {
        $incoming = Incoming::find($id);

        $data = $request->all();

        if ($incoming->update($data)) {
            return redirect()->route('incoming.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('incoming.index')->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $incoming = Incoming::find($id);

        if ($incoming->delete()) {
            return redirect()->route('incoming.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('incoming.index')->with('message', "failed to delete successfully!!");
    }
}