<?php

use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Wallet
// Route::get('/wallets', [WalletController::class, 'index'])->middleware('auth')->name('wallet.index');
// Route::get('/wallets/create', [WalletController::class, 'create'])->middleware('auth')->name('wallet.create');
Route::get('/wallets/{wallet}', [WalletController::class, 'show'])->middleware('auth')->name('wallet.show');
// Route::get('/wallets/{wallet}/edit', [WalletController::class, 'edit'])->middleware('auth')->name('wallet.edit');

// User
Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware('auth')->name('user.create');
Route::get('/users/{user}', [UserController::class, 'show'])->middleware('auth')->name('user.show');

Auth::routes();
