<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\Auth\LoginController;
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

Route::middleware('guest')->group(function () {
    // Login
    Route::get('/login', [LoginController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [LoginController::class, 'login']);
});