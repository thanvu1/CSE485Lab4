<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ReaderController;
use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;

Route::get('/', function () {
    return view('welcome');
});

Route::resource('readers', ReaderController::class);
Route::resource('books', BookController::class);
