<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/game', function () {
    return view('game');
});

Route::get('/community', function () {
    return view('community');
});

Route::get('/marketplace', function () {
    return view('marketplace');
});
