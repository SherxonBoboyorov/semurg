<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateVacancy;
use App\Http\Requests\Admin\UpdateVacancy;
use App\Models\Vacancy;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class VacancyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $vacancies = Vacancy::orderBy('id')->get();
        return view('admin.vacancy.index', compact('vacancies'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.vacancy.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateVacancy $request)
    {
        $data = $request->all();
    
        $data['image'] = Vacancy::uploadImage($request);

        if (Vacancy::create($data)) {
            return redirect()->route('vacancy.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('vacancy.index')->with('message', 'failed to add successfully!!');
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
        $vacancy = Vacancy::find($id);
        return view('admin.vacancy.edit', compact('vacancy'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateVacancy $request, string $id)
    {
        $vacancy = Vacancy::find($id);

        $data = $request->all();
        $data['image'] = Vacancy::updateImage($request, $vacancy);


        if ($vacancy->update($data)) {
            return redirect()->route('vacancy.index')->with('message', "update successfully!!");
        }
        return redirect()->route('vacancy.index')->with('message', "failed to add successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $vacancy = Vacancy::find($id);

        if (File::exists(public_path() . $vacancy->image)) {
            File::delete(public_path() . $vacancy->image);
        }

        if ($vacancy->delete()) {
            return redirect()->route('vacancy.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('vacancy.index')->with('message', "failed to delete successfully!!");
    }
}
