<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\front\Home\HomeController;
use App\Http\Controllers\front\Auth\AuthController;
use App\Http\Controllers\front\Profile\ProfileController;
use App\Http\Controllers\front\Auth\SocialController;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('auth/facebook', [SocialController::class, 'facebookRedirect'])->name('auth.facebook');
Route::get('auth/facebook/callback', [SocialController::class, 'loginWithFacebook']);

route::get('/',[HomeController::class,'index'])->name('/');
Route::get('/logout', [AuthController::class, 'logout'] )->name('auth.logout');
//Login and Register
route::post('login',[AuthController::class,'login'])->name('login');
route::post('register',[AuthController::class,'register'])->name('register');

Route::group(['prefix'=>'user','middleware'=>'auth:user'], function(){
    Route::get('/profile', [ProfileController::class, 'index'] )->name('profile.edit');
    Route::post('/profile', [ProfileController::class, 'update'] )->name('profile.post');


});