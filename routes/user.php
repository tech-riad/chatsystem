<?php

use App\Http\Controllers\Chat\ChatController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\User\DashboardController;

Route::middleware(['auth','user'])

->prefix('user')

->name('user.')

->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');

     Route::get('/chat', [ChatController::class, 'index'])->name('chat.index');
    Route::get('/chat/{group}', [ChatController::class, 'show'])->name('chat.show');

});

