<?php

use Illuminate\Support\Facades\Route;



Route::get('/', function() {
    return view("home");
});

Route::get('/products', function() {
    return view("products");
});

Route::get('/contact', function() {
    return view("contact");
});


Route::get('/about', function() {
    return view("about");
});


Route::get('/login', function() {
    return view("login");
});


Route::get('/register', function() {
    return view("register");
});



