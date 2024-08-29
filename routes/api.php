<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\ApprovedAccidentController;
use App\Http\Controllers\AssignMultipleTrainingController;
use App\Http\Controllers\AssignSpecialTrainingController;
use App\Http\Controllers\AssignTrainingController;
use App\Http\Controllers\CompleteSafetyObservationController;
use App\Http\Controllers\EmployeeDepartmentController;
use App\Http\Controllers\EmployeeDesignationController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\EmployeeUnitController;
use App\Http\Controllers\SafetyObservationController;
use App\Http\Controllers\TrainingAssesmentController;
use App\Http\Controllers\TrainingAttendenceController;
use App\Http\Controllers\TrainingController;
use App\Http\Controllers\TrainingTopicsController;
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
    Route::get('/trainingAttendence', [TrainingAttendenceController::class,'index']);
    Route::post('/trainingAttendence', [TrainingAttendenceController::class,'store']);
    Route::get('/trainingAttendence/{trainingAttendence}', [TrainingAttendenceController::class,'show']);
    Route::post('/trainingAttendence/{trainingAttendence}', [TrainingAttendenceController::class,'update']);
    Route::delete('/trainingAttendence/{trainingAttendence}', [TrainingAttendenceController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/employee', [EmployeeInfoController::class,'index']);
    Route::post('/employee', [EmployeeInfoController::class,'store']);
    Route::get('/employee/{employeeInfo}', [EmployeeInfoController::class,'show']);
    Route::post('/employee/{employeeInfo}', [EmployeeInfoController::class,'update']);
    Route::delete('/employee/{employeeInfo}', [EmployeeInfoController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/department', [EmployeeDepartmentController::class,'index']);
    Route::post('/department', [EmployeeDepartmentController::class,'store']);
    Route::get('/department/{employee_department}', [EmployeeDepartmentController::class,'show']);
    Route::post('/department/{employee_department}', [EmployeeDepartmentController::class,'update']);
    Route::delete('/department/{employee_department}', [EmployeeDepartmentController::class,'destroy']);
});
Route::prefix('v1')->group(function(){
    Route::get('/unit', EmployeeUnitController::class);

});

Route::prefix('v1')->group(function(){
    Route::get('/designation', [EmployeeDesignationController::class,'index']);
    Route::post('/designation', [EmployeeDesignationController::class,'store']);
    Route::get('/designation/{employee_designation}', [EmployeeDesignationController::class,'show']);
    Route::post('/designation/{employee_designation}', [EmployeeDesignationController::class,'update']);
    Route::delete('/designation/{employee_designation}', [EmployeeDesignationController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/trainingTopics', [TrainingTopicsController::class,'index']);
    Route::post('/trainingTopics', [TrainingTopicsController::class,'store']);
    Route::get('/trainingTopics/{trainingTopics}', [TrainingTopicsController::class,'show']);
    Route::post('/trainingTopics/{trainingTopics}', [TrainingTopicsController::class,'update']);
    Route::delete('/trainingTopics/{trainingTopics}', [TrainingTopicsController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/assign-special-training', [AssignSpecialTrainingController::class,'index']);
    Route::post('/assign-special-training', [AssignSpecialTrainingController::class,'store']);
    Route::get('/assign-special-training/{assignSpecialTraining}', [AssignSpecialTrainingController::class,'show']);
    Route::post('/assign-special-training/{assignSpecialTraining}', [AssignSpecialTrainingController::class,'update']);
    Route::delete('/assign-special-training/{assignSpecialTraining}', [AssignSpecialTrainingController::class,'destroy']);

    Route::get('/training-assesments', TrainingAssesmentController::class);
});

Route::prefix('v1')->group(function(){
    Route::get('/assign-training', [AssignTrainingController::class,'index']);
    Route::post('/assign-training', [AssignTrainingController::class,'store']);
    Route::get('/assign-training/{assignTraining}', [AssignTrainingController::class,'show']);
    Route::post('/assign-training/{assignTraining}', [AssignTrainingController::class,'update']);
    Route::delete('/assign-training/{assignTraining}', [AssignTrainingController::class,'destroy']);

    Route::post('/assign-multiple-training', AssignMultipleTrainingController::class);
    Route::get('/training-assesments', TrainingAssesmentController::class);
});


