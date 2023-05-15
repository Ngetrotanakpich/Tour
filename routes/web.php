<?php

use Illuminate\Support\Facades\Route;
use App\http\controllers\Tour_regis;
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

//http://127.0.0.1:8000/result
Route::get('/result', function () {
    return view('result');
});

//http://127.0.0.1:8000/result
Route::post('result',[Tour_regis::class, 'insert']);
Route::get('/edit/{id}', [Tour_regis::class, 'edit']);
Route::get('/delete/{id}', [Tour_regis::class, 'delete']);
Route::get('/view', [Tour_regis::class, 'view'])->name('view');
Route::post('/edit/update', [Tour_regis::class, 'update']);