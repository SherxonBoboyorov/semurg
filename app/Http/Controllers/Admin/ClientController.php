<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateClient;
use App\Http\Requests\Admin\UpdateClient;
use App\Models\Client;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class ClientController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $clients = Client::orderBy('id')->get();
        return view('admin.client.index', compact('clients'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.client.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateClient $request)
    {
        $data = $request->all();

        $data['image'] = Client::uploadImage($request);

        if (Client::create($data)) {
            return redirect()->route('client.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('client.index')->back()->with('message', 'failed to add successfully!!');
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
        $client = Client::find($id);
        return view('admin.client.edit', compact('client'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateClient $request, string $id)
    {
        $client = Client::find($id);

        $data = $request->all();
        $data['image'] = Client::updateImage($request, $client);

        if ($client->update($data)) {
            return redirect()->route('client.index')->with('message', 'updated successfully!!');
        }

        return redirect()->route('client.index')->with('message', 'failed to update successfully!!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $client = Client::find($id);

        if (File::exists(public_path() . $client->image)) {
            File::delete(public_path() . $client->image);
        }

        if ($client->delete()) {
            return redirect()->route('client.index')->with('message', "deleted successfully!!");
        }

        return redirect()->route('client.index')->with('message', "failed to delete successfully!!");
    }
}
