<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;

Route::get('/', function () {
    return view('index');
});

//Dashboard
Route::get('/admin/dashboard', [DashboardController::class, 'admin']);
Route::get('/customer/dashboard', [DashboardController::class, 'customer']);
Route::get('/kurir/dashboard', [DashboardController::class, 'kurir']);

//Admin Users
Route::get('/admin/user', [UserController::class, 'index']);
Route::post('/admin/user/store', [UserController::class, 'store']);
Route::put('/admin/user/update/{id}', [UserController::class, 'update']);
Route::delete('/admin/user/delete/{id}', [UserController::class, 'destroy']);

//profile
Route::get('/admin/profile', [ProfilController::class, 'admin']);

Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});