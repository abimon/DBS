<?php

namespace App\Http\Controllers;

use App\Models\Lesson;
use Illuminate\Http\Request;

class LessonController extends Controller
{
    public function index()
    {
        return view('Lessons.course');
    }
    public function create()
    {
        // dd(request());
        $id = 1;
        return view('Lessons.course2',compact('id'));
    }
    public function store(Request $request)
    {
        // dd(url()->previous());
        $id = 1;
        return view('Lessons.course3',compact('id'));
    }
    public function show(Lesson $lesson)
    {
        
    }
    public function edit(Lesson $lesson)
    {
        //
    }
    public function update(Request $request, Lesson $lesson)
    {
        return 'Success';
    }
    public function destroy(Lesson $lesson)
    {
        //
    }
}
