<?php

use App\Http\Controllers\ProfilesController;
use App\Http\Controllers\UsersController;
use Illuminate\Support\Facades\Route;


Route::get('users', [UsersController::class, "index"]);
Route::post('users', [UsersController::class, "store"]);
Route::put('users/{id}', [UsersController::class, "update"]);
Route::delete('users/{id}', [UsersController::class, "destroy"]);


Route::get('profiles', [ProfilesController::class, "index"]);
