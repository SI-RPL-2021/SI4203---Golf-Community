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
    return view('home');
});

Route::middleware(['auth:sanctum', 'verified'])->get('/dashboard', function () {
    return view('dashboard');
})->name('dashboard');

//route pertandingan
Route::get('/pertandingan', 'PertandinganController@home');
Route::get('/pertandingan/tentang', 'PertandinganController@tentang');
Route::get('/pertandingan/kontak', 'PertandinganController@kontak');