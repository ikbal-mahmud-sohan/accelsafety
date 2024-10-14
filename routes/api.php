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
use App\Http\Controllers\HseChemicalHandlingController;
use App\Http\Controllers\HseChemicalRegisterController;
use App\Http\Controllers\HseCompressedGasController;
use App\Http\Controllers\HseControlVisitorsDocController;
use App\Http\Controllers\HseEarthingPitConditionController;
use App\Http\Controllers\HseElectricalSafetyController;
use App\Http\Controllers\HseEntryConfinedChecklistController;
use App\Http\Controllers\HseEntryConfinedSpaceController;
use App\Http\Controllers\HseExcavationProcedureController;
use App\Http\Controllers\HseFireSafetySystemController;
use App\Http\Controllers\HseHarnessChecklistController;
use App\Http\Controllers\HseHotWorkChecklistController;
use App\Http\Controllers\HseHotWorkController;
use App\Http\Controllers\HseHouseKeepingController;
use App\Http\Controllers\HseLadderSelfInspectionChecklistController;
use App\Http\Controllers\HseLiftingLooseGearsController;
use App\Http\Controllers\HSELightningProtectionController;
use App\Http\Controllers\HseListConfinedSpaceController;
use App\Http\Controllers\HseListPressureVesselsController;
use App\Http\Controllers\HseLOTOController;
use App\Http\Controllers\HseLottoFormController;
use App\Http\Controllers\HseMasterListLiftingEquipmentsController;
use App\Http\Controllers\HseMaterialProcedureController;
use App\Http\Controllers\HseMobileCranePlanningRiskAssessmentDocController;
use App\Http\Controllers\HseMobileCraneSafetyProcedureDocController;
use App\Http\Controllers\HseNoiseIntensityMeasurementController;
use App\Http\Controllers\HsePermitWorkController;
use App\Http\Controllers\HsePermitWorkFormController;
use App\Http\Controllers\HsePersonalProtectiveController;
use App\Http\Controllers\HsePPEDistributionRegisterController;
use App\Http\Controllers\HsePressureVesselController;
use App\Http\Controllers\HseSafeCraneOperationController;
use App\Http\Controllers\HseSightHearingProtectionController;
use App\Http\Controllers\HseTimberBlockRequiredUnderMobileCraneDocController;
use App\Http\Controllers\HseVehicleSafetyController;
use App\Http\Controllers\HseVehicleSafetyDocController;
use App\Http\Controllers\HseWorkatHeightController;
use App\Http\Controllers\LightIntensityMeasurementController;
use App\Http\Controllers\SafetyPowerToolsController;
use App\Http\Controllers\StatusHseSightHearingProtectionController;
use App\Http\Controllers\StatusHseVehicleSafetyDocsController;
use App\Http\Controllers\StatusHseWorkatHeightController;
use App\Http\Controllers\StatusSafetyPowerToolsController;
use App\Http\Requests\StoreHseLadderSelfInspectionChecklistRequest;
use App\Models\HiraProcess;
use App\Models\HiraTypeOfActivity;
use App\Models\HseEntryConfinedSpace;
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

