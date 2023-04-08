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

<<<<<<< HEAD
Route::get('/', function () {
    return view('index');
=======
Route::get('/dashboard', function () {
    return view('dashboard/sidebar');
>>>>>>> 3b5f8607dadf274e480dbf011ed8866b0525c46e
});

