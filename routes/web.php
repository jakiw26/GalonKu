<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;

Route::get('/', function () {
    return view('index');
});

Route::get('/admin/dashboard', [DashboardController::class, 'admin']);
Route::get('/customer/dashboard', [DashboardController::class, 'customer']);
Route::get('/kurir/dashboard', [DashboardController::class, 'kurir']);


Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});