<?php

use App\Http\Controllers\MovieInfoController;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('welcome');
});

Route::resource('movie-info', MovieInfoController::class);