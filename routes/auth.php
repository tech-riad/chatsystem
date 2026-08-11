<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginController;

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class,'index'])->name('login');

    Route::post('/login', [LoginController::class,'authenticate'])
        ->name('login.authenticate');

});

Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class,'logout'])
        ->name('logout');

});
