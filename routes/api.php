<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\ApprovedAccidentController;
use App\Http\Controllers\CompleteSafetyObservationController;
use App\Http\Controllers\SafetyObservationController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){
    Route::apiResource('accident', AccidentController::class);
    Route::patch('accident/{accident}/approved', ApprovedAccidentController::class);
});

Route::prefix('v1')->group(function(){
    Route::get('/safety', [SafetyObservationController::class,'index']);
    Route::post('/safety', [SafetyObservationController::class,'store']);
    Route::get('/safety/{safetyObservation}', [SafetyObservationController::class,'show']);
    Route::put('/safety/{safetyObservation}', [SafetyObservationController::class,'update']);
    Route::delete('/safety/{safetyObservation}', [SafetyObservationController::class,'destroy']);
    Route::patch('/safety/{safety}/complete', CompleteSafetyObservationController::class);
});
