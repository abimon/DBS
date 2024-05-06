<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::middleware('auth')->group(function () {
    Route::get('/dashboard', function () {
        return view('dashboard.dashboard');
    });
    Route::get('/course/{title}', function () {
        return view('dashboard.course');
    });
    Route::get('/profile', function () {
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
        return view('dashboard.profile',compact('score','per','g'));
    });
    Route::get('/guest', function () {
        return view('dashboard.guest');
    });
    Route::get('/logged', function () {
        return view('dashboard.course');
    });
    Route::get('/intro', function () {
        return view('dashboard.intro');
    });
    Route::resources([
        'courses' => CourseController::class,
        'module' => ModuleController::class,
        'lesson' => LessonController::class,
        'user' => UserController::class,
    ]);
});
Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});
Route::resources([]);
