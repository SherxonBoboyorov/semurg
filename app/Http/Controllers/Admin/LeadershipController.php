<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateLeadership;
use App\Http\Requests\Admin\UpdateLeadership;
use App\Models\Leadership;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class LeadershipController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $leaderships = Leadership::orderBy('id')->paginate(10);
        return view('admin.leadership.index', compact('leaderships'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.leadership.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateLeadership $request)
    {
        $data = $request->all();

        $data['image'] = Leadership::uploadImage($request);

        if (Leadership::create($data)) {
            return redirect()->route('leadership.index')->with("message", "created successfully!!");
        }
        return redirect()->route('leadership.index')->with("message", "failed to add successfully!!");
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
        $leadership = Leadership::find($id);
        return view('admin.leadership.edit', compact('leadership'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateLeadership $request, string $id)
    {
        $leadership = Leadership::find($id);

        $data = $request->all();
        $data['image'] = Leadership::updateImage($request, $leadership);

        if ($leadership->update($data)) {
            return redirect()->route('leadership.index')->with('message', 'updated successfully!!!');
        }

        return redirect()->route('leadership.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $leadership = Leadership::find($id);

        if (File::exists(public_path() . $leadership->image)) {
            File::delete(public_path() . $leadership->image);
        }

        if ($leadership->delete()) {
            return redirect()->route('leadership.index')->with('message', "deleted successfully");
        }

        return redirect()->route('leadership.index')->with('message', "failed to delete successfullt!!");
    }
}
