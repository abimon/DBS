<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use GrahamCampbell\ResultType\Success;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        Lesson::create([
            'module_id'=>request()->courseId,
            'title'=>request()->title,
            'body'=>request()->body
        ]);
        return redirect()->back()->with('success','Success');
    }
    public function show(Lesson $lesson)
    {
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Lesson $lesson)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Lesson $lesson)
    {
        //
    }

    public function destroy($id)
    {
        Lesson::destroy($id);
        return redirect()->back()->with('success','Success delete.');
    }
}
