<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RoomController;

Route::get('/building/{room?}', [RoomController::class, 'room']);