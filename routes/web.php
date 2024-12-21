<?php

use App\Http\Controllers\BorrowController;
use App\Models\Borrow;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/borrow', [BorrowController::class, 'index'])->name('borrow.index');
