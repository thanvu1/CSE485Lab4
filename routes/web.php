<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\BorrowController;

// Routes for Borrow Management
Route::resource('borrows', BorrowController::class);
Route::get('borrows/history/{reader_id}', [BorrowController::class, 'history'])->name('borrows.history');
// Route::get('/borrows/{id}/edit', [BorrowController::class, 'edit'])->name('borrows.edit');
// Route::put('/borrows/{id}', [BorrowController::class, 'update'])->name('borrows.update');
// Route để hiển thị form tạo mượn sách mới
Route::get('/borrows/create', [BorrowController::class, 'create'])->name('borrows.create');

// Route để lưu thông tin mượn sách mới vào cơ sở dữ liệu
Route::post('borrows', [BorrowController::class, 'store'])->name('borrows.store');










