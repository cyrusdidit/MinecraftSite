<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ToDoController;
use App\Http\Controllers\DiaryController;

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

Route::get('/todos', [ToDoController::class, 'index']);

Route::get('/diary', [DiaryController::class, 'index']);