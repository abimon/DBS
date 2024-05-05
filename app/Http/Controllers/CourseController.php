<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Module;
use Illuminate\Http\Request;

class CourseController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $courses = Course::all();
        return view('Lessons.index',compact('courses'));
    }
    public function create()
    {
        return view('Lessons.course');
    }
    public function store(Request $request)
    {
        // dd(request());
        $course=Course::create([
            'author'=>Auth()->user()->id,
            'title'=>request()->title,
            'category'=>request()->category,
            'description'=>request()->description,
        ]);
        $id = $course->id;
        return view('Lessons.course2',compact('id'));
        
    }
    public function show(Course $course)
    {
        //
    }
    public function edit(Course $course)
    {
        
    }

    public function update($id)
    {
        // dd(request());
        
        $course = Course::findOrFail($id);
        if($course->cover_path == null){
            if(request()->hasFile('cover')){
                $extension = request()->file('cover')->getClientOriginalExtension();
                $filename = uniqid().time(). '.' . $extension;
                request()->file('cover')->storeAs('public/covers', $filename);
            }
            else{
                return redirect()->back()->with('error','No image found');
            }
            $course->cover_path=$filename;
            $course->update();
        }
        return redirect(route('module.index',['course'=>$course]));
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Course $course)
    {
        //
    }
}
