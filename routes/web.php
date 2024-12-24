<?php

use App\Http\Controllers\BookController;
use App\Http\Controllers\BorrowController;
use App\Http\Controllers\ReaderController;
use App\Models\Borrow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

/*Borrow*/
Route::get('/borrow', [BorrowController::class, 'index'])->name('borrow.index');
Route::get('/admin/borrow/create', [BorrowController::class, 'create'])->name('borrow.create');
Route::post('/admin/borrow', [BorrowController::class, 'store'])->name('borrow.store');

/*BOOK AND READER*/
Route::prefix('admin')->name('admin.')->group(function () {
    Route::resource('book', BookController::class);
    Route::resource('readers', ReaderController::class);
});


Route::get('/readers/{reader}/history', [ReaderController::class, 'history'])->name('readers.history');