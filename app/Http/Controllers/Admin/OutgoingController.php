<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateOutgoing;
use App\Http\Requests\Admin\UpdateOutgoing;
use App\Models\Outgoing;
use Illuminate\Http\Request;

class OutgoingController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $outgoings = Outgoing::all();
        return view('admin.outgoing.index', compact('outgoings'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.outgoing.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateOutgoing $request)
    {
        $data = $request->all();

        if(Outgoing::create($data)) {
            return redirect()->route('outgoing.index')->with("message", "Created successfully!!");
        }
        return redirect()->route('outgoing.index')->with("message", "Failed to create successfully!!");

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
        $outgoing = Outgoing::find($id);
        return view('admin.outgoing.edit', compact('outgoing'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateOutgoing $request, string $id)
    {
        $outgoing = Outgoing::find($id);

        $data = $request->all();

        if ($outgoing->update($data)) {
            return redirect()->route('outgoing.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('outgoing.index')->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $outgoing = Outgoing::find($id);

        if ($outgoing->delete()) {
            return redirect()->route('outgoing.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('outgoing.index')->with('message', "failed to delete successfully!!");
    }
}