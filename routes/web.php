<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BookController;
Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('books', BookController::class);
