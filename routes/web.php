<?php

use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\TransactionController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\WalletController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->middleware('auth')->name('home');

// Wallet
// Route::get('/wallets', [WalletController::class, 'index'])->middleware('auth')->name('wallet.index');
// Route::get('/wallets/create', [WalletController::class, 'create'])->middleware('auth')->name('wallet.create');
Route::get('/wallets/{wallet}', [WalletController::class, 'show'])->middleware('auth')->name('wallet.show');
// Route::get('/wallets/{wallet}/edit', [WalletController::class, 'edit'])->middleware('auth')->name('wallet.edit');

// Transaction
Route::get('/transaction-type', [TransactionController::class, 'indexTransactionType'])->middleware('auth')->name('transaction-type.index');
Route::get('/transaction-type/create', [TransactionController::class, 'createTransactionType'])->middleware('auth')->name('transaction-type.create');
Route::get('/transaction-type/{transaction_type}/edit', [TransactionController::class, 'editTransactionType'])->middleware('auth')->name('transaction-type.edit');

// Category
Route::get('/category', [CategoryController::class, 'indexCategory'])->middleware('auth')->name('category.index');
Route::get('/category/create', [CategoryController::class, 'createCategory'])->middleware('auth')->name('category.create');
Route::get('/category/{category}/edit', [CategoryController::class, 'editCategory'])->middleware('auth')->name('category.edit');
// Sub Category
Route::get('/sub-category', [CategoryController::class, 'indexSubCategory'])->middleware('auth')->name('sub-category.index');
Route::get('/sub-category/create', [CategoryController::class, 'createSubCategory'])->middleware('auth')->name('sub-category.create');
Route::get('/sub-category/{sub_category}/edit', [CategoryController::class, 'editSubCategory'])->middleware('auth')->name('sub-category.edit');

// User
Route::get('/users', [UserController::class, 'index'])->middleware('auth')->name('user.index');
Route::get('/users/create', [UserController::class, 'create'])->middleware('auth')->name('user.create');
Route::get('/users/{user}', [UserController::class, 'show'])->middleware('auth')->name('user.show');

// Auth
Route::get('/login', [LoginController::class, 'create'])->name('login');
Route::post('/login', [LoginController::class, 'store']);
Route::post('/logout', [LoginController::class, 'destroy'])->name('logout');
