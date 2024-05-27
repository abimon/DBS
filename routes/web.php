<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\HomeController;
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
    Route::get('/profile', [HomeController::class,'profile']);
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