Route::prefix('v1')->group(function(){
    Route::get('/hse-control-visitors', [HseControlVisitorsDocController::class,'index']);
    Route::post('/hse-control-visitors', [HseControlVisitorsDocController::class,'store']);
    Route::get('/hse-control-visitors/{hseControlVisitorsDoc}', [HseControlVisitorsDocController::class,'show']);
    Route::post('/hse-control-visitors/{hseControlVisitorsDoc}', [HseControlVisitorsDocController::class,'update']);
    Route::delete('/hse-control-visitors/{hseControlVisitorsDoc}', [HseControlVisitorsDocController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-vehicle-safety', [HseVehicleSafetyController::class,'index']);
    Route::post('/hse-vehicle-safety', [HseVehicleSafetyController::class,'store']);
    Route::get('/hse-vehicle-safety/{hseVehicleSafety}', [HseVehicleSafetyController::class,'show']);
    Route::post('/hse-vehicle-safety/{hseVehicleSafety}', [HseVehicleSafetyController::class,'update']);
    Route::delete('/hse-vehicle-safety/{hseVehicleSafety}', [HseVehicleSafetyController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-vehicle-safety-doc', [HseVehicleSafetyDocController::class,'index']);
    Route::post('/hse-vehicle-safety-doc', [HseVehicleSafetyDocController::class,'store']);
    Route::get('/hse-vehicle-safety-doc/{hseVehicleSafetyDoc}', [HseVehicleSafetyDocController::class,'show']);
    Route::post('/hse-vehicle-safety-doc/{hseVehicleSafetyDoc}', [HseVehicleSafetyDocController::class,'update']);
    Route::delete('/hse-vehicle-safety-doc/{hseVehicleSafetyDoc}', [HseVehicleSafetyDocController::class,'destroy']);
    Route::post('/hse-vehicle-safety-status/{hseVehicleSafetyDoc}', StatusHseVehicleSafetyDocsController::class);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-safety-power-tools', [SafetyPowerToolsController::class,'index']);
    Route::post('/hse-safety-power-tools', [SafetyPowerToolsController::class,'store']);
    Route::get('/hse-safety-power-tools/{safetyPowerTools}', [SafetyPowerToolsController::class,'show']);
    Route::post('/hse-safety-power-tools/{safetyPowerTools}', [SafetyPowerToolsController::class,'update']);
    Route::delete('/hse-safety-power-tools/{safetyPowerTools}', [SafetyPowerToolsController::class,'destroy']);
    Route::post('/hse-safety-power-tools-status/{safetyPowerTools}', StatusSafetyPowerToolsController::class);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-sight-hearing-protection', [HseSightHearingProtectionController::class,'index']);
    Route::post('/hse-sight-hearing-protection', [HseSightHearingProtectionController::class,'store']);
    Route::get('/hse-sight-hearing-protection/{hseSightHearingProtection}', [HseSightHearingProtectionController::class,'show']);
    Route::post('/hse-sight-hearing-protection/{hseSightHearingProtection}', [HseSightHearingProtectionController::class,'update']);
    Route::delete('/hse-sight-hearing-protection/{hseSightHearingProtection}', [HseSightHearingProtectionController::class,'destroy']);
    Route::post('/hse-sight-hearing-protection-status/{hseSightHearingProtection}', StatusHseSightHearingProtectionController::class);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-noise-intensity-measurement', [HseNoiseIntensityMeasurementController::class,'index']);
    Route::post('/hse-noise-intensity-measurement', [HseNoiseIntensityMeasurementController::class,'store']);
    Route::get('/hse-noise-intensity-measurement/{hseNoiseIntensityMeasurement}', [HseNoiseIntensityMeasurementController::class,'show']);
    Route::post('/hse-noise-intensity-measurement/{hseNoiseIntensityMeasurement}', [HseNoiseIntensityMeasurementController::class,'update']);
    Route::delete('/hse-noise-intensity-measurement/{hseNoiseIntensityMeasurement}', [HseNoiseIntensityMeasurementController::class,'destroy']);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-light-intensity-measurement', [LightIntensityMeasurementController::class,'index']);
    Route::post('/hse-light-intensity-measurement', [LightIntensityMeasurementController::class,'store']);
    Route::get('/hse-light-intensity-measurement/{lightIntensityMeasurement}', [LightIntensityMeasurementController::class,'show']);
    Route::post('/hse-light-intensity-measurement/{lightIntensityMeasurement}', [LightIntensityMeasurementController::class,'update']);
    Route::delete('/hse-light-intensity-measurement/{lightIntensityMeasurement}', [LightIntensityMeasurementController::class,'destroy']);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-work-at-height', [HseWorkatHeightController::class,'index']);
    Route::post('/hse-work-at-height', [HseWorkatHeightController::class,'store']);
    Route::get('/hse-work-at-height/{hseWorkatHeight}', [HseWorkatHeightController::class,'show']);
    Route::post('/hse-work-at-height/{hseWorkatHeight}', [HseWorkatHeightController::class,'update']);
    Route::delete('/hse-work-at-height/{hseWorkatHeight}', [HseWorkatHeightController::class,'destroy']);
    Route::post('/hse-work-at-height-status/{hseWorkatHeight}', StatusHseWorkatHeightController::class);

});
// 5-10-2024 
Route::prefix('v1')->group(function(){
    Route::get('/hse-safe-crane-operation', [HseSafeCraneOperationController::class,'index']);
    Route::post('/hse-safe-crane-operation', [HseSafeCraneOperationController::class,'store']);
    Route::get('/hse-safe-crane-operation/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'show']);
    Route::post('/hse-safe-crane-operation/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'update']);
    Route::delete('/hse-safe-crane-operation/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'destroy']);
    Route::post('/hse-safe-crane-operation-status/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-mobile-crane-planning-risk-assessment', [HseMobileCranePlanningRiskAssessmentDocController::class,'index']);
    Route::post('/hse-mobile-crane-planning-risk-assessment', [HseMobileCranePlanningRiskAssessmentDocController::class,'store']);
    Route::get('/hse-mobile-crane-planning-risk-assessment/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'show']);
    Route::post('/hse-mobile-crane-planning-risk-assessment/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'update']);
    Route::delete('/hse-mobile-crane-planning-risk-assessment/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'destroy']);
    Route::post('/hse-mobile-crane-planning-risk-assessment-status/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-mobile-crane-safety-procedure', [HseMobileCraneSafetyProcedureDocController::class,'index']);
    Route::post('/hse-mobile-crane-safety-procedure', [HseMobileCraneSafetyProcedureDocController::class,'store']);
    Route::get('/hse-mobile-crane-safety-procedure/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'show']);
    Route::post('/hse-mobile-crane-safety-procedure/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'update']);
    Route::delete('/hse-mobile-crane-safety-procedure/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'destroy']);
    Route::post('/hse-mobile-crane-safety-procedure-status/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-timber-block-required-under-mobile-crane', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'index']);
    Route::post('/hse-timber-block-required-under-mobile-crane', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'store']);
    Route::get('/hse-timber-block-required-under-mobile-crane/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'show']);
    Route::post('/hse-timber-block-required-under-mobile-crane/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'update']);
    Route::delete('/hse-timber-block-required-under-mobile-crane/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'destroy']);
    Route::post('/hse-timber-block-required-under-mobile-crane-status/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'edit']);
});
// 7/9/24 
Route::prefix('v1')->group(function(){
    Route::get('/hse-entry-confined-space', [HseEntryConfinedSpaceController::class,'index']);
    Route::post('/hse-entry-confined-space', [HseEntryConfinedSpaceController::class,'store']);
    Route::get('/hse-entry-confined-space/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'show']);
    Route::post('/hse-entry-confined-space/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'update']);
    Route::delete('/hse-entry-confined-space/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'destroy']);
    Route::post('/hse-entry-confined-space-status/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-entry-confined-check', [HseEntryConfinedChecklistController::class,'index']);
    Route::post('/hse-entry-confined-check', [HseEntryConfinedChecklistController::class,'store']);
    Route::get('/hse-entry-confined-check/{hseEntryConfinedChecklist}', [HseEntryConfinedChecklistController::class,'show']);
    Route::delete('/hse-entry-confined-check/{hseEntryConfinedChecklist}', [HseEntryConfinedChecklistController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-confined-space', [HseListConfinedSpaceController::class,'index']);
    Route::post('/hse-confined-space', [HseListConfinedSpaceController::class,'store']);
    Route::get('/hse-confined-space/{hseListConfinedSpace}', [HseListConfinedSpaceController::class,'show']);
    Route::delete('/hse-confined-space/{hseListConfinedSpace}', [HseListConfinedSpaceController::class,'destroy']);
});


Route::prefix('v1')->group(function(){
    Route::get('/hse-pressure-vessel', [HsePressureVesselController::class,'index']);
    Route::post('/hse-pressure-vessel', [HsePressureVesselController::class,'store']);
    Route::get('/hse-pressure-vessel/{hsePressureVessel}', [HsePressureVesselController::class,'show']);
    Route::post('/hse-pressure-vessel/{hsePressureVessel}', [HsePressureVesselController::class,'update']);
    Route::delete('/hse-pressure-vessel/{hsePressureVessel}', [HsePressureVesselController::class,'destroy']);
    Route::post('/hse-pressure-vessel-status/{hsePressureVessel}', [HsePressureVesselController::class,'edit']);
});


Route::prefix('v1')->group(function(){
    Route::get('/hse-list-pressure-vessels', [HseListPressureVesselsController::class,'index']);
    Route::post('/hse-list-pressure-vessels', [HseListPressureVesselsController::class,'store']);
    Route::get('/hse-list-pressure-vessels/{hseListPressureVessels}', [HseListPressureVesselsController::class,'show']);
    Route::delete('/hse-list-pressure-vessels/{hseListPressureVessels}', [HseListPressureVesselsController::class,'destroy']);
});

// end 7/9/24 

Route::prefix('v1')->group(function(){
    Route::get('/hse-ladder-self-inspection-checklist', [HseLadderSelfInspectionChecklistController::class,'index']);
    Route::post('/hse-ladder-self-inspection-checklist', [HseLadderSelfInspectionChecklistController::class,'store']);
    Route::get('/hse-ladder-self-inspection-checklist/{hseLadderSelfInspectionChecklist}', [HseLadderSelfInspectionChecklistController::class,'show']);
    Route::post('/hse-ladder-self-inspection-checklist/{hseLadderSelfInspectionChecklist}', [HseLadderSelfInspectionChecklistController::class,'update']);
    Route::delete('/hse-ladder-self-inspection-checklist/{hseLadderSelfInspectionChecklist}', [HseLadderSelfInspectionChecklistController::class,'destroy']);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-master-listLifting-equipments', [HseMasterListLiftingEquipmentsController::class,'index']);
    Route::post('/hse-master-listLifting-equipments', [HseMasterListLiftingEquipmentsController::class,'store']);
    Route::get('/hse-master-listLifting-equipments/{hseMasterListLiftingEquipments}', [HseMasterListLiftingEquipmentsController::class,'show']);
    Route::post('/hse-master-listLifting-equipments/{hseMasterListLiftingEquipments}', [HseMasterListLiftingEquipmentsController::class,'update']);
    Route::delete('/hse-master-listLifting-equipments/{hseMasterListLiftingEquipments}', [HseMasterListLiftingEquipmentsController::class,'destroy']);

});

Route::prefix('v1')->group(function(){
    Route::get('/hse-lifting-loose-gears', [HseLiftingLooseGearsController::class,'index']);
    Route::post('/hse-lifting-loose-gears', [HseLiftingLooseGearsController::class,'store']);
    Route::get('/hse-lifting-loose-gears/{hseLiftingLooseGears}', [HseLiftingLooseGearsController::class,'show']);
    Route::post('/hse-lifting-loose-gears/{hseLiftingLooseGears}', [HseLiftingLooseGearsController::class,'update']);
    Route::delete('/hse-lifting-loose-gears/{hseLiftingLooseGears}', [HseLiftingLooseGearsController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-harness', [HseHarnessChecklistController::class,'index']);
    Route::post('/hse-harness', [HseHarnessChecklistController::class,'store']);
    Route::get('/hse-harness/{hseHarnessChecklist}', [HseHarnessChecklistController::class,'show']);
    // Route::post('/hse-harness/{hseHarnessChecklist}', [HseHarnessChecklistController::class,'update']);
    Route::delete('/hse-harness/{hseHarnessChecklist}', [HseHarnessChecklistController::class,'destroy']);
});

// start 8/9/24 

Route::prefix('v1')->group(function(){
    Route::get('/hse-compressed-gas', [HseCompressedGasController::class,'index']);
    Route::post('/hse-compressed-gas', [HseCompressedGasController::class,'store']);
    Route::get('/hse-compressed-gas/{hseCompressedGas}', [HseCompressedGasController::class,'show']);
    Route::post('/hse-compressed-gas/{hseCompressedGas}', [HseCompressedGasController::class,'update']);
    Route::delete('/hse-compressed-gas/{hseCompressedGas}', [HseCompressedGasController::class,'destroy']);
    Route::post('/hse-compressed-gas-status/{hseCompressedGas}', [HseCompressedGasController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-chemical-handling', [HseChemicalHandlingController::class,'index']);
    Route::post('/hse-chemical-handling', [HseChemicalHandlingController::class,'store']);
    Route::get('/hse-chemical-handling/{hseChemicalHandling}', [HseChemicalHandlingController::class,'show']);
    Route::post('/hse-chemical-handling/{hseChemicalHandling}', [HseChemicalHandlingController::class,'update']);
    Route::delete('/hse-chemical-handling/{hseChemicalHandling}', [HseChemicalHandlingController::class,'destroy']);
    Route::post('/hse-chemical-handling-status/{hseChemicalHandling}', [HseChemicalHandlingController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-chemical-register', [HseChemicalRegisterController::class,'index']);
    Route::post('/hse-chemical-register', [HseChemicalRegisterController::class,'store']);
    Route::get('/hse-chemical-register/{hseChemicalRegister}', [HseChemicalRegisterController::class,'show']);
    Route::delete('/hse-chemical-register/{hseChemicalRegister}', [HseChemicalRegisterController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-hot-work', [HseHotWorkController::class,'index']);
    Route::post('/hse-hot-work', [HseHotWorkController::class,'store']);
    Route::get('/hse-hot-work/{hseHotWork}', [HseHotWorkController::class,'show']);
    Route::post('/hse-hot-work/{hseHotWork}', [HseHotWorkController::class,'update']);
    Route::delete('/hse-hot-work/{hseHotWork}', [HseHotWorkController::class,'destroy']);
    Route::post('/hse-hot-work-status/{hseHotWork}', [HseHotWorkController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-hot-work-checklist', [HseHotWorkChecklistController::class,'index']);
    Route::post('/hse-hot-work-checklist', [HseHotWorkChecklistController::class,'store']);
    Route::get('/hse-hot-work-checklist/{hseHotWorkChecklist}', [HseHotWorkChecklistController::class,'show']);
    Route::delete('/hse-hot-work-checklist/{hseHotWorkChecklist}', [HseHotWorkChecklistController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/fire-safety-system', [HseFireSafetySystemController::class,'index']);
    Route::post('/fire-safety-system', [HseFireSafetySystemController::class,'store']);
    Route::get('/fire-safety-system/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'show']);
    Route::post('/fire-safety-system/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'update']);
    Route::delete('/fire-safety-system/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'destroy']);
    Route::post('/fire-safety-system-status/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-material-procedure', [HseMaterialProcedureController::class,'index']);
    Route::post('/hse-material-procedure', [HseMaterialProcedureController::class,'store']);
    Route::get('/hse-material-procedure/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'show']);
    Route::post('/hse-material-procedure/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'update']);
    Route::delete('/hse-material-procedure/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'destroy']);
    Route::post('/hse-material-procedure-status/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-house-keeping', [HseHouseKeepingController::class,'index']);
    Route::post('/hse-house-keeping', [HseHouseKeepingController::class,'store']);
    Route::get('/hse-house-keeping/{hseHouseKeeping}', [HseHouseKeepingController::class,'show']);
    Route::post('/hse-house-keeping/{hseHouseKeeping}', [HseHouseKeepingController::class,'update']);
    Route::delete('/hse-house-keeping/{hseHouseKeeping}', [HseHouseKeepingController::class,'destroy']);
    Route::post('/hse-house-keeping-status/{hseHouseKeeping}', [HseHouseKeepingController::class,'edit']);
});
// start 9/9/24 


Route::prefix('v1')->group(function(){
    Route::get('/hse-permit-work', [HsePermitWorkController::class,'index']);
    Route::post('/hse-permit-work', [HsePermitWorkController::class,'store']);
    Route::get('/hse-permit-work/{hsePermitWork}', [HsePermitWorkController::class,'show']);
    Route::post('/hse-permit-work/{hsePermitWork}', [HsePermitWorkController::class,'update']);
    Route::delete('/hse-permit-work/{hsePermitWork}', [HsePermitWorkController::class,'destroy']);
    Route::post('/hse-permit-work-status/{hsePermitWork}', [HsePermitWorkController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-permit-work-form', [HsePermitWorkFormController::class,'index']);
    Route::post('/hse-permit-work-form', [HsePermitWorkFormController::class,'store']);
    Route::get('/hse-permit-work-form/{hsePermitWorkForm}', [HsePermitWorkFormController::class,'show']);
    Route::delete('/hse-permit-work-form/{hsePermitWorkForm}', [HsePermitWorkFormController::class,'destroy']);
});


Route::prefix('v1')->group(function(){
    Route::get('/hse-electrical-safety', [HseElectricalSafetyController::class,'index']);
    Route::post('/hse-electrical-safety', [HseElectricalSafetyController::class,'store']);
    Route::get('/hse-electrical-safety/{hseElectricalSafety}', [HseElectricalSafetyController::class,'show']);
    Route::post('/hse-electrical-safety/{hseElectricalSafety}', [HseElectricalSafetyController::class,'update']);
    Route::delete('/hse-electrical-safety/{hseElectricalSafety}', [HseElectricalSafetyController::class,'destroy']);
    Route::post('/hse-electrical-safety-status/{hseElectricalSafety}', [HseElectricalSafetyController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-earthing-pit-condition', [HseEarthingPitConditionController::class,'index']);
    Route::post('/hse-earthing-pit-condition', [HseEarthingPitConditionController::class,'store']);
    Route::get('/hse-earthing-pit-condition/{hseEarthingPitCondition}', [HseEarthingPitConditionController::class,'show']);
    Route::delete('/hse-earthing-pit-condition/{hseEarthingPitCondition}', [HseEarthingPitConditionController::class,'destroy']);
});

// 14/10/24 

Route::prefix('v1')->group(function(){
    Route::get('/hse-lightning-protection', [HSELightningProtectionController::class,'index']);
    Route::post('/hse-lightning-protection', [HSELightningProtectionController::class,'store']);
    Route::get('/hse-lightning-protection/{hSELightningProtection}', [HSELightningProtectionController::class,'show']);
    Route::delete('/hse-lightning-protection/{hSELightningProtection}', [HSELightningProtectionController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-lotto', [HseLOTOController::class,'index']);
    Route::post('/hse-lotto', [HseLOTOController::class,'store']);
    Route::get('/hse-lotto/{hseLOTO}', [HseLOTOController::class,'show']);
    Route::post('/hse-lotto/{hseLOTO}', [HseLOTOController::class,'update']);
    Route::delete('/hse-lotto/{hseLOTO}', [HseLOTOController::class,'destroy']);
    Route::post('/hse-lotto-status/{hseLOTO}', [HseLOTOController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-lotto-form', [HseLottoFormController::class,'index']);
    Route::post('/hse-lotto-form', [HseLottoFormController::class,'store']);
    Route::get('/hse-lotto-form/{hseLottoForm}', [HseLottoFormController::class,'show']);
    Route::delete('/hse-lotto-form/{hseLottoForm}', [HseLottoFormController::class,'destroy']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-excavation-procedure', [HseExcavationProcedureController::class,'index']);
    Route::post('/hse-excavation-procedure', [HseExcavationProcedureController::class,'store']);
    Route::get('/hse-excavation-procedure/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'show']);
    Route::post('/hse-excavation-procedure/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'update']);
    Route::delete('/hse-excavation-procedure/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'destroy']);
    Route::post('/hse-excavation-procedure-status/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-personal-protective', [HsePersonalProtectiveController::class,'index']);
    Route::post('/hse-personal-protective', [HsePersonalProtectiveController::class,'store']);
    Route::get('/hse-personal-protective/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'show']);
    Route::post('/hse-personal-protective/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'update']);
    Route::delete('/hse-personal-protective/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'destroy']);
    Route::post('/hse-personal-protective-status/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'edit']);
});

Route::prefix('v1')->group(function(){
    Route::get('/hse-ppe-distribution-register', [HsePPEDistributionRegisterController::class,'index']);
    Route::post('/hse-ppe-distribution-register', [HsePPEDistributionRegisterController::class,'store']);
    Route::get('/hse-ppe-distribution-register/{hsePPEDistributionRegister}', [HsePPEDistributionRegisterController::class,'show']);
    Route::post('/hse-ppe-distribution-register/{hsePPEDistributionRegister}', [HsePPEDistributionRegisterController::class,'update']);
    Route::delete('/hse-ppe-distribution-register/{hsePPEDistributionRegister}', [HsePPEDistributionRegisterController::class,'destroy']);
});

