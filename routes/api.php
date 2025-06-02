<?php

use App\Http\Controllers\Api\AuthController;
use App\Http\Controllers\Api\TransactionController;
use App\Http\Controllers\Api\UserController;
use App\Http\Controllers\Api\WalletController;
use Illuminate\Support\Facades\Route;

Route::post('/register', [AuthController::class, 'register']);
Route::post('/login', [AuthController::class, 'login']);

Route::get('/user', [UserController::class, 'show'])->middleware('auth:sanctum');
Route::post('/user/update', [UserController::class, 'update'])->middleware('auth:sanctum');

Route::resource('/wallet', WalletController::class)->middleware('auth:sanctum');
Route::resource('/transaction', TransactionController::class)->middleware('auth:sanctum');
