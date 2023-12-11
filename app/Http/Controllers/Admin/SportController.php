<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateSport;
use App\Http\Requests\Admin\UpdateSport;
use App\Models\Sport;
use Illuminate\Http\Request;

class SportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $sports = Sport::orderBy('id')->paginate(10);
        return view('admin.sport.index', compact('sports'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.sport.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateSport $request)
    {
        $data = $request->all();

        if (Sport::create($data)) {
            return redirect()->route('sport.index')->with("message", "created successfully!!");
        }
        return redirect()->route('sport.index')->with("message", "failed to add successfully!!");
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
        $sport = Sport::find($id);
        return view('admin.sport.edit', compact('sport'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateSport $request, string $id)
    {
        $sport = Sport::find($id);

        $data = $request->all();

        if ($sport->update($data)) {
            return redirect()->route('sport.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('sport.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $sport = Sport::find($id);

        if ($sport->delete()) {
            return redirect()->route('sport.index')->with('message', "deleted successfully");
        }

        return redirect()->route('sport.index')->with('message', "failed to delete successfullt!!");
    }
}
