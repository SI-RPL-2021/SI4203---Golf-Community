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
Route::post('/pertandingan/daftarpertandingan', 'DaftarPertandinganController@store');
Route::get('/pertandingan/daftarpertandingansaya', 'DaftarPertandinganController@index');

//route cuaca
Route::get('/cuaca', 'CuacaController@index');

//route tiket
Route::get('/tiket', 'TiketController@index');
Route::get('/tiket/beli', 'TiketController@beli');
Route::get('/tiket/bayar', 'TiketController@bayartiket');
Route::post('/tiket/hasiltiket', 'TiketController@hasiltiket');
Route::get('/tiket/tiketsaya', 'TiketController@tiketsaya');
Route::get('/tiket/printtiket', 'TiketController@print');

//route forum
Route::get('/forum', 'ForumController@index');
Route::post('forum/create', 'ForumController@create');
Route::get('/forum/{forum}/view','ForumController@view');
Route::post('/forum/{forum}/view','ForumController@postkomentar');

//route digital wallet (dw)

Route::get('/digitalwallet', 'DwController@index');
Route::get('/digitalwallet/topup', 'DwController@topup');
Route::post('/digitalwallet/tambahsaldobaru','DwController@tambahsaldobaru');
Route::post('/digitalwallet/tambahsaldo','DwController@tambahsaldo');









//route health
Route::get('/health', 'HealthController@index');
Route::get('/health/create', 'HealthController@health');
Route::post('/health/monitor', 'HealthController@store');
Route::get('/health/riwayat', 'HealthController@show');
