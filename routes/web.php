<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\CespedsController;
use App\Models\Cesped;

Route::get('/cespeds', 'CespedController@index_cespeds')->name('cespeds.index_cespeds');
Route::get('/cespeds/create', 'CespedController@create_cespeds')->name('cespeds.create_cespeds');
Route::resource('cespeds', 'CespedController');

Route::get('/cespeds/{id}/edit', 'CespedController@edit')->name('cespeds.edit');
Route::post('/cespeds/{id}', 'CespedController@update')->name('cespeds.update');
Route::delete('/cespeds/{id}', 'CespedController@destroy')->name('cespeds.destroy');

Route::get('/cespeds/destacados', 'CespedController@destacados')->name('cespeds.destacados');
