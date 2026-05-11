<?php

use Illuminate\Support\Facades\Route;


Route::get('users', [UserController::class, 'index'])->name ('users.index');
Route::get('users', [UserController::class, 'store'])->name ('users.store');
Route::delete('users/{id}', [UserController::class, 'destroy'])->name ('users.destroy');
Route::get('users', [UserController::class, 'edit'])->name ('users.edit');
