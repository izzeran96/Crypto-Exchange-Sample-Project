<?php

use App\Http\Controllers\Users;
use Illuminate\Support\Facades\Route;

Route::name('client.')->group(function(){
    Route::get('profile',[Users\AccountController::class,'index'])->name('profile.index');
    Route::get('profile/update',[Users\AccountController::class,'profileEdit'])->name('profile.update');
    Route::get('profile/post',[Users\AccountController::class,'profileEditPost'])->name('profile.updatePost');
});


