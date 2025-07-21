<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/home', function () {
    return '<h1><b>Hello Word!🥰🥰🥰</b></h1>';
});
