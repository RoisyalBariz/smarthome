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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/service', function () {
    return view('service');
});

Route::get('/joinus', function () {
    return view('joinus');
});

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/profile', function () {
    return view('profile');
});
