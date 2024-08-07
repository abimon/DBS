<?php

namespace App\Http\Controllers;

use App\Models\Course;
use App\Models\Nation;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        $courses = Course::latest()->take(4)->get();
        return view('welcome',compact('courses'));
    }
    public function profile(){
        $score = 0;
        $g=0;
        if (Auth()->user()->f_name != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->l_name != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->username != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->email != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->contact != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->avatar != null) {
            $score += 1;
        }
        if (Auth()->user()->cover_photo != null) {
            $score += 1;
        }
        if (Auth()->user()->yob != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->country != null) {
            $score += 1;$g+=1;
        }
        if (Auth()->user()->biography != null) {
            $score += 1;
        }
        $per = $score*10;
        $nations = Nation::all();

        return view('dashboard.profile',compact('score','per','g','nations'));
    }
    public function dashboard(){
        $courses = Course::orderBy('created_at','desc')->take(6)->latest()->get();
        return view('dashboard.dashboard',compact('courses'));
    }
}
