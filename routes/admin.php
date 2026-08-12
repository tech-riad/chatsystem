<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Admin\DashboardController;
use App\Http\Controllers\Admin\ChatGroupController;



Route::middleware(['auth','admin'])->prefix('admin')->name('admin.')->group(function(){

    Route::get('/dashboard',[DashboardController::class,'index'])->name('dashboard');


    Route::middleware(['permission:group.view'])->group(function () {
        Route::get('/chat-groups', [ChatGroupController::class, 'index']);
        Route::get('/chat-groups/{chatGroup}', [ChatGroupController::class, 'show']);
    });

    Route::middleware(['permission:group.create'])->group(function () {
        Route::get('/chat-groups/create', [ChatGroupController::class, 'create']);
        Route::post('/chat-groups', [ChatGroupController::class, 'store']);
    });

    Route::middleware(['permission:group.edit'])->group(function () {
        Route::get('/chat-groups/{chatGroup}/edit', [ChatGroupController::class, 'edit']);
        Route::put('/chat-groups/{chatGroup}', [ChatGroupController::class, 'update']);
    });

    Route::middleware(['permission:group.delete'])->group(function () {
        Route::delete('/chat-groups/{chatGroup}', [ChatGroupController::class, 'destroy']);
    });



});

Route::middleware([
    'auth',
    'role:Super Admin|Admin'
])->prefix('admin')->name('admin.')->group(function () {

    Route::resource('chat-groups', ChatGroupController::class);

});
