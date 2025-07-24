<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DoorController;
use App\Http\Middleware\CheckDoorAccess;

Route::get('/doors', [DoorController::class, 'index']);
Route::post('/doors', [DoorController::class, 'store']);

Route::middleware([CheckDoorAccess::class])->group(function () {
    Route::get('/doors/{id}', [DoorController::class, 'show']);
});
