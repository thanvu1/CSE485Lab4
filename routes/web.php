<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('readers', ReaderController::class);

