<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\PriorityController;
use App\Http\Controllers\StatusController;
use App\Http\Controllers\TaskController;
use Illuminate\Support\Facades\Route;

Route::post('login', [AuthController::class, 'login'])->name('login');

Route::middleware('auth:sanctum')->group(function () {
    Route::resource('tasks', TaskController::class);
    Route::get('/statuses', [StatusController::class, 'index']);
    Route::get('/priorities', [PriorityController::class, 'index']);
});
