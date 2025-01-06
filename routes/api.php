<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\AuthController;



Route::middleware('auth:sanctum')->group(function () {
    Route::get('/users', [AuthController::class, 'getUsers']);
});
Route::post('register', [AuthController::class, 'register']);
Route::post('login', [AuthController::class, 'login']);

// Route::get('/test', [AuthController::class, 'test']);
