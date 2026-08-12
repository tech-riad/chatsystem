<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Chat\MessageController;

Route::get('/', function () {
    return view('welcome');
});

Route::middleware('auth')->group(function () {

    Route::post('/chat/{group}/send', [MessageController::class, 'store'])
        ->name('chat.message.store');

});

require __DIR__.'/auth.php';

require __DIR__.'/admin.php';

require __DIR__.'/user.php';
