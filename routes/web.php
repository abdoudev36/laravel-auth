<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ItemsController;

/*
|--------------------------------------------------------------------------
| Home Routes
|--------------------------------------------------------------------------
*/
Route::get('/', [HomeController::class, 'index'])->name('home');

/*
|--------------------------------------------------------------------------
| Auth Routes
|--------------------------------------------------------------------------
*/
Route::get('/auth/login', [AuthController::class, 'login'])->name('login');
Route::post('/auth/login', [AuthController::class, 'signin'])->name('login');
Route::get('/auth/signup', [AuthController::class, 'signup'])->name('signup');
Route::post('/auth/signup', [AuthController::class, 'create'])->name('signup');

Route::get('/auth/logout', [AuthController::class, 'logout'])->name('logout');