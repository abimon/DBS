<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::get('/dashboard', function () {
    return view('dashboard.dashboard');
});
Route::get('/courses', function () {
    return view('dashboard.course');
});
Route::get('/profile', function () {
    return view('dashboard.profile');
});
Route::get('/coursecont', function () {
    if(Auth()->user()){
        return view('dashboard.logged');
    }
    else{
        return view('dashboard.guest');
    }
});
Route::get('intro',function(){
    return view('dashboard.intro');
});
Auth::routes();

Route::get('/home', function(){return redirect('/');});
Route::resources([]);