<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateFaq;
use App\Http\Requests\Admin\UpdateFaq;
use App\Models\Faq;
use Illuminate\Http\Request;

class FaqController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $faqs = Faq::orderBy('id')->get();
        return view('admin.faq.index', compact('faqs'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.faq.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateFaq $request)
    {
        $data = $request->all();

        if (Faq::create($data)) {
            return redirect()
                   ->route('faq.index')
                   ->with('message', 'added successfully!!');
        }
        return redirect()
               ->route('faq.index')
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
        $faq = Faq::find($id);
        return view('admin.faq.edit', compact('faq'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateFaq $request, string $id)
    {
        $faq = Faq::find($id);

        $data = $request->all();

        if ($faq->update($data)) {
            return redirect()
                   ->route('faq.index')
                   ->with('message', 'updated successfully!!');
        }

        return redirect()
               ->route('faq.index')
               ->with('message', 'failed to update successfully!!');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $faq = Faq::find($id);

        if ($faq->delete()) {
            return redirect()
                   ->route('faq.index')
                   ->with('message', "deleted successfully!!");
        }

        return redirect()
               ->route('faq.index')
               ->with('message', "failed to delete successfully!!");
    }
}
