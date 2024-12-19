<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

// Routes for Borrow Management
Route::resource('borrows', BorrowController::class);
Route::get('borrows/history/{reader_id}', [BorrowController::class, 'history'])->name('borrows.history');
