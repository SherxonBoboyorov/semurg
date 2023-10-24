<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateUseful;
use App\Http\Requests\Admin\UpdateUseful;
use App\Models\Useful;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class UsefulController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $usefuls = Useful::orderBy('id')->paginate(10);
        return view('admin.useful.index', compact('usefuls'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.useful.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateUseful $request)
    {
        $data = $request->all();
    
        $data['image'] = Useful::uploadImage($request);

        if (Useful::create($data)) {
            return redirect()->route('useful.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('useful.index')->with('message', 'failed to add successfully!!');
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
        $useful = Useful::find($id);
        return view('admin.useful.edit', compact('useful'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateUseful $request, string $id)
    {
        $useful = Useful::find($id);

        $data = $request->all();
        $data['image'] = Useful::updateImage($request, $useful);

        if ($useful->update($data)) {
            return redirect()->route('useful.index')->with('message', "update successfully!!");
        }
        return redirect()->route('useful.index')->with('message', "failed to add successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Useful::find($id)) {
            return redirect()->route('useful.index')->with('message', "not found");
        }

        $useful = Useful::find($id);

        if (File::exists(public_path() . $useful->image)) {
            File::delete(public_path() . $useful->image);
        }

        if ($useful->delete()) {
            return redirect()->route('useful.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('useful.index')->with('message', "failed to delete successfully!!");
    }
}
