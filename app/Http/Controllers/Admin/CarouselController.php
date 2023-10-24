<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateCarousel;
use App\Http\Requests\Admin\UpdateCarousel;
use App\Models\Carousel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\File;

class CarouselController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $carousels = Carousel::orderBy('id')->paginate(10);
        return view('admin.carousel.index', compact('carousels'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.carousel.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateCarousel $request)
    {
        $data = $request->all();
    
        $data['image'] = Carousel::uploadImage($request);

        if (Carousel::create($data)) {
            return redirect()->route('carousel.index')->with('message', 'added successfully!!');
        }
        return redirect()->route('carousel.index')->with('message', 'failed to add successfully!!');
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
        $carousel = Carousel::find($id);
        return view('admin.carousel.edit', compact('carousel'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCarousel $request, string $id)
    {
        $carousel = Carousel::find($id);

        $data = $request->all();
        $data['image'] = Carousel::updateImage($request, $carousel);

        if ($carousel->update($data)) {
            return redirect()->route('carousel.index')->with('message', "update successfully!!");
        }
        return redirect()->route('carousel.index')->with('message', "failed to add successfully!!");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        if (!Carousel::find($id)) {
            return redirect()->route('carousel.index')->with('message', "not found");
        }

        $carousel = Carousel::find($id);

        if (File::exists(public_path() . $carousel->image)) {
            File::delete(public_path() . $carousel->image);
        }

        if ($carousel->delete()) {
            return redirect()->route('carousel.index')->with('message', "deleted successfully!!");
        }
        return redirect()->route('carousel.index')->with('message', "failed to delete successfully!!");
    }
}