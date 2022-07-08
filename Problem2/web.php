<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::prefix('building')->group(function () {
    Route::get('', [RoomController::class, 'index']);
    Route::get('/{room}', [RoomController::class, 'room']);
});