<?php

use App\Http\Controllers;
use Illuminate\Support\Facades\Route;

Route::name('frontpage.')->group(function(){
    Route::get('/',[IndexController::class,'index'])->name('index');
});
Route::name('auth.')->group(function(){
    Route::get('register',[AuthController::class,'registerPage'])->name('register');
    Route::post('register/post',[AuthController::class,'registerPost'])->name('register.post');
    Route::get('login',[AuthController::class,'loginPage'])->name('login');
    Route::post('login/submit',[AuthController::class,'loginPost'])->name('login.post');
});

Route::name('client.')->group(function(){
    Route::get('profile/update',[Users\AccountController::class,'index'])->name('profile.update');
});

