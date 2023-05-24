<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Dashboard\Auth\AuthController;
use App\Http\Controllers\Dashboard\Auth\ResetPasswordController ;

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
Route::group(['namespace'=>'Dashboard','prefix'=>'Administration','as' =>'admin.', 'middleware'=>'guest'], function(){
    Route::get('/login', [AuthController::class, 'index'] )->name('auth.login');
    Route::post('/attempt', [AuthController::class, 'dologin'] )->name('auth.attempt');
    Route::get('/logout', [AuthController::class, 'logout'] )->name('auth.logout');

    Route::get('/forgot-password', [ResetPasswordController::class, 'index']) ->name('password.request');
    Route::post('/forgot-password', [ResetPasswordController::class, 'store'])->name('password.email');
    Route::get('/reset-password/{token}', [ResetPasswordController::class, 'create'])->name('password.reset');
    Route::post('/reset-password', [ResetPasswordController::class, 'store']) ->name('password.update');
    Route::get('/confirm-password', [ResetPasswordController::class, 'show'])->name('password.confirm');
    Route::post('/confirm-password', [ResetPasswordController::class, 'store']) ->middleware('auth:dashboard');

 });
