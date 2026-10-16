<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function(){
    Route::get('profile/update',[AccountController::class,'profileUpdate'])->name('profile.update');
     Route::get('profile/update/post',[AccountController::class,'profileUpdatePost'])->name('profile.update.post');
    //   Route::get('profile/update',[Users\AccountController::class,'index'])->name('profile.update');
    //    Route::get('profile/update',[Users\AccountController::class,'index'])->name('profile.update');
});

