<?php

use Illuminate\Support\Facades\Route;



Route::get('/', [App\Http\Controllers\HomeController::class, 'index']);
Route::get('/products', [App\Http\Controllers\ProductsController::class, 'getAllProducts']);
Route::get('/about', [App\Http\Controllers\AboutController::class, 'index']);
Route::get('/contact', [App\Http\Controllers\ContactsController::class, 'index']);
Route::get('/login', [App\Http\Controllers\LoginController::class, 'index']);
Route::get('/register', [App\Http\Controllers\RegisterController::class, 'index']);
Route::get('/admin/all-contacts', [\App\Http\Controllers\ContactsController::class, 'getAllContacts']);
Route::post('/send-contact', [\App\Http\Controllers\ContactsController::class, 'sendContact']);

Route::get('/admin/add-product', [\App\Http\Controllers\ProductsController::class, 'addProductView']);
Route::post('/admin/add-product', [\App\Http\Controllers\ProductsController::class, 'addProductInsert']);

Route::get('/admin/all-products', [\App\Http\Controllers\ProductsController::class, 'getAllProductsAdmin']);





