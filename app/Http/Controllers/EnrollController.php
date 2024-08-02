<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Enroll;
use App\Models\Lesson;
use App\Models\Module;
use Illuminate\Http\Request;

class EnrollController extends Controller
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
    public function store()
    {
        $enroll = Enroll::where([['user_id', Auth()->user()->id], ['course_id', request()->course_id]])->first();
        if (!$enroll) {
            Enroll::create([
                'user_id' => Auth()->user()->id,
                'course_id' => request()->course_id,
                'module' => 1,
                'lesson' => 1
            ]);
            return back()->with('success', 'Enrollment successful.');
        }
        return back()->with('error', 'You are already enrolled for this course.');
    }

    /**
     * Display the specified resource.
     */
    public function show($id)
    {
        $course = Course::findOrFail($id);
        return view('Courses.course', compact('course'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Enroll $enroll)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update($id)
    {
        $enroll = Enroll::findOrFail($id);
        $module = Module::where([['course_id', $enroll->course_id], ['index_no', $enroll->module]])->first();
        $lesson = Lesson::where([['index_no', ($enroll->lesson)+1],['module_id',$module->id]])->first();
        if(!$lesson){
            $module = Module::where([['course_id', $enroll->course_id], ['index_no', ($enroll->module)+1]])->first();
            if(!$module){
                return redirect('/dashboard')->with('success', 'Congratulations. You have successfully completed the course.');
            }else{
                // return $enroll->module;
                $enroll->module += 1;
                $enroll->lesson = 1;
                $enroll->update();
                return redirect()->back()->with('success', 'Congratulations. You have successfully completed the module.');
            }
        }
        else{
            $enroll->lesson += 1;
            $enroll->update();
            return redirect()->back()->with('success', 'Congratulations. You have successfully completed the lesson.');
        }

    }

    public function destroy($id)
    {
        Enroll::destroy($id);
        return back()->with('success', 'Course dropped successfully.');
    }
}
