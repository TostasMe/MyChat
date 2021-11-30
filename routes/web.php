<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;

Route::get('/', [ChatController::class, 'index']);
Route::get('/signup', [UserController::class, 'loadViewSignup']);
Route::get('/login', [UserController::class, 'loadViewLogin']);
Route::get('/logout', [UserController::class, 'logout']);

Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login', [UserController::class, 'login']);