<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Auth\AuthController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|php
*/

 ///////////////////AuthController///////////////////
Route::group(['namespace'=>'Dashboard','prefix'=>'Administration', 'middleware'=>'guest'], function(){
    Route::get('/', [AuthController::class, 'index'] )->name('admin.auth.login');
    Route::post('/attempt', [AuthController::class, 'attempt'] )->name('admin.auth.attempt');
    Route::get('/logout', [AuthController::class, 'logout'] )->name('admin.auth.logout');

    Route::get('/forgot-password', [PasswordResetLinkController::class, 'create']) ->name('password.request');
    Route::post('/forgot-password', [PasswordResetLinkController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [NewPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [NewPasswordController::class, 'store']) ->name('password.update');
    Route::get('/confirm-password', [ConfirmablePasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [ConfirmablePasswordController::class, 'store']) ->middleware('auth:dashboard');

 });
