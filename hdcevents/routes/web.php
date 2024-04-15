<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/contatos', function () {
    return view('contact');
});

Route::get('/produtos', function () {
    return view('products');
});
