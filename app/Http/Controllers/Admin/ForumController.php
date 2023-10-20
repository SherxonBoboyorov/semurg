<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Http\Requests\Admin\CreateForum;
use App\Http\Requests\Admin\UpdateForum;
use App\Models\Forum;
use Illuminate\Http\Request;

class ForumController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $forums = Forum::orderBy('id')->paginate(10);
        return view('admin.forum.index', compact('forums'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('admin.forum.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(CreateForum $request)
    {
        $data = $request->all();

        if(Forum::create($data)) {
            return redirect()->route('forum.index')->with("message", "Create successfully!!");
        }
        return redirect()->route('forum.index')->with("message", "Failed to create successfully!!");
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
        $forum = Forum::find($id);
        return view('admin.forum.edit', compact('forum'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateForum $request, string $id)
    {
        $forum = Forum::find($id);

        $data = $request->all();

        if($forum->update($data)) {
            return redirect()->route('forum.index')->with("message", "Updated successfully!!");
        }
        return redirect()->route('forum.index')->with("message", "Failed to update successfully!!");
     }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        $forum = Forum::find($id);

        if ($forum->delete()) {
            return redirect()
                   ->route('forum.index')
                   ->with('message', "deleted successfully!!");
        }

        return redirect()
               ->route('forum.index')
               ->with('message', "failed to delete successfully!!");
    }
}
