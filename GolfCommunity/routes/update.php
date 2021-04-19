<?php

use App\Http\Controllers\ProfileController;

Route::group(['middleware' => 'auth'], function(){
    Route::get('profile', 'ProfileController@edit')
    ->name('profile.edit');

    Route::patch('profile', 'ProfileController@update')
    ->name('profile.update');
});