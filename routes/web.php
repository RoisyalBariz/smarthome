<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\ServiceController;
use App\Http\Controllers\PostController;

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


Route::get('/service', [ServiceController::class, 'index']);
Route::post('/service', [ServiceController::class, 'store']);


Route::get('/joinus', [JoinController::class, 'index']);
Route::post('/joinus', [JoinController::class, 'store']);

Route::get('/aboutus', function () {
    return view('aboutus');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/MainNews', [PostController::class, 'index']);
Route::get('/singleNews/{id}', [PostController::class, 'show']);
