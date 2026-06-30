<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;
use App\Http\Controllers\Auth\LupaPwController;
use App\Http\Controllers\Auth\ResetPwController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\ProfilController;
use App\Http\Controllers\ProdukController;


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

//Admin Users
Route::get('/admin/produk', [ProdukController::class, 'index']);
Route::post('/admin/produk/store', [ProdukController::class, 'store']);
Route::put('/admin/produk/update/{id}', [ProdukController::class, 'update']);
Route::delete('/admin/produk/delete/{id}', [ProdukController::class, 'destroy']);

//profile
Route::get('/admin/profile', [ProfilController::class, 'admin']);

//login/register
Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
Route::post('/login', [LoginController::class, 'login']);

Route::get('/register', [RegisterController::class, 'showRegistrationForm'])->name('register');
Route::post('/register', [RegisterController::class, 'register']);

Route::get('/lupa-password', [LupaPwController::class, 'showLinkRequestForm'])->name('password.request');
Route::post('/lupa-password', [LupaPwController::class, 'sendResetLinkEmail'])->name('password.email');

Route::get('/reset-password/{token}', [ResetPwController::class, 'showResetForm'])->name('password.reset');
Route::post('/reset-password', [ResetPwController::class, 'reset'])->name('password.update');