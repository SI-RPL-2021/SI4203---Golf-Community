<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;

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
