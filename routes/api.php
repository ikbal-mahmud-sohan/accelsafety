<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\ApprovedAccidentController;
use App\Http\Controllers\CompleteSafetyObservationController;
use App\Http\Controllers\SafetyObservationController;
use App\Http\Controllers\TrainingController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::prefix('v1')->group(function(){
    // Route::apiResource('accident', AccidentController::class);
    Route::get('/accident', [AccidentController::class,'index']);
    Route::post('/accident', [AccidentController::class,'store']);
    Route::get('/accident/{accident}', [AccidentController::class,'show']);
    Route::post('/accident/{accident}', [AccidentController::class,'update']);
    Route::delete('/accident/{accident}', [AccidentController::class,'destroy']);

    Route::patch('accident/{accident}/approved', ApprovedAccidentController::class);
});

Route::prefix('v1')->group(function(){
    Route::get('/safety', [SafetyObservationController::class,'index']);
    Route::post('/safety', [SafetyObservationController::class,'store']);
    Route::get('/safety/{safetyObservation}', [SafetyObservationController::class,'show']);
    Route::post('/safety/{safetyObservation}', [SafetyObservationController::class,'update']);
    Route::delete('/safety/{safetyObservation}', [SafetyObservationController::class,'destroy']);
    
    Route::patch('/safety/{safety}/complete', CompleteSafetyObservationController::class);
});

Route::prefix('v1')->group(function(){
    Route::get('/training', [TrainingController::class,'index']);
    Route::post('/training', [TrainingController::class,'store']);
    Route::get('/training/{training}', [TrainingController::class,'show']);
    Route::post('/training/{training}', [TrainingController::class,'update']);
    Route::delete('/training/{training}', [TrainingController::class,'destroy']);
});
