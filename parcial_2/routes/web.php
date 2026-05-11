<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/users', [UserController::class, 'index']->name ('users.index'));
Route::get('/users', [UserController::class, 'store']->name ('users.store'));
Route::delete('users/{id}', [UserController::class, 'destroy']->name ('users.destroy'));
