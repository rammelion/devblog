<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('index');
});

Route::get('/cookies', function () {
    return view('cookies');
});

Route::get('/privacy-policy', function () {
    return view('privacy-policy');
});
