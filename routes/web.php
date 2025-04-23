<?php

use App\Http\Controllers\ProductController;
use App\Http\Controllers\User;
use Illuminate\Support\Facades\Route;

Route::get('/', [ProductController::class, 'index'])->name('products.index');
Route::get('/user', [User::class, 'index'])->name('user.index');
