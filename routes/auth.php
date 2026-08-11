<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;
use App\Http\Controllers\Auth\RegisterController;

Route::middleware('guest')->group(function(){

    Route::get('/login',[LoginController::class,'login'])->name('login');

    Route::post('/login',[LoginController::class,'authenticate']);

    Route::get('/register',[RegisterController::class,'register']);

    Route::post('/register',[RegisterController::class,'store']);

});

Route::post('/logout',[LoginController::class,'logout'])->middleware('auth');
