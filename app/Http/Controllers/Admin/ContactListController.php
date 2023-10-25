<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateContactList;
use App\Http\Requests\Admin\UpdateContactList;
use App\Models\ContactList;
use Illuminate\Http\Request;

class ContactListController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $contactlists = ContactList::orderBy('id')->paginate(10);
        return view('admin.contactlist.index', compact('contactlists'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.contactlist.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateContactList $request)
    {
        $data = $request->all();

        if (ContactList::create($data)) {
            return redirect()
                   ->route('contactlist.index')
                   ->with('message', 'added successfully!!');
        }
        return redirect()
               ->route('contactlist.index')
               ->with('message', 'failed to add successfully!!');
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
        $contactlist = ContactList::find($id);
        return view('admin.contactlist.edit',compact('contactlist'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateContactList $request, string $id)
    {
        $contactlist = ContactList::find($id);

        $data = $request->all();

        if ($contactlist->update($data)) {
            return redirect()
                   ->route('contactlist.index')
                   ->with('message', 'updated successfully!!');
        }

        return redirect()
               ->route('contactlist.index')
               ->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {

        $contactlist = ContactList::find($id);

        if ($contactlist->delete()) {
            return redirect()
                   ->route('contactlist.index')
                   ->with('message', "deleted successfully!!");
        }
        return redirect()
                   ->route('contactlist.index')
                   ->with('message', "failed to delete successfully!!");
    }
}
