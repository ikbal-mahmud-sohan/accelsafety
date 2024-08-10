<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\CompleteSafetyObservation;
use App\Http\Controllers\CompleteSafetyObservationController;
use App\Http\Controllers\SafetyObservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){
    Route::apiResource('accident', AccidentController::class);
});

Route::prefix('v1')->group(function(){
    Route::apiResource('safety-observation', SafetyObservationController::class);
    Route::patch('/safety-observation/{safety}/complete', CompleteSafetyObservationController::class);
});
