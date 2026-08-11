<?php

use App\Http\Controllers\Admin\LoginController;
use Illuminate\Support\Facades\Route;

Route::middleware('guest')->group(function () {

    Route::get('/login', [LoginController::class,'index'])->name('login');

    Route::post('/login', [LoginController::class,'authenticate'])
        ->name('login.authenticate');

});

Route::middleware('auth')->group(function () {

    Route::post('/logout', [LoginController::class,'logout'])
        ->name('logout');

});
