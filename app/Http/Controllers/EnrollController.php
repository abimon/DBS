<?php

namespace App\Http\Controllers;

use App\Models\Enroll;
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
        if(!$enroll){
            Enroll::create([
                'user_id'=>Auth()->user()->id,
                'course_id'=>request()->course_id,
                'progress'=>0
            ]);
            return back()->with('success','Enrollment successful.');
        }
        return back()->with('error','You are already enrolled for this course.');
    }

    /**
     * Display the specified resource.
     */
    public function show(Enroll $enroll)
    {
        
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
    public function update(Request $request, Enroll $enroll)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy($id)
    {
        Enroll::destroy($id);
        return back()->with('success','Course dropped successfully.');
    }
}
