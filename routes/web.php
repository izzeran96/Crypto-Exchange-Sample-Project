<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::name('frontpage.')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
});
Route::name('auth.')->group(function () {
    Route::get('register', [AuthController::class, 'registerPage'])
        ->name('register');

    Route::post('register/post', [AuthController::class, 'registerPost'])
        ->name('register.post');

    Route::get('login', [AuthController::class, 'loginPage'])
        ->name('login');

    Route::post('login/submit', [AuthController::class, 'loginPost'])
        ->name('login.post');

    Route::get('2fa-login', [AuthController::class, 'auth2FAlogin'])
        ->name('2fa');
});
