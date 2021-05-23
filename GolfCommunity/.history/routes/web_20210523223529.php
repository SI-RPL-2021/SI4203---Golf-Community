<?php

use App\Http\Controllers\PertandinganController;
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
Route::get('/pertandingan/listpertandingan', 'PertandinganController@list');

Route::get('/pertandingan/buatpertandingan', 'PertandinganController@buat');


Route::get('/pertandingan/buatp', 'PertandinganController@buatp');
Route::post('/pertandingan/form-pertandingan', [PertandinganController::class, 'buatpertandingan']);
Route::get('/pertandingan/showpertandingan/{key}', 'PertandinganController@show');
Route::get('/pertandingan/daftarpertandingan', 'DaftarPertandinganController@store');
//route cuaca
Route::get('/cuaca', 'CuacaController@index');

//route tiket
Route::get('/tiket', 'TiketController@index');
Route::get('/tiket/beli', 'TiketController@beli');
Route::get('/tiket/bayar', 'TiketController@bayartiket');
Route::post('/tiket/hasiltiket', 'TiketController@hasiltiket');

//route forum
Route::get('/forum', 'ForumController@index');

//route digital wallet (dw)

Route::get('/digitalwallet', 'DwController@index');
Route::get('/digitalwallet/topup', 'DwController@topup');
Route::post('/digitalwallet/tambahsaldobaru','DwController@tambahsaldobaru');
Route::post('/digitalwallet/tambahsaldo','DwController@tambahsaldo');