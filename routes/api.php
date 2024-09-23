<?php

use App\Http\Controllers\AccidentController;
use App\Http\Controllers\AccidentDropDownController;
use App\Http\Controllers\AccidentInjuryTypeController;
use App\Http\Controllers\AccidentInvestigationController;
use App\Http\Controllers\AccidentMonthController;
use App\Http\Controllers\AccidentTypeController;
use App\Http\Controllers\ApprovedAccidentController;
use App\Http\Controllers\AssignMultipleTrainingController;
use App\Http\Controllers\AssignSpecialTrainingController;
use App\Http\Controllers\AssignTrainingController;
use App\Http\Controllers\CompleteSafetyObservationController;
use App\Http\Controllers\EmployeeDepartmentController;
use App\Http\Controllers\EmployeeDesignationController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\EmployeeUnitController;
use App\Http\Controllers\HiraActivityController;
use App\Http\Controllers\HiraAdministrativeController;
use App\Http\Controllers\HiraCauseController;
use App\Http\Controllers\HiraController;
use App\Http\Controllers\HiraEngineeringController;
use App\Http\Controllers\HiraEventController;
use App\Http\Controllers\HiraImpactController;
use App\Http\Controllers\HiraOccupationsController;
use App\Http\Controllers\HiraPPEController;
use App\Http\Controllers\HiraProcessController;
use App\Http\Controllers\HiraTypeOfActivityController;
use App\Http\Controllers\safetyDropDownController;
use App\Http\Controllers\SafetyObservationController;
use App\Http\Controllers\SafetyObservationOwnerDepartmentController;
use App\Http\Controllers\SafetyObservationPlantNameController;
use App\Http\Controllers\SafetyObservationRespDepartmentController;
use App\Http\Controllers\TrainingAssesmentController;
use App\Http\Controllers\TrainingAttendenceController;
use App\Http\Controllers\TrainingTopicsController;
use App\Http\Controllers\HiraLocationController;
use App\Models\HiraProcess;
use App\Models\HiraTypeOfActivity;
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
    Route::get('/accident-drop-down', AccidentDropDownController::class);

});
Route::prefix('v1')->group(function(){
    Route::get('/accident-month', [AccidentMonthController::class,'index']);
    Route::post('/accident-month', [AccidentMonthController::class,'store']);
    Route::delete('/accident-month/{accidentMonth}', [AccidentMonthController::class,'destroy']);
});
Route::prefix('v1')->group(function(){
    Route::get('/accident-injury-type', [AccidentInjuryTypeController::class,'index']);
    Route::post('/accident-injury-type', [AccidentInjuryTypeController::class,'store']);
    Route::delete('/accident-injury-type/{accidentInjuryType}', [AccidentInjuryTypeController::class,'destroy']);
});
Route::prefix('v1')->group(function(){
    Route::get('/accident-type', [AccidentTypeController::class,'index']);
    Route::post('/accident-type', [AccidentTypeController::class,'store']);
    Route::delete('/accident-type/{accidentType}', [AccidentTypeController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/accident-investigation', [AccidentInvestigationController::class,'index']);
    Route::post('/accident-investigation', [AccidentInvestigationController::class,'store']);
    Route::get('/accident-investigation/{accidentInvestigation}', [AccidentInvestigationController::class,'show']);
    Route::post('/accident-investigation/{accidentInvestigation}', [AccidentInvestigationController::class,'update']);
    Route::delete('/accident-investigation/{accidentInvestigation}', [AccidentInvestigationController::class,'destroy']);

});

// End Accident

Route::prefix('v1')->group(function(){
    Route::get('/safety', [SafetyObservationController::class,'index']);
    Route::post('/safety', [SafetyObservationController::class,'store']);
    Route::get('/safety/{safetyObservation}', [SafetyObservationController::class,'show']);
    Route::post('/safety/{safetyObservation}', [SafetyObservationController::class,'update']);
    Route::delete('/safety/{safetyObservation}', [SafetyObservationController::class,'destroy']);
    
    Route::patch('/safety/{safety}/complete', CompleteSafetyObservationController::class);
    Route::get('/safety-drop-down', safetyDropDownController::class);

});

Route::prefix('v1')->group(function(){
    Route::get('/safety-resp-department', [SafetyObservationRespDepartmentController::class,'index']);
    Route::post('/safety-resp-department', [SafetyObservationRespDepartmentController::class,'store']);
    Route::delete('/safety-resp-department/{safetyObservationRespDepartment}', [SafetyObservationRespDepartmentController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/safety-owner-department', [SafetyObservationOwnerDepartmentController::class,'index']);
    Route::post('/safety-owner-department', [SafetyObservationOwnerDepartmentController::class,'store']);
    Route::delete('/safety-owner-department/{safetyObservationOwnerDepartment}', [SafetyObservationOwnerDepartmentController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/safety-plant', [SafetyObservationPlantNameController::class,'index']);
    Route::post('/safety-plant', [SafetyObservationPlantNameController::class,'store']);
    Route::delete('/safety-plant/{safetyObservationPlantName}', [SafetyObservationPlantNameController::class,'destroy']);
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

Route::prefix('v1')->group(function(){
    Route::get('/hira', [HiraController::class,'index']);
    Route::post('/hira', [HiraController::class,'store']);
    Route::get('/hira/{hira}', [HiraController::class,'show']);
    Route::post('/hira/{hira}', [HiraController::class,'update']);
    Route::delete('/hira/{hira}', [HiraController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-process', [HiraProcessController::class,'index']);
    Route::post('/hira-process', [HiraProcessController::class,'store']);
    Route::delete('/hira-process/{hiraProcess}', [HiraProcessController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-activity', [HiraActivityController::class,'index']);
    Route::post('/hira-activity', [HiraActivityController::class,'store']);
    Route::delete('/hira-activity/{hiraActivity}', [HiraActivityController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-type-of-Activity', [HiraTypeOfActivityController::class,'index']);
    Route::post('/hira-type-of-Activity', [HiraTypeOfActivityController::class,'store']);
    Route::delete('/hira-type-of-Activity/{hiraTypeOfActivity}', [HiraTypeOfActivityController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-occupations', [HiraOccupationsController::class,'index']);
    Route::post('/hira-occupations', [HiraOccupationsController::class,'store']);
    Route::delete('/hira-occupations/{hiraOccupations}', [HiraOccupationsController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-event', [HiraEventController::class,'index']);
    Route::post('/hira-event', [HiraEventController::class,'store']);
    Route::delete('/hira-event/{hiraEvent}', [HiraEventController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-cause', [HiraCauseController::class,'index']);
    Route::post('/hira-cause', [HiraCauseController::class,'store']);
    Route::delete('/hira-cause/{hiraCause}', [HiraCauseController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-impact', [HiraImpactController::class,'index']);
    Route::post('/hira-impact', [HiraImpactController::class,'store']);
    Route::delete('/hira-impact/{hiraImpact}', [HiraImpactController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-engineering', [HiraEngineeringController::class,'index']);
    Route::post('/hira-engineering', [HiraEngineeringController::class,'store']);
    Route::delete('/hira-engineering/{hiraEngineering}', [HiraEngineeringController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-administrative', [HiraAdministrativeController::class,'index']);
    Route::post('/hira-administrative', [HiraAdministrativeController::class,'store']);
    Route::delete('/hira-administrative/{hiraAdministrative}', [HiraAdministrativeController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hira-ppe', [HiraPPEController::class,'index']);
    Route::post('/hira-ppe', [HiraPPEController::class,'store']);
    Route::delete('/hira-ppe/{hiraPPE}', [HiraPPEController::class,'destroy']);
});


Route::prefix('v1')->group(function(){
    Route::get('/hira-location', [HiraLocationController::class,'index']);
    Route::post('/hira-location', [HiraLocationController::class,'store']);
    Route::delete('/hira-location/{hiraLocation}', [HiraLocationController::class,'destroy']);
});


