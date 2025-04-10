<?php

use App\Http\Controllers\GundamController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/gundam', [GundamController::class, 'index'])->name('gundam.index');