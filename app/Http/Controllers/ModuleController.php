<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class ModuleController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $course = Course::findOrFail(request()->course);
        return view('Lessons.course3',compact('course'));
    }
    public function create()
    {
        //
    }
    public function store(Request $request)
    {
        Module::create([
            'course_id'=>request()->courseId,
            'title'=>request()->title,
            'description'=>request()->description,
        ]);
        return redirect()->back()->with('success','Success');
    }

    public function show(Module $module)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Module $module)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Module $module)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Module $module)
    {
        //
    }
}
