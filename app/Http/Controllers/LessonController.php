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

    public function create()
    {
        //
    }
    public function store()
    {
        $module = Lesson::where('module_id', request('courseId'))->orderBy('created_at', 'desc')->first();
        if (!$module) {
            $index = 1;
        }
        else{
            $index = $module->index_no + 1;
        }
        Lesson::create([
            'module_id'=>request()->courseId,
            'index_no'=>$index,
            'title'=>request()->title,
            'body'=>request()->body
        ]);
        return redirect()->back()->with('success','Success');
    }
    public function show(Lesson $lesson)
    {
        
    }
    public function edit(Lesson $lesson)
    {
        //
    }
    public function update($id)
    {
        $lesson= Lesson::findOrFail($id);
        if(request()->title != null){
            $lesson->title=request()->title;
        }
        if(request()->body != null){
            $lesson->body=request()->body;
        }
        $lesson->update();
        return redirect()->back();
    }

    public function destroy($id)
    {
        Lesson::destroy($id);
        return redirect()->back()->with('success','Success delete.');
    }
}
