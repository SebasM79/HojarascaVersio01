<?php

use App\Http\Controllers\CespedController;
use Illuminate\Support\Facades\Route;

Route::get('HojarascaVersio01/welcome', function () {
    return view('welcomeasi');
});

Route::resource('cespeds', CespedController::class);
