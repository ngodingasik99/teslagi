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
>>>>>>> f725530c23fdf74191725181e6ea5612a088bc41
});

