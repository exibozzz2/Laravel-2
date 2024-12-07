<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'index']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactsController::class, 'index']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);




