<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\Api\SessionController;
use App\Http\Controllers\Api\ChatController;

Route::middleware('auth:sanctum')->group(function () {
    Route::prefix('session')->group(function () {
        Route::get('status', [SessionController::class, 'status']);
        Route::post('create', [SessionController::class, 'create']);
        Route::post('close', [SessionController::class, 'close']);
    });

    Route::prefix('chats')->group(function () {
        Route::post('/', [ChatController::class, 'list']);
        Route::post('send', [ChatController::class, 'send']);
    });
});
