<?php

use App\Http\Controllers\Auth;
use Illuminate\Support\Facades\Route;

Route::name('auth.')->group(function(){
    Route::get('register',[AuthController::class,'registerPage'])->name('register');
    Route::post('register/post',[AuthController::class,'registerPost'])->name('register.post');
    Route::get('login',[AuthController::class,'loginPage'])->name('login');
    Route::post('login/submit',[AuthController::class,'loginPost'])->name('login.post');
});
