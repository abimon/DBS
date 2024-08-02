<?php

use App\Http\Controllers\CourseController;
use App\Http\Controllers\EnrollController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\InvolveController;
use App\Http\Controllers\LessonController;
use App\Http\Controllers\ModuleController;
use App\Http\Controllers\SubscribeController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::controller(HomeController::class)->group(function () {
    Route::get('/','index');
});
Route::middleware('auth')->group(function () {
    Route::get('/course/{title}', function () {
        return view('dashboard.course');
    });
    Route::controller(HomeController::class)->group(function () {
        Route::get('/dashboard','dashboard');
        Route::get('/profile','profile');
    });
    Route::resources([
        'module' => ModuleController::class,
        'lesson' => LessonController::class,
        'user' => UserController::class,
        'enroll'=>EnrollController::class,
    ]);
});
Auth::routes();

Route::get('/home', function () {
    return redirect('/');
});
Route::resources([
    'courses' => CourseController::class,
    'support'=>InvolveController::class,
    'subscribe'=>SubscribeController::class,
]);
