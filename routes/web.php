<?php

use Illuminate\Support\Facades\Route;
<<<<<<< HEAD
use App\Http\Controllers\ReaderController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('readers', ReaderController::class);

=======
use App\Http\Controllers\BookController;
Route::get('/', function () {
    return view('layouts.app');
});

Route::resource('books', BookController::class);
>>>>>>> mergecode
