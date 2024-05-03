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
Route::get('/guest', function () {
    if(Auth()->user()){
        
    }
    else{
        return view('dashboard.guest');
    }
});
Route::get('logged', function(){
    return view('dashboard.logged');
});
Route::get('intro',function(){
    return view('dashboard.intro');
});
Auth::routes();

Route::get('/home', function(){return redirect('/');});
Route::resources([]);