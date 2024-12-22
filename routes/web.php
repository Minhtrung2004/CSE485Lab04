<?php

use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ReaderController;
use App\Models\Borrow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/borrow', [BorrowController::class, 'index'])->name('borrow.index');

Route::prefix('admin')->name('admin.')->group(function() {
    Route::resource('readers', ReaderController::class);
});