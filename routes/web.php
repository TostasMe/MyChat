<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ChatController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\SettingsController;

Route::get('/', [ChatController::class, 'index']);
Route::get('/signup', [UserController::class, 'loadViewSignup']);
Route::get('/login', [UserController::class, 'loadViewLogin']);
Route::get('/logout', [UserController::class, 'logout']);
Route::get('/settings', [SettingsController::class, 'loadViewSettings']);
Route::get('/messages', [ChatController::class, 'showMessages']);

Route::put('/', [ChatController::class, 'sendMessage']);
Route::post('/signup', [UserController::class, 'signup']);
Route::post('/login', [UserController::class, 'login']);