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


//CREATE A TO DO
Route::get('/todos/create', [ToDoController::class, 'create']);
Route::post('/todos', [ToDoController::class, 'store']);

//EDIT A TO DO
Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);
Route::put('/todos/{todo}', [TodoController::class, 'update']);

//DELETE A TO DO
Route::delete('/todos/{todo}', [ToDoController::class, 'destroy'])->name('todos.destroy');

//SEE TO DOS
Route::get('/todos', [ToDoController::class, 'index']);
Route::get('/todos/{todo}', [ToDoController::class, 'show']);

//CREATE A DIARY ENTRY
Route::get('/diary/create', [DiaryController::class, 'create']);
Route::post('/diary', [DiaryController::class, 'store']);

//EDIT AN ENTRY
Route::get('/diary/{diary}/edit', [DiaryController::class, 'edit']);
Route::put('/diary/{diary}', [DiaryController::class, 'update']);

//DELETE AN ENTRY
Route::delete('/diary/{diary}', [DiaryController::class, 'destroy']);

//SEE DIARY ENTRIES
Route::get('/diary', [DiaryController::class, 'index']);
Route::get('/diaries/{diary}', [DiaryController::class, 'show']);