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

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/halo', function () {
//     return "Halo nama saya Marco";
// });

// Route::get('/latihan', [App\Http\Controllers\LatihanController::class,'index']);

Route::get('/blog/{idblog}', [App\Http\Controllers\LatihanController::class,'blog']);

// Route::get('/blog/{idblog}/komentar/{idkomentar}', [App\Http\Controllers\LatihanController::class,'komentar']);

Route::get('/', [\App\Http\Controllers\HomepageController::class,'index']);

