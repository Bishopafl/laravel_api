<?php

use App\Http\Controllers\API\V2\CompleteTaskController;
use App\Http\Controllers\API\V2\TaskController;
use Illuminate\Support\Facades\Route;

Route::middleware('auth:sanctum')->prefix('v2')->group(function () {
    Route::apiResource('/tasks', TaskController::class);
    Route::patch('/tasks/{task}/complete', CompleteTaskController::class);
});