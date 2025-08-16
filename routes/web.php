<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CustomerController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\UserController;

// Home route - show login form
Route::get('/', [LoginController::class, 'showLoginForm'])->name('home');

// User Registration Routes
Route::get('/users/register', [UserController::class, 'showRegisterForm'])->name('users.register');
Route::post('/users/register', [UserController::class, 'register'])->name('users.register.post');

// User Authentication Routes (Login & Logout)
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login'])->name('login.post');
Route::post('/logout', [LoginController::class, 'logout'])->name('logout');

// Customer Management Routes


Route::get('/customers', [CustomerController::class, 'index'])->middleware('auth')->name('customers.index');
Route::get('/customers/{id}/edit', [CustomerController::class, 'edit'])->name('customers.edit');
Route::post('/customers/{id}/update', [CustomerController::class, 'update'])->name('customers.update');
Route::post('/customers/{id}/delete', [CustomerController::class, 'destroy'])->name('customers.destroy');
Route::get('/customers/create', [CustomerController::class, 'create'])->name('customers.create');



