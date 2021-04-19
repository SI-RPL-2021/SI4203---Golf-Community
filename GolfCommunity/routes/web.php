<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\PertandinganController;

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

    return view('home');

});
Route::resource('/pertandingans', 'App\Http\Controllers\PertandingansController');

Route::get('/challenge', 'App\Http\Controllers\PertandingansController@list')->name('challenge');

//TIKET PERTANDINGAN #ADAM
Route::get('/pertandingan', [PertandinganController::class, 'index']);
Route::get('/pertandingan/tambah', [PertandinganController::class, 'tambah']);
Route::post('/pertandingan/store', [PertandinganController::class, 'store']);
Route::get('/pertandingan/pesan/{id}', [PertandinganController::class, 'pesan']);
Route::post('/pertandingan/pesantiket', [PertandinganController::class, 'pesantiket']);
