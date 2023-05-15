<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
//http://127.0.0.1:8000
Route::get('/welcome', function () {
    return view('welcome');
});

//http://127.0.0.1:8000/front
Route::get('/front', function () {
    return view('front');
});


