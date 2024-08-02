<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Module;
use Illuminate\Http\Request;
use Illuminate\Support\Str;

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
            'slug'=>strtolower(Str::slug(request('title'))),
            'category'=>request()->category,
        ]);
        $id = $course->id;
        return view('Lessons.course2',compact('id'));
        
    }
    public function show($slug)
    {
        $course = Course::where('slug',$slug)->first();
        return view('Courses.course',compact('course'));
    }
    public function edit($id)
    {
        $course = Course::findOrFail($id);
        return view('Courses.edit',compact('course'));
    }

    public function update($id)
    {
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
