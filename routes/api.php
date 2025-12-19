<?php

use App\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

// Route untuk API Login
Route::post('/login', [AuthController::class, 'login']);
Route::post('/register', [AuthController::class, 'register']);

