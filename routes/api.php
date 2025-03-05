<?php

use App\Http\Controllers\AccelSafetyWordController;
use App\Http\Controllers\AccidentController;
use App\Http\Controllers\AccidentDropDownController;
use App\Http\Controllers\AccidentInjuryTypeController;
use App\Http\Controllers\AccidentInvestigationController;
use App\Http\Controllers\AccidentMonthController;
use App\Http\Controllers\AccidentTypeController;
use App\Http\Controllers\AirCompressorController;
use App\Http\Controllers\AmbulanceController;
use App\Http\Controllers\ApprovedAccidentController;
use App\Http\Controllers\AssignMultipleTrainingController;
use App\Http\Controllers\AssignSpecialTrainingController;
use App\Http\Controllers\AssignTrainingController;
use App\Http\Controllers\CompleteSafetyObservationController;
use App\Http\Controllers\ConcreteMixerController;
use App\Http\Controllers\ConcretePumpController;
use App\Http\Controllers\DumperChecklistController;
use App\Http\Controllers\EarthCompactorController;
use App\Http\Controllers\EmployeeDepartmentController;
use App\Http\Controllers\EmployeeDesignationController;
use App\Http\Controllers\EmployeeInfoController;
use App\Http\Controllers\EmployeeUnitController;
use App\Http\Controllers\ExcavatorChecklistController;
use App\Http\Controllers\HiraActivityController;
use App\Http\Controllers\HiraAdministrativeController;
use App\Http\Controllers\HiraCauseController;
use App\Http\Controllers\HiraController;
use App\Http\Controllers\HiraLitesAssessmentController;
use App\Http\Controllers\HiraEngineeringController;
use App\Http\Controllers\HiraEventController;
use App\Http\Controllers\HiraImpactController;
use App\Http\Controllers\HiraOccupationsController;
use App\Http\Controllers\HiraPPEController;
use App\Http\Controllers\HiraProcessController;
use App\Http\Controllers\HiraTypeOfActivityController;
use App\Http\Controllers\PowerVehicleController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\safetyDropDownController;
use App\Http\Controllers\SafetyObservationController;
use App\Http\Controllers\SafetyObservationOwnerDepartmentController;
use App\Http\Controllers\SafetyObservationPlantNameController;
use App\Http\Controllers\SafetyObservationRespDepartmentController;
use App\Http\Controllers\SiteInfoPermitController;
use App\Http\Controllers\TrainingAssesmentController;
use App\Http\Controllers\TrainingAttendenceController;
use App\Http\Controllers\TrainingTopicsController;
use App\Http\Controllers\HiraLocationController;
use App\Http\Controllers\HseAccidentNotificationController;
use App\Http\Controllers\HseAccidentRegisterController;
use App\Http\Controllers\HseAccInvProcedureController;
use App\Http\Controllers\HseChemicalHandlingController;
use App\Http\Controllers\HseChemicalRegisterController;
use App\Http\Controllers\HseCompressedGasController;
use App\Http\Controllers\HseControlVisitorsDocController;
use App\Http\Controllers\HseEarthingPitConditionController;
use App\Http\Controllers\HseElectricalSafetyController;
use App\Http\Controllers\HseEmergencyPreparednessController;
use App\Http\Controllers\HseEntryConfinedChecklistController;
use App\Http\Controllers\HseEntryConfinedSpaceController;
use App\Http\Controllers\HseExcavationProcedureController;
use App\Http\Controllers\HseFireSafetySystemController;
use App\Http\Controllers\HseFirstAidController;
use App\Http\Controllers\HseFirstAidRegisterController;
use App\Http\Controllers\HseHarnessChecklistController;
use App\Http\Controllers\HseHotWorkChecklistController;
use App\Http\Controllers\HseHotWorkController;
use App\Http\Controllers\HseHouseKeepingController;
use App\Http\Controllers\HseIncidentInvestigationController;
use App\Http\Controllers\HseIncidentNotificationController;
use App\Http\Controllers\HseIncidentRegisterController;
use App\Http\Controllers\HseJobSafetyAnalysisController;
use App\Http\Controllers\HseJobSafetyAnalysisPPEController;
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
use App\Http\Controllers\HseOHSMSFormController;
use App\Http\Controllers\HsePermitWorkController;
use App\Http\Controllers\HsePermitWorkFormController;
use App\Http\Controllers\HsePersonalProtectiveController;
use App\Http\Controllers\HsePPEDistributionRegisterController;
use App\Http\Controllers\HsePPEInspectionReportController;
use App\Http\Controllers\HsePressureVesselController;
use App\Http\Controllers\HseSafeCraneOperationController;
use App\Http\Controllers\HseSafetyInspectionReportController;
use App\Http\Controllers\HseSafetySignageManagementController;
use App\Http\Controllers\HseSafetyBTController;
use App\Http\Controllers\HseSafetyChecklistHVController;
use App\Http\Controllers\HseSafetyCTCVTPTController;
use App\Http\Controllers\HseSafetyHandlingController;
use App\Http\Controllers\HseSafetyRelayController;
use App\Http\Controllers\HseSafetySwitchgearController;
use App\Http\Controllers\HseSafetyTTController;
use App\Http\Controllers\HseSightHearingProtectionController;
use App\Http\Controllers\HseTimberBlockRequiredUnderMobileCraneDocController;
use App\Http\Controllers\HseVehicleSafetyController;
use App\Http\Controllers\HseVehicleSafetyDocController;
use App\Http\Controllers\HseWorkatHeightController;
use App\Http\Controllers\JCBChecklistController;
use App\Http\Controllers\LightIntensityMeasurementController;
use App\Http\Controllers\SafetyPowerToolsController;
use App\Http\Controllers\StatusHseSightHearingProtectionController;
use App\Http\Controllers\StatusHseVehicleSafetyDocsController;
use App\Http\Controllers\StatusHseWorkatHeightController;
use App\Http\Controllers\StatusSafetyPowerToolsController;
use App\Http\Controllers\TransitMixerController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\VisitorEntryController;
use App\Http\Requests\StoreHseLadderSelfInspectionChecklistRequest;
use App\Models\HiraProcess;
use App\Models\HiraTypeOfActivity;
use App\Models\HseEntryConfinedSpace;
use Database\Factories\HseJobSafetyAnalysisPPEFactory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\auth\LoginController;
use App\Http\Controllers\auth\LogoutController;
use App\Http\Controllers\auth\RegistrationController;
use App\Http\Controllers\auth\ResetPasswordController;
use App\Http\Controllers\BarBendingMachineController;
use App\Http\Controllers\BarCuttingMachineController;
use App\Http\Controllers\BatchingPlantController;
use App\Http\Controllers\BenchCuttingMachineController;
use App\Http\Controllers\BikeController;
use App\Http\Controllers\BoomPlacerController;
use App\Http\Controllers\BreakerController;
use App\Http\Controllers\BusController;
use App\Http\Controllers\ChainPulleyBlockController;
use App\Http\Controllers\CircularSawController;
use App\Http\Controllers\DieselGeneratorController;
use App\Http\Controllers\DieselTankerController;
use App\Http\Controllers\DrillMachineController;
use App\Http\Controllers\ElectricalPumpController;
use App\Http\Controllers\ElectricalVibratorController;
use App\Http\Controllers\EnergyRecordsController;
use App\Http\Controllers\EnvironmentDashboardController;
use App\Http\Controllers\EotCraneController;
use App\Http\Controllers\FireExtinguisherController;
use App\Http\Controllers\FourWheelerController;
use App\Http\Controllers\GantryCraneController;
use App\Http\Controllers\GasCuttingSetController;
use App\Http\Controllers\GraderController;
use App\Http\Controllers\HazardousWasteInventoriesController;
use App\Http\Controllers\HiraLiteController;
use App\Http\Controllers\HydraController;
use App\Http\Controllers\LiftingToolsTacklesController;
use App\Http\Controllers\MobileCraneController;
use App\Http\Controllers\NonHazardousWasteInventoryController;
use App\Http\Controllers\PedestalGrinderController;
use App\Http\Controllers\PortableGrinderController;
use App\Http\Controllers\PowerDistributionPanelController;
use App\Http\Controllers\QuestionAnswerController;
use App\Http\Controllers\SafetyObsDashboardController;
use App\Http\Controllers\SandBlastingSetController;
use App\Http\Controllers\SkidSteerLoaderController;
use App\Http\Controllers\TowerCraneController;
use App\Http\Controllers\TrailerController;
use App\Http\Controllers\WaterTankerController;
use App\Http\Controllers\WeldingMachineController;
use App\Http\Controllers\WinchMachineController;
use App\Http\Controllers\SafetyObservationDashboardController;
use App\Http\Controllers\UploadController;
use App\Http\Controllers\UserSubmitAnswerController;
use App\Http\Controllers\WaterConsumptionController;
use App\Http\Controllers\UnitController;
use App\Models\UserSubmitAnswer;
use Illuminate\Support\Facades\Mail;
use App\Http\Controllers\Calculator\CalculatorController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::post('/register', RegistrationController::class)->middleware('guest');
Route::post('/login', LoginController::class)->middleware('guest');
Route::get('/logout', LogoutController::class)->middleware('auth:sanctum');
Route::post('/reset/email', [ResetPasswordController::class,'sendemail']);
Route::post('/reset/verify', [ResetPasswordController::class,'verifyemail'])->middleware('signed')->name('reset.password');

Route::prefix('v1')->middleware('auth:sanctum')->group(function(){
    Route::get('/accident', [AccidentController::class,'index']);
    Route::post('/accident', [AccidentController::class,'store']);
    Route::get('/accident/{accident}', [AccidentController::class,'show']);
    Route::post('/accident/{accident}', [AccidentController::class,'update']);
    Route::delete('/accident/{accident}', [AccidentController::class,'destroy']);
    Route::patch('accident/{accident}/approved', ApprovedAccidentController::class);
    Route::get('/accident-drop-down', AccidentDropDownController::class);

    Route::get('/accident-month', [AccidentMonthController::class,'index']);
    Route::post('/accident-month', [AccidentMonthController::class,'store']);
    Route::delete('/accident-month/{accidentMonth}', [AccidentMonthController::class,'destroy']);

    Route::get('/accident-injury-type', [AccidentInjuryTypeController::class,'index']);
    Route::post('/accident-injury-type', [AccidentInjuryTypeController::class,'store']);
    Route::delete('/accident-injury-type/{accidentInjuryType}', [AccidentInjuryTypeController::class,'destroy']);

    Route::get('/accident-type', [AccidentTypeController::class,'index']);
    Route::post('/accident-type', [AccidentTypeController::class,'store']);
    Route::delete('/accident-type/{accidentType}', [AccidentTypeController::class,'destroy']);

    Route::get('/accident-investigation', [AccidentInvestigationController::class,'index']);
    Route::post('/accident-investigation', [AccidentInvestigationController::class,'store']);
    Route::get('/accident-investigation/{accidentInvestigation}', [AccidentInvestigationController::class,'show']);
    Route::post('/accident-investigation/{accidentInvestigation}', [AccidentInvestigationController::class,'update']);
    Route::post('/accident-investigation-approved/{accidentInvestigation}', [AccidentInvestigationController::class,'approved']);
    Route::delete('/accident-investigation/{accidentInvestigation}', [AccidentInvestigationController::class,'destroy']);

    Route::get('/safety', [SafetyObservationController::class,'index']);
    Route::post('/safety', [SafetyObservationController::class,'store']);
    Route::get('/safety/{safetyObservation}', [SafetyObservationController::class,'show']);
    Route::post('/safety/{safetyObservation}', [SafetyObservationController::class,'update']);
    Route::delete('/safety/{safetyObservation}', [SafetyObservationController::class,'destroy']);
    Route::patch('/safety/{safety}/complete', CompleteSafetyObservationController::class);
    Route::get('/safety-drop-down', safetyDropDownController::class);

    Route::post('/admin-safety/{safetyObservation}', [SafetyObservationController::class,'adminstore']);



    Route::get('/safety-resp-department', [SafetyObservationRespDepartmentController::class,'index']);
    Route::post('/safety-resp-department', [SafetyObservationRespDepartmentController::class,'store']);
    Route::delete('/safety-resp-department/{safetyObservationRespDepartment}', [SafetyObservationRespDepartmentController::class,'destroy']);

    Route::get('/safety-owner-department', [SafetyObservationOwnerDepartmentController::class,'index']);
    Route::post('/safety-owner-department', [SafetyObservationOwnerDepartmentController::class,'store']);
    Route::delete('/safety-owner-department/{safetyObservationOwnerDepartment}', [SafetyObservationOwnerDepartmentController::class,'destroy']);


    Route::get('/safety-plant', [SafetyObservationPlantNameController::class,'index']);
    Route::post('/safety-plant', [SafetyObservationPlantNameController::class,'store']);
    Route::delete('/safety-plant/{safetyObservationPlantName}', [SafetyObservationPlantNameController::class,'destroy']);


    Route::get('/trainingAttendence', [TrainingAttendenceController::class,'index']);
    Route::post('/trainingAttendence', [TrainingAttendenceController::class,'store']);
    Route::post('/training-attendence-multiple', [TrainingAttendenceController::class,'storeForMultipleEmployees']);
    Route::get('/trainingAttendence/{trainingAttendence}', [TrainingAttendenceController::class,'show']);
    Route::post('/trainingAttendence/{trainingAttendence}', [TrainingAttendenceController::class,'update']);
    Route::delete('/trainingAttendence/{trainingAttendence}', [TrainingAttendenceController::class,'destroy']);


    Route::get('/employee', [EmployeeInfoController::class,'index']);
    Route::post('/employee', [EmployeeInfoController::class,'store']);
    Route::get('/employee/{employeeInfo}', [EmployeeInfoController::class,'show']);
    Route::post('/employee/{employeeInfo}', [EmployeeInfoController::class,'update']);
    Route::delete('/employee/{employeeInfo}', [EmployeeInfoController::class,'destroy']);
    Route::get('/employee-info/export-excel', [EmployeeInfoController::class, 'exportExcel'])->name('employee.exportExcel');
    Route::post('/employee-info/import-excel', [EmployeeInfoController::class, 'importExcel']);



    Route::get('/department', [EmployeeDepartmentController::class,'index']);
    Route::post('/department', [EmployeeDepartmentController::class,'store']);
    Route::get('/department/{employee_department}', [EmployeeDepartmentController::class,'show']);
    Route::post('/department/{employee_department}', [EmployeeDepartmentController::class,'update']);
    Route::delete('/department/{employee_department}', [EmployeeDepartmentController::class,'destroy']);

    Route::get('/unit', EmployeeUnitController::class);



    Route::get('/designation', [EmployeeDesignationController::class,'index']);
    Route::post('/designation', [EmployeeDesignationController::class,'store']);
    Route::get('/designation/{employee_designation}', [EmployeeDesignationController::class,'show']);
    Route::post('/designation/{employee_designation}', [EmployeeDesignationController::class,'update']);
    Route::delete('/designation/{employee_designation}', [EmployeeDesignationController::class,'destroy']);


    Route::get('/trainingTopics', [TrainingTopicsController::class,'index']);
    Route::post('/trainingTopics', [TrainingTopicsController::class,'store']);
    Route::get('/trainingTopics/{trainingTopics}', [TrainingTopicsController::class,'show']);
    Route::post('/trainingTopics/{trainingTopics}', [TrainingTopicsController::class,'update']);
    Route::delete('/trainingTopics/{trainingTopics}', [TrainingTopicsController::class,'destroy']);


    Route::get('/assign-special-training', [AssignSpecialTrainingController::class,'index']);
    Route::post('/assign-special-training', [AssignSpecialTrainingController::class,'store']);
    Route::get('/assign-special-training/{assignSpecialTraining}', [AssignSpecialTrainingController::class,'show']);
    Route::post('/assign-special-training/{assignSpecialTraining}', [AssignSpecialTrainingController::class,'update']);
    Route::delete('/assign-special-training/{assignSpecialTraining}', [AssignSpecialTrainingController::class,'destroy']);

    Route::get('/training-assesments', TrainingAssesmentController::class)->middleware('auth:sanctum');


    Route::get('/assign-training', [AssignTrainingController::class,'index']);
    Route::post('/assign-training', [AssignTrainingController::class,'store']);
    Route::get('/assign-training/{assignTraining}', [AssignTrainingController::class,'show']);
    Route::post('/assign-training/{assignTraining}', [AssignTrainingController::class,'update']);
    Route::delete('/assign-training/{assignTraining}', [AssignTrainingController::class,'destroy']);

    Route::post('/assign-multiple-training', AssignMultipleTrainingController::class);
    // Route::get('/training-assesments', TrainingAssesmentController::class);


    Route::get('/hira', [HiraController::class,'index']);
    Route::post('/hira', [HiraController::class,'store']);
    Route::get('/hira/{hira}', [HiraController::class,'show']);
    Route::post('/hira/{hira}', [HiraController::class,'update']);
    Route::delete('/hira/{hira}', [HiraController::class,'destroy']);


    Route::get('/hira-process', [HiraProcessController::class,'index']);
    Route::post('/hira-process', [HiraProcessController::class,'store']);
    Route::delete('/hira-process/{hiraProcess}', [HiraProcessController::class,'destroy']);


    Route::get('/hira-activity', [HiraActivityController::class,'index']);
    Route::post('/hira-activity', [HiraActivityController::class,'store']);
    Route::delete('/hira-activity/{hiraActivity}', [HiraActivityController::class,'destroy']);


    Route::get('/hira-type-of-Activity', [HiraTypeOfActivityController::class,'index']);
    Route::post('/hira-type-of-Activity', [HiraTypeOfActivityController::class,'store']);
    Route::delete('/hira-type-of-Activity/{hiraTypeOfActivity}', [HiraTypeOfActivityController::class,'destroy']);


    Route::get('/hira-occupations', [HiraOccupationsController::class,'index']);
    Route::post('/hira-occupations', [HiraOccupationsController::class,'store']);
    Route::delete('/hira-occupations/{hiraOccupations}', [HiraOccupationsController::class,'destroy']);


    Route::get('/hira-event', [HiraEventController::class,'index']);
    Route::post('/hira-event', [HiraEventController::class,'store']);
    Route::delete('/hira-event/{hiraEvent}', [HiraEventController::class,'destroy']);


    Route::get('/hira-cause', [HiraCauseController::class,'index']);
    Route::post('/hira-cause', [HiraCauseController::class,'store']);
    Route::delete('/hira-cause/{hiraCause}', [HiraCauseController::class,'destroy']);


    Route::get('/hira-impact', [HiraImpactController::class,'index']);
    Route::post('/hira-impact', [HiraImpactController::class,'store']);
    Route::delete('/hira-impact/{hiraImpact}', [HiraImpactController::class,'destroy']);


    Route::get('/hira-engineering', [HiraEngineeringController::class,'index']);
    Route::post('/hira-engineering', [HiraEngineeringController::class,'store']);
    Route::delete('/hira-engineering/{hiraEngineering}', [HiraEngineeringController::class,'destroy']);


    Route::get('/hira-administrative', [HiraAdministrativeController::class,'index']);
    Route::post('/hira-administrative', [HiraAdministrativeController::class,'store']);
    Route::delete('/hira-administrative/{hiraAdministrative}', [HiraAdministrativeController::class,'destroy']);


    Route::get('/hira-ppe', [HiraPPEController::class,'index']);
    Route::post('/hira-ppe', [HiraPPEController::class,'store']);
    Route::delete('/hira-ppe/{hiraPPE}', [HiraPPEController::class,'destroy']);



    Route::get('/hira-location', [HiraLocationController::class,'index']);
    Route::post('/hira-location', [HiraLocationController::class,'store']);
    Route::delete('/hira-location/{hiraLocation}', [HiraLocationController::class,'destroy']);

//    unit-name route
    Route::prefix('unit-name')->name('unit-name.')->group(function () {
        Route::get('/', [UnitController::class, 'index'])->name('index');
        Route::post('/', [UnitController::class, 'store'])->name('store');
        Route::delete('/{id}', [UnitController::class, 'destroy'])->name('destroy');
    });



    Route::get('/hse-control-visitors', [HseControlVisitorsDocController::class,'index']);
    Route::post('/hse-control-visitors', [HseControlVisitorsDocController::class,'store']);
    Route::get('/hse-control-visitors/{hseControlVisitorsDoc}', [HseControlVisitorsDocController::class,'show']);
    Route::post('/hse-control-visitors/{hseControlVisitorsDoc}', [HseControlVisitorsDocController::class,'update']);
    Route::delete('/hse-control-visitors/{hseControlVisitorsDoc}', [HseControlVisitorsDocController::class,'destroy']);


    Route::get('/hse-vehicle-safety', [HseVehicleSafetyController::class,'index']);
    Route::post('/hse-vehicle-safety', [HseVehicleSafetyController::class,'store']);
    Route::get('/hse-vehicle-safety/{hseVehicleSafety}', [HseVehicleSafetyController::class,'show']);
    Route::post('/hse-vehicle-safety/{hseVehicleSafety}', [HseVehicleSafetyController::class,'update']);
    Route::delete('/hse-vehicle-safety/{hseVehicleSafety}', [HseVehicleSafetyController::class,'destroy']);


    Route::get('/hse-vehicle-safety-doc', [HseVehicleSafetyDocController::class,'index']);
    Route::post('/hse-vehicle-safety-doc', [HseVehicleSafetyDocController::class,'store']);
    Route::get('/hse-vehicle-safety-doc/{hseVehicleSafetyDoc}', [HseVehicleSafetyDocController::class,'show']);
    Route::post('/hse-vehicle-safety-doc/{hseVehicleSafetyDoc}', [HseVehicleSafetyDocController::class,'update']);
    Route::delete('/hse-vehicle-safety-doc/{hseVehicleSafetyDoc}', [HseVehicleSafetyDocController::class,'destroy']);
    Route::post('/hse-vehicle-safety-status/{hseVehicleSafetyDoc}', StatusHseVehicleSafetyDocsController::class);



    Route::get('/hse-safety-power-tools', [SafetyPowerToolsController::class,'index']);
    Route::post('/hse-safety-power-tools', [SafetyPowerToolsController::class,'store']);
    Route::get('/hse-safety-power-tools/{safetyPowerTools}', [SafetyPowerToolsController::class,'show']);
    Route::post('/hse-safety-power-tools/{safetyPowerTools}', [SafetyPowerToolsController::class,'update']);
    Route::delete('/hse-safety-power-tools/{safetyPowerTools}', [SafetyPowerToolsController::class,'destroy']);
    Route::post('/hse-safety-power-tools-status/{safetyPowerTools}', StatusSafetyPowerToolsController::class);

    Route::get('/hse-sight-hearing-protection', [HseSightHearingProtectionController::class,'index']);
    Route::post('/hse-sight-hearing-protection', [HseSightHearingProtectionController::class,'store']);
    Route::get('/hse-sight-hearing-protection/{hseSightHearingProtection}', [HseSightHearingProtectionController::class,'show']);
    Route::post('/hse-sight-hearing-protection/{hseSightHearingProtection}', [HseSightHearingProtectionController::class,'update']);
    Route::delete('/hse-sight-hearing-protection/{hseSightHearingProtection}', [HseSightHearingProtectionController::class,'destroy']);
    Route::post('/hse-sight-hearing-protection-status/{hseSightHearingProtection}', StatusHseSightHearingProtectionController::class);



    Route::get('/hse-noise-intensity-measurement', [HseNoiseIntensityMeasurementController::class,'index']);
    Route::post('/hse-noise-intensity-measurement', [HseNoiseIntensityMeasurementController::class,'store']);
    Route::get('/hse-noise-intensity-measurement/{hseNoiseIntensityMeasurement}', [HseNoiseIntensityMeasurementController::class,'show']);
    Route::post('/hse-noise-intensity-measurement/{hseNoiseIntensityMeasurement}', [HseNoiseIntensityMeasurementController::class,'update']);
    Route::delete('/hse-noise-intensity-measurement/{hseNoiseIntensityMeasurement}', [HseNoiseIntensityMeasurementController::class,'destroy']);



    Route::get('/hse-light-intensity-measurement', [LightIntensityMeasurementController::class,'index']);
    Route::post('/hse-light-intensity-measurement', [LightIntensityMeasurementController::class,'store']);
    Route::get('/hse-light-intensity-measurement/{lightIntensityMeasurement}', [LightIntensityMeasurementController::class,'show']);
    Route::post('/hse-light-intensity-measurement/{lightIntensityMeasurement}', [LightIntensityMeasurementController::class,'update']);
    Route::delete('/hse-light-intensity-measurement/{lightIntensityMeasurement}', [LightIntensityMeasurementController::class,'destroy']);



    Route::get('/hse-work-at-height', [HseWorkatHeightController::class,'index']);
    Route::post('/hse-work-at-height', [HseWorkatHeightController::class,'store']);
    Route::get('/hse-work-at-height/{hseWorkatHeight}', [HseWorkatHeightController::class,'show']);
    Route::post('/hse-work-at-height/{hseWorkatHeight}', [HseWorkatHeightController::class,'update']);
    Route::delete('/hse-work-at-height/{hseWorkatHeight}', [HseWorkatHeightController::class,'destroy']);
    Route::post('/hse-work-at-height-status/{hseWorkatHeight}', StatusHseWorkatHeightController::class);

// 5-10-2024

    Route::get('/hse-safe-crane-operation', [HseSafeCraneOperationController::class,'index']);
    Route::post('/hse-safe-crane-operation', [HseSafeCraneOperationController::class,'store']);
    Route::get('/hse-safe-crane-operation/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'show']);
    Route::post('/hse-safe-crane-operation/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'update']);
    Route::delete('/hse-safe-crane-operation/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'destroy']);
    Route::post('/hse-safe-crane-operation-status/{hseSafeCraneOperation}', [HseSafeCraneOperationController::class,'edit']);


    Route::get('/hse-mobile-crane-planning-risk-assessment', [HseMobileCranePlanningRiskAssessmentDocController::class,'index']);
    Route::post('/hse-mobile-crane-planning-risk-assessment', [HseMobileCranePlanningRiskAssessmentDocController::class,'store']);
    Route::get('/hse-mobile-crane-planning-risk-assessment/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'show']);
    Route::post('/hse-mobile-crane-planning-risk-assessment/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'update']);
    Route::delete('/hse-mobile-crane-planning-risk-assessment/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'destroy']);
    Route::post('/hse-mobile-crane-planning-risk-assessment-status/{hseRiskAssessment}', [HseMobileCranePlanningRiskAssessmentDocController::class,'edit']);


    Route::get('/hse-mobile-crane-safety-procedure', [HseMobileCraneSafetyProcedureDocController::class,'index']);
    Route::post('/hse-mobile-crane-safety-procedure', [HseMobileCraneSafetyProcedureDocController::class,'store']);
    Route::get('/hse-mobile-crane-safety-procedure/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'show']);
    Route::post('/hse-mobile-crane-safety-procedure/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'update']);
    Route::delete('/hse-mobile-crane-safety-procedure/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'destroy']);
    Route::post('/hse-mobile-crane-safety-procedure-status/{hseSafetyProcedure}', [HseMobileCraneSafetyProcedureDocController::class,'edit']);


    Route::get('/hse-timber-block-required-under-mobile-crane', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'index']);
    Route::post('/hse-timber-block-required-under-mobile-crane', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'store']);
    Route::get('/hse-timber-block-required-under-mobile-crane/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'show']);
    Route::post('/hse-timber-block-required-under-mobile-crane/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'update']);
    Route::delete('/hse-timber-block-required-under-mobile-crane/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'destroy']);
    Route::post('/hse-timber-block-required-under-mobile-crane-status/{hseTimberMobileCrane}', [HseTimberBlockRequiredUnderMobileCraneDocController::class,'edit']);
// 7/9/24

    Route::get('/hse-entry-confined-space', [HseEntryConfinedSpaceController::class,'index']);
    Route::post('/hse-entry-confined-space', [HseEntryConfinedSpaceController::class,'store']);
    Route::get('/hse-entry-confined-space/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'show']);
    Route::post('/hse-entry-confined-space/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'update']);
    Route::delete('/hse-entry-confined-space/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'destroy']);
    Route::post('/hse-entry-confined-space-status/{hseEntryConfinedSpace}', [HseEntryConfinedSpaceController::class,'edit']);


    Route::get('/hse-entry-confined-check', [HseEntryConfinedChecklistController::class,'index']);
    Route::post('/hse-entry-confined-check', [HseEntryConfinedChecklistController::class,'store']);
    Route::get('/hse-entry-confined-check/{hseEntryConfinedChecklist}', [HseEntryConfinedChecklistController::class,'show']);
    Route::delete('/hse-entry-confined-check/{hseEntryConfinedChecklist}', [HseEntryConfinedChecklistController::class,'destroy']);


    Route::get('/hse-confined-space', [HseListConfinedSpaceController::class,'index']);
    Route::post('/hse-confined-space', [HseListConfinedSpaceController::class,'store']);
    Route::get('/hse-confined-space/{hseListConfinedSpace}', [HseListConfinedSpaceController::class,'show']);
    Route::delete('/hse-confined-space/{hseListConfinedSpace}', [HseListConfinedSpaceController::class,'destroy']);



    Route::get('/hse-pressure-vessel', [HsePressureVesselController::class,'index']);
    Route::post('/hse-pressure-vessel', [HsePressureVesselController::class,'store']);
    Route::get('/hse-pressure-vessel/{hsePressureVessel}', [HsePressureVesselController::class,'show']);
    Route::post('/hse-pressure-vessel/{hsePressureVessel}', [HsePressureVesselController::class,'update']);
    Route::delete('/hse-pressure-vessel/{hsePressureVessel}', [HsePressureVesselController::class,'destroy']);
    Route::post('/hse-pressure-vessel-status/{hsePressureVessel}', [HsePressureVesselController::class,'edit']);



    Route::get('/hse-list-pressure-vessels', [HseListPressureVesselsController::class,'index']);
    Route::post('/hse-list-pressure-vessels', [HseListPressureVesselsController::class,'store']);
    Route::get('/hse-list-pressure-vessels/{hseListPressureVessels}', [HseListPressureVesselsController::class,'show']);
    Route::delete('/hse-list-pressure-vessels/{hseListPressureVessels}', [HseListPressureVesselsController::class,'destroy']);

// end 7/9/24


    Route::get('/hse-ladder-self-inspection-checklist', [HseLadderSelfInspectionChecklistController::class,'index']);
    Route::post('/hse-ladder-self-inspection-checklist', [HseLadderSelfInspectionChecklistController::class,'store']);
    Route::get('/hse-ladder-self-inspection-checklist/{hseLadderSelfInspectionChecklist}', [HseLadderSelfInspectionChecklistController::class,'show']);
    Route::post('/hse-ladder-self-inspection-checklist/{hseLadderSelfInspectionChecklist}', [HseLadderSelfInspectionChecklistController::class,'update']);
    Route::delete('/hse-ladder-self-inspection-checklist/{hseLadderSelfInspectionChecklist}', [HseLadderSelfInspectionChecklistController::class,'destroy']);



    Route::get('/hse-master-listLifting-equipments', [HseMasterListLiftingEquipmentsController::class,'index']);
    Route::post('/hse-master-listLifting-equipments', [HseMasterListLiftingEquipmentsController::class,'store']);
    Route::get('/hse-master-listLifting-equipments/{hseMasterListLiftingEquipments}', [HseMasterListLiftingEquipmentsController::class,'show']);
    Route::post('/hse-master-listLifting-equipments/{hseMasterListLiftingEquipments}', [HseMasterListLiftingEquipmentsController::class,'update']);
    Route::delete('/hse-master-listLifting-equipments/{hseMasterListLiftingEquipments}', [HseMasterListLiftingEquipmentsController::class,'destroy']);



    Route::get('/hse-lifting-loose-gears', [HseLiftingLooseGearsController::class,'index']);
    Route::post('/hse-lifting-loose-gears', [HseLiftingLooseGearsController::class,'store']);
    Route::get('/hse-lifting-loose-gears/{hseLiftingLooseGears}', [HseLiftingLooseGearsController::class,'show']);
    Route::post('/hse-lifting-loose-gears/{hseLiftingLooseGears}', [HseLiftingLooseGearsController::class,'update']);
    Route::delete('/hse-lifting-loose-gears/{hseLiftingLooseGears}', [HseLiftingLooseGearsController::class,'destroy']);


    Route::get('/hse-harness', [HseHarnessChecklistController::class,'index']);
    Route::post('/hse-harness', [HseHarnessChecklistController::class,'store']);
    Route::get('/hse-harness/{hseHarnessChecklist}', [HseHarnessChecklistController::class,'show']);
    // Route::post('/hse-harness/{hseHarnessChecklist}', [HseHarnessChecklistController::class,'update']);
    Route::delete('/hse-harness/{hseHarnessChecklist}', [HseHarnessChecklistController::class,'destroy']);

// start 8/9/24

//
//     Route::get('/hse-compressed-gas', [HseCompressedGasController::class,'index']);
//     Route::post('/hse-compressed-gas', [HseCompressedGasController::class,'store']);
//     Route::get('/hse-compressed-gas/{hseCompressedGas}', [HseCompressedGasController::class,'show']);
//     Route::post('/hse-compressed-gas/{hseCompressedGas}', [HseCompressedGasController::class,'update']);
//     Route::delete('/hse-compressed-gas/{hseCompressedGas}', [HseCompressedGasController::class,'destroy']);
//     Route::post('/hse-compressed-gas-status/{hseCompressedGas}', [HseCompressedGasController::class,'edit']);
//


    Route::get('/hse-chemical-handling', [HseChemicalHandlingController::class,'index']);
    Route::post('/hse-chemical-handling', [HseChemicalHandlingController::class,'store']);
    Route::get('/hse-chemical-handling/{hseChemicalHandling}', [HseChemicalHandlingController::class,'show']);
    Route::post('/hse-chemical-handling/{hseChemicalHandling}', [HseChemicalHandlingController::class,'update']);
    Route::delete('/hse-chemical-handling/{hseChemicalHandling}', [HseChemicalHandlingController::class,'destroy']);
    Route::post('/hse-chemical-handling-status/{hseChemicalHandling}', [HseChemicalHandlingController::class,'edit']);


    Route::get('/hse-chemical-register', [HseChemicalRegisterController::class,'index']);
    Route::post('/hse-chemical-register', [HseChemicalRegisterController::class,'store']);
    Route::get('/hse-chemical-register/{hseChemicalRegister}', [HseChemicalRegisterController::class,'show']);
    Route::delete('/hse-chemical-register/{hseChemicalRegister}', [HseChemicalRegisterController::class,'destroy']);


    Route::get('/hse-hot-work', [HseHotWorkController::class,'index']);
    Route::post('/hse-hot-work', [HseHotWorkController::class,'store']);
    Route::get('/hse-hot-work/{hseHotWork}', [HseHotWorkController::class,'show']);
    Route::post('/hse-hot-work/{hseHotWork}', [HseHotWorkController::class,'update']);
    Route::delete('/hse-hot-work/{hseHotWork}', [HseHotWorkController::class,'destroy']);
    Route::post('/hse-hot-work-status/{hseHotWork}', [HseHotWorkController::class,'edit']);


    Route::get('/hse-hot-work-checklist', [HseHotWorkChecklistController::class,'index']);
    Route::post('/hse-hot-work-checklist', [HseHotWorkChecklistController::class,'store']);
    Route::get('/hse-hot-work-checklist/{hseHotWorkChecklist}', [HseHotWorkChecklistController::class,'show']);
    Route::delete('/hse-hot-work-checklist/{hseHotWorkChecklist}', [HseHotWorkChecklistController::class,'destroy']);


    Route::get('/fire-safety-system', [HseFireSafetySystemController::class,'index']);
    Route::post('/fire-safety-system', [HseFireSafetySystemController::class,'store']);
    Route::get('/fire-safety-system/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'show']);
    Route::post('/fire-safety-system/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'update']);
    Route::delete('/fire-safety-system/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'destroy']);
    Route::post('/fire-safety-system-status/{hseFireSafetySystem}', [HseFireSafetySystemController::class,'edit']);


    Route::get('/hse-material-procedure', [HseMaterialProcedureController::class,'index']);
    Route::post('/hse-material-procedure', [HseMaterialProcedureController::class,'store']);
    Route::get('/hse-material-procedure/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'show']);
    Route::post('/hse-material-procedure/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'update']);
    Route::delete('/hse-material-procedure/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'destroy']);
    Route::post('/hse-material-procedure-status/{hseMaterialProcedure}', [HseMaterialProcedureController::class,'edit']);


    Route::get('/hse-house-keeping', [HseHouseKeepingController::class,'index']);
    Route::post('/hse-house-keeping', [HseHouseKeepingController::class,'store']);
    Route::get('/hse-house-keeping/{hseHouseKeeping}', [HseHouseKeepingController::class,'show']);
    Route::post('/hse-house-keeping/{hseHouseKeeping}', [HseHouseKeepingController::class,'update']);
    Route::delete('/hse-house-keeping/{hseHouseKeeping}', [HseHouseKeepingController::class,'destroy']);
    Route::post('/hse-house-keeping-status/{hseHouseKeeping}', [HseHouseKeepingController::class,'edit']);
// start 9/9/24



    Route::get('/hse-permit-work', [HsePermitWorkController::class,'index']);
    Route::post('/hse-permit-work', [HsePermitWorkController::class,'store']);
    Route::get('/hse-permit-work/{hsePermitWork}', [HsePermitWorkController::class,'show']);
    Route::post('/hse-permit-work/{hsePermitWork}', [HsePermitWorkController::class,'update']);
    Route::delete('/hse-permit-work/{hsePermitWork}', [HsePermitWorkController::class,'destroy']);
    Route::post('/hse-permit-work-status/{hsePermitWork}', [HsePermitWorkController::class,'edit']);


    Route::get('/hse-permit-work-form', [HsePermitWorkFormController::class,'index']);
    Route::post('/hse-permit-work-form', [HsePermitWorkFormController::class,'store']);
    Route::get('/hse-permit-work-form/{hsePermitWorkForm}', [HsePermitWorkFormController::class,'show']);
    Route::delete('/hse-permit-work-form/{hsePermitWorkForm}', [HsePermitWorkFormController::class,'destroy']);



    Route::get('/hse-electrical-safety', [HseElectricalSafetyController::class,'index']);
    Route::post('/hse-electrical-safety', [HseElectricalSafetyController::class,'store']);
    Route::get('/hse-electrical-safety/{hseElectricalSafety}', [HseElectricalSafetyController::class,'show']);
    Route::post('/hse-electrical-safety/{hseElectricalSafety}', [HseElectricalSafetyController::class,'update']);
    Route::delete('/hse-electrical-safety/{hseElectricalSafety}', [HseElectricalSafetyController::class,'destroy']);
    Route::post('/hse-electrical-safety-status/{hseElectricalSafety}', [HseElectricalSafetyController::class,'edit']);


    Route::get('/hse-earthing-pit-condition', [HseEarthingPitConditionController::class,'index']);
    Route::post('/hse-earthing-pit-condition', [HseEarthingPitConditionController::class,'store']);
    Route::get('/hse-earthing-pit-condition/{hseEarthingPitCondition}', [HseEarthingPitConditionController::class,'show']);
    Route::delete('/hse-earthing-pit-condition/{hseEarthingPitCondition}', [HseEarthingPitConditionController::class,'destroy']);

// 14/10/24


    Route::get('/hse-lightning-protection', [HSELightningProtectionController::class,'index']);
    Route::post('/hse-lightning-protection', [HSELightningProtectionController::class,'store']);
    Route::get('/hse-lightning-protection/{hSELightningProtection}', [HSELightningProtectionController::class,'show']);
    Route::delete('/hse-lightning-protection/{hSELightningProtection}', [HSELightningProtectionController::class,'destroy']);


    Route::get('/hse-lotto', [HseLOTOController::class,'index']);
    Route::post('/hse-lotto', [HseLOTOController::class,'store']);
    Route::get('/hse-lotto/{hseLOTO}', [HseLOTOController::class,'show']);
    Route::post('/hse-lotto/{hseLOTO}', [HseLOTOController::class,'update']);
    Route::delete('/hse-lotto/{hseLOTO}', [HseLOTOController::class,'destroy']);
    Route::post('/hse-lotto-status/{hseLOTO}', [HseLOTOController::class,'edit']);


    Route::get('/hse-lotto-form', [HseLottoFormController::class,'index']);
    Route::post('/hse-lotto-form', [HseLottoFormController::class,'store']);
    Route::get('/hse-lotto-form/{hseLottoForm}', [HseLottoFormController::class,'show']);
    Route::delete('/hse-lotto-form/{hseLottoForm}', [HseLottoFormController::class,'destroy']);


    Route::get('/hse-excavation-procedure', [HseExcavationProcedureController::class,'index']);
    Route::post('/hse-excavation-procedure', [HseExcavationProcedureController::class,'store']);
    Route::get('/hse-excavation-procedure/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'show']);
    Route::post('/hse-excavation-procedure/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'update']);
    Route::delete('/hse-excavation-procedure/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'destroy']);
    Route::post('/hse-excavation-procedure-status/{hseExcavationProcedure}', [HseExcavationProcedureController::class,'edit']);


    Route::get('/hse-personal-protective', [HsePersonalProtectiveController::class,'index']);
    Route::post('/hse-personal-protective', [HsePersonalProtectiveController::class,'store']);
    Route::get('/hse-personal-protective/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'show']);
    Route::post('/hse-personal-protective/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'update']);
    Route::delete('/hse-personal-protective/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'destroy']);
    Route::post('/hse-personal-protective-status/{hsePersonalProtective}', [HsePersonalProtectiveController::class,'edit']);


    Route::get('/hse-ppe-distribution-register', [HsePPEDistributionRegisterController::class,'index']);
    Route::post('/hse-ppe-distribution-register', [HsePPEDistributionRegisterController::class,'store']);
    Route::get('/hse-ppe-distribution-register/{hsePPEDistributionRegister}', [HsePPEDistributionRegisterController::class,'show']);
    Route::post('/hse-ppe-distribution-register/{hsePPEDistributionRegister}', [HsePPEDistributionRegisterController::class,'update']);
    Route::delete('/hse-ppe-distribution-register/{hsePPEDistributionRegister}', [HsePPEDistributionRegisterController::class,'destroy']);

// 15/10/24


    Route::get('/hse-ppe-inspection', [HsePPEInspectionReportController::class,'index']);
    Route::post('/hse-ppe-inspection', [HsePPEInspectionReportController::class,'store']);
    Route::get('/hse-ppe-inspection/{hsePPEInspectionReport}', [HsePPEInspectionReportController::class,'show']);
    Route::post('/hse-ppe-inspection/{hsePPEInspectionReport}', [HsePPEInspectionReportController::class,'update']);
    Route::delete('/hse-ppe-inspection/{hsePPEInspectionReport}', [HsePPEInspectionReportController::class,'destroy']);
    Route::post('/hse-ppe-inspection-status/{hsePPEInspectionReport}', [HsePPEInspectionReportController::class,'edit']);


    Route::get('/hse-safety-signage', [HseSafetySignageManagementController::class,'index']);
    Route::post('/hse-safety-signage', [HseSafetySignageManagementController::class,'store']);
    Route::get('/hse-safety-signage/{hseSafetySignageManagement}', [HseSafetySignageManagementController::class,'show']);
    Route::post('/hse-safety-signage/{hseSafetySignageManagement}', [HseSafetySignageManagementController::class,'update']);
    Route::delete('/hse-safety-signage/{hseSafetySignageManagement}', [HseSafetySignageManagementController::class,'destroy']);
    Route::post('/hse-safety-signage-status/{hseSafetySignageManagement}', [HseSafetySignageManagementController::class,'edit']);


    Route::get('/hse-safety-signage', [HseOHSMSFormController::class,'index']);
    Route::post('/hse-safety-signage', [HseOHSMSFormController::class,'store']);
    Route::get('/hse-safety-signage/{hseOHSMSForm}', [HseOHSMSFormController::class,'show']);
    Route::post('/hse-safety-signage/{hseOHSMSForm}', [HseOHSMSFormController::class,'update']);
    Route::delete('/hse-safety-signage/{hseOHSMSForm}', [HseOHSMSFormController::class,'destroy']);


    Route::get('/hse-first-aid', [HseFirstAidController::class,'index']);
    Route::post('/hse-first-aid', [HseFirstAidController::class,'store']);
    Route::get('/hse-first-aid/{hseFirstAid}', [HseFirstAidController::class,'show']);
    Route::post('/hse-first-aid/{hseFirstAid}', [HseFirstAidController::class,'update']);
    Route::delete('/hse-first-aid/{hseFirstAid}', [HseFirstAidController::class,'destroy']);
    Route::delete('/hse-first-aid/{hseFirstAid}', [HseFirstAidController::class,'edit']);



    Route::get('/hse-first-aid-register', [HseFirstAidRegisterController::class,'index']);
    Route::post('/hse-first-aid-register', [HseFirstAidRegisterController::class,'store']);
    Route::get('/hse-first-aid-register/{hseFirstAidRegister}', [HseFirstAidRegisterController::class,'show']);
    Route::post('/hse-first-aid-register/{hseFirstAidRegister}', [HseFirstAidRegisterController::class,'update']);
    Route::delete('/hse-first-aid-register/{hseFirstAidRegister}', [HseFirstAidRegisterController::class,'destroy']);

// 16/10/24


    Route::get('/hse-safety-inspection', [HseSafetyInspectionReportController::class,'index']);
    Route::post('/hse-safety-inspection', [HseSafetyInspectionReportController::class,'store']);
    Route::get('/hse-safety-inspection/{hseSafetyInspectionReport}', [HseSafetyInspectionReportController::class,'show']);
    Route::post('/hse-safety-inspection/{hseSafetyInspectionReport}', [HseSafetyInspectionReportController::class,'update']);
    Route::delete('/hse-safety-inspection/{hseSafetyInspectionReport}', [HseSafetyInspectionReportController::class,'destroy']);


    Route::get('/hse-safety-checklist-hv', [HseSafetyChecklistHVController::class,'index']);
    Route::post('/hse-safety-checklist-hv', [HseSafetyChecklistHVController::class,'store']);
    Route::post('/hse-safety-checklist-hv/{hseSafetyChecklistHV}', [HseSafetyChecklistHVController::class,'update']);
    Route::get('/hse-safety-checklist-hv/{hseSafetyChecklistHV}', [HseSafetyChecklistHVController::class,'show']);
    Route::delete('/hse-safety-checklist-hv/{hseSafetyChecklistHV}', [HseSafetyChecklistHVController::class,'destroy']);


    Route::get('/hse-Safety-tt', [HseSafetyTTController::class,'index']);
    Route::post('/hse-Safety-tt', [HseSafetyTTController::class,'store']);
    Route::post('/hse-Safety-tt/{hseSafetyTT}', [HseSafetyTTController::class,'update']);
    Route::get('/hse-Safety-tt/{hseSafetyTT}', [HseSafetyTTController::class,'show']);
    Route::delete('/hse-Safety-tt/{hseSafetyTT}', [HseSafetyTTController::class,'destroy']);




    Route::get('/hse-Safety-bt', [HseSafetyBTController::class,'index']);
    Route::post('/hse-Safety-bt', [HseSafetyBTController::class,'store']);
    Route::post('/hse-Safety-bt/{hseSafetyBT}', [HseSafetyBTController::class,'update']);
    Route::get('/hse-Safety-bt/{hseSafetyBT}', [HseSafetyBTController::class,'show']);
    Route::delete('/hse-Safety-bt/{hseSafetyBT}', [HseSafetyBTController::class,'destroy']);


    Route::get('/hse-Safety-ctcv', [HseSafetyCTCVTPTController::class,'index']);
    Route::post('/hse-Safety-ctcv', [HseSafetyCTCVTPTController::class,'store']);
    Route::post('/hse-Safety-ctcv/{hseSafetyCTCVTPT}', [HseSafetyCTCVTPTController::class,'update']);
    Route::get('/hse-Safety-ctcv/{hseSafetyCTCVTPT}', [HseSafetyCTCVTPTController::class,'show']);
    Route::delete('/hse-Safety-ctcv/{hseSafetyCTCVTPT}', [HseSafetyCTCVTPTController::class,'destroy']);


    Route::get('/hse-safety-handling', [HseSafetyHandlingController::class,'index']);
    Route::post('/hse-safety-handling', [HseSafetyHandlingController::class,'store']);
    Route::post('/hse-safety-handling/{hseSafetyHandling}', [HseSafetyHandlingController::class,'update']);
    Route::get('/hse-safety-handling/{hseSafetyHandling}', [HseSafetyHandlingController::class,'show']);
    Route::delete('/hse-safety-handling/{hseSafetyHandling}', [HseSafetyHandlingController::class,'destroy']);



    Route::get('/hse-acc-inv-procedure', [HseAccInvProcedureController::class,'index']);
    Route::post('/hse-acc-inv-procedure', [HseAccInvProcedureController::class,'store']);
    Route::get('/hse-acc-inv-procedure/{hseAccInvProcedure}', [HseAccInvProcedureController::class,'show']);
    Route::post('/hse-acc-inv-procedure/{hseAccInvProcedure}', [HseAccInvProcedureController::class,'update']);
    Route::delete('/hse-acc-inv-procedure/{hseAccInvProcedure}', [HseAccInvProcedureController::class,'destroy']);
    Route::post('/hse-acc-inv-procedure-status/{hseAccInvProcedure}', [HseAccInvProcedureController::class,'edit']);



    Route::get('/hse-accident-notification', [HseAccidentNotificationController::class,'index']);
    Route::post('/hse-accident-notification', [HseAccidentNotificationController::class,'store']);
    Route::get('/hse-accident-notification/{hseAccidentNotification}', [HseAccidentNotificationController::class,'show']);
    Route::post('/hse-accident-notification/{hseAccidentNotification}', [HseAccidentNotificationController::class,'update']);
    Route::delete('/hse-accident-notification/{hseAccidentNotification}', [HseAccidentNotificationController::class,'destroy']);


    Route::get('/hse-incident-notification', [HseIncidentNotificationController::class,'index']);
    Route::post('/hse-incident-notification', [HseIncidentNotificationController::class,'store']);
    Route::get('/hse-incident-notification/{hseIncidentNotification}', [HseIncidentNotificationController::class,'show']);
    Route::post('/hse-incident-notification/{hseIncidentNotification}', [HseIncidentNotificationController::class,'update']);
    Route::delete('/hse-incident-notification/{hseIncidentNotification}', [HseIncidentNotificationController::class,'destroy']);


    Route::get('/hse-incident-investigation', [HseIncidentInvestigationController::class,'index']);
    Route::post('/hse-incident-investigation', [HseIncidentInvestigationController::class,'store']);
    Route::get('/hse-incident-investigation/{HseIncidentInvestigation}', [HseIncidentInvestigationController::class,'show']);
    Route::post('/hse-incident-investigation/{HseIncidentInvestigation}', [HseIncidentInvestigationController::class,'update']);
    Route::delete('/hse-incident-investigation/{HseIncidentInvestigation}', [HseIncidentInvestigationController::class,'destroy']);


    Route::get('/hse-accident-register', [HseAccidentRegisterController::class,'index']);
    Route::post('/hse-accident-register', [HseAccidentRegisterController::class,'store']);
    Route::get('/hse-accident-register/{hseAccidentRegister}', [HseAccidentRegisterController::class,'show']);
    Route::post('/hse-accident-register/{hseAccidentRegister}', [HseAccidentRegisterController::class,'update']);
    Route::delete('/hse-accident-register/{hseAccidentRegister}', [HseAccidentRegisterController::class,'destroy']);


    Route::get('/hse-safety-relay', [HseSafetyRelayController::class,'index']);
    Route::post('/hse-safety-relay', [HseSafetyRelayController::class,'store']);
    Route::post('/hse-safety-relay/{hseSafetyRelay}', [HseSafetyRelayController::class,'update']);
    Route::get('/hse-safety-relay/{hseSafetyRelay}', [HseSafetyRelayController::class,'show']);
    Route::delete('/hse-safety-relay/{hseSafetyRelay}', [HseSafetyRelayController::class,'destroy']);


    Route::get('/hse-safety-switchgear', [HseSafetySwitchgearController::class,'index']);
    Route::post('/hse-safety-switchgear', [HseSafetySwitchgearController::class,'store']);
    Route::post('/hse-safety-switchgear/{hseSafetySwitchgear}', [HseSafetySwitchgearController::class,'update']);
    Route::get('/hse-safety-switchgear/{hseSafetySwitchgear}', [HseSafetySwitchgearController::class,'show']);
    Route::delete('/hse-safety-switchgear/{hseSafetySwitchgear}', [HseSafetySwitchgearController::class,'destroy']);

// 17/10/24


    Route::get('/hse-incident-register', [HseIncidentRegisterController::class,'index']);
    Route::post('/hse-incident-register', [HseIncidentRegisterController::class,'store']);
    Route::post('/hse-incident-register/{hseIncidentRegister}', [HseIncidentRegisterController::class,'update']);
    Route::get('/hse-incident-register/{hseIncidentRegister}', [HseIncidentRegisterController::class,'show']);
    Route::delete('/hse-incident-register/{hseIncidentRegister}', [HseIncidentRegisterController::class,'destroy']);


    Route::get('/hse-jobsafety-analysis', [HseJobSafetyAnalysisController::class,'index']);
    Route::post('/hse-jobsafety-analysis', [HseJobSafetyAnalysisController::class,'store']);
    Route::get('/hse-jobsafety-analysis/{hseJobSafetyAnalysis}', [HseJobSafetyAnalysisController::class,'show']);
    Route::post('/hse-jobsafety-analysis/{hseJobSafetyAnalysis}', [HseJobSafetyAnalysisController::class,'update']);
    Route::delete('/hse-jobsafety-analysis/{hseJobSafetyAnalysis}', [HseJobSafetyAnalysisController::class,'destroy']);
    Route::post('/hse-jobsafety-analysis-status/{hseJobSafetyAnalysis}', [HseJobSafetyAnalysisController::class,'edit']);


    Route::get('/hse-safety-analysis-ppe', [HseJobSafetyAnalysisPPEController::class,'index']);
    Route::post('/hse-safety-analysis-ppe', [HseJobSafetyAnalysisPPEController::class,'store']);
    Route::post('/hse-safety-analysis-ppe/{hseJobSafetyAnalysisPPE}', [HseJobSafetyAnalysisPPEController::class,'update']);
    Route::get('/hse-safety-analysis-ppe/{hseJobSafetyAnalysisPPE}', [HseJobSafetyAnalysisPPEController::class,'show']);
    Route::delete('/hse-safety-analysis-ppe/{hseJobSafetyAnalysisPPE}', [HseJobSafetyAnalysisPPEController::class,'destroy']);


    Route::get('/hse-emergency-preparedness', [HseEmergencyPreparednessController::class,'index']);
    Route::post('/hse-emergency-preparedness', [HseEmergencyPreparednessController::class,'store']);
    Route::get('/hse-emergency-preparedness/{hseEmergencyPreparedness}', [HseEmergencyPreparednessController::class,'show']);
    Route::post('/hse-emergency-preparedness/{hseEmergencyPreparedness}', [HseEmergencyPreparednessController::class,'update']);
    Route::delete('/hse-emergency-preparedness/{hseEmergencyPreparedness}', [HseEmergencyPreparednessController::class,'destroy']);
    Route::post('/hse-emergency-preparedness-status/{hseEmergencyPreparedness}', [HseEmergencyPreparednessController::class,'edit']);


    Route::get('/jcb-checklists', [JCBChecklistController::class,'index']);
    Route::post('/jcb-checklists', [JCBChecklistController::class,'store']);
    Route::get('/jcb-checklists/{jCBChecklist}', [JCBChecklistController::class,'show']);
    Route::post('/jcb-checklists/{jCBChecklist}', [JCBChecklistController::class,'update']);
    Route::delete('/jcb-checklists/{jCBChecklist}', [JCBChecklistController::class,'destroy']);

    Route::get('/excavator-checklists', [ExcavatorChecklistController::class,'index']);
    Route::post('/excavator-checklists', [ExcavatorChecklistController::class,'store']);
    Route::get('/excavator-checklists/{excavatorChecklist}', [ExcavatorChecklistController::class,'show']);
    Route::post('/excavator-checklists/{excavatorChecklist}', [ExcavatorChecklistController::class,'update']);
    Route::delete('/excavator-checklists/{excavatorChecklist}', [ExcavatorChecklistController::class,'destroy']);

    Route::get('/earth-compactors-checklists', [EarthCompactorController::class,'index']);
    Route::post('/earth-compactors-checklists', [EarthCompactorController::class,'store']);
    Route::get('/earth-compactors-checklists/{hseEmergencyPreparedness}', [EarthCompactorController::class,'show']);
    Route::post('/earth-compactors-checklists/{hseEmergencyPreparedness}', [EarthCompactorController::class,'update']);
    Route::delete('/earth-compactors-checklists/{hseEmergencyPreparedness}', [EarthCompactorController::class,'destroy']);

    Route::get('/dumper-checklists', [DumperChecklistController::class,'index']);
    Route::post('/dumper-checklists', [DumperChecklistController::class,'store']);
    Route::get('/dumper-checklists/{dumperChecklist}', [DumperChecklistController::class,'show']);
    Route::post('/dumper-checklists/{dumperChecklist}', [DumperChecklistController::class,'update']);
    Route::delete('/dumper-checklists/{dumperChecklist}', [DumperChecklistController::class,'destroy']);


    Route::get('/concrete-mixer-checklists', [ConcreteMixerController::class,'index']);
    Route::post('/concrete-mixer-checklists', [ConcreteMixerController::class,'store']);
    Route::get('/concrete-mixer-checklists/{concreteMixer}', [ConcreteMixerController::class,'show']);
    Route::post('/concrete-mixer-checklists/{concreteMixer}', [ConcreteMixerController::class,'update']);
    Route::delete('/concrete-mixer-checklists/{concreteMixer}', [ConcreteMixerController::class,'destroy']);


    Route::get('/transit-mixers-checklists', [TransitMixerController::class,'index']);
    Route::post('/transit-mixers-checklists', [TransitMixerController::class,'store']);
    Route::get('/transit-mixers-checklists/{transitMixer}', [TransitMixerController::class,'show']);
    Route::post('/transit-mixers-checklists/{transitMixer}', [TransitMixerController::class,'update']);
    Route::delete('/transit-mixers-checklists/{transitMixer}', [TransitMixerController::class,'destroy']);


    Route::get('/concrete-pump-checklists', [ConcretePumpController::class,'index']);
    Route::post('/concrete-pump-checklists', [ConcretePumpController::class,'store']);
    Route::get('/concrete-pump-checklists/{concretePump}', [ConcretePumpController::class,'show']);
    Route::post('/concrete-pump-checklists/{concretePump}', [ConcretePumpController::class,'update']);
    Route::delete('/concrete-pump-checklists/{concretePump}', [ConcretePumpController::class,'destroy']);


    Route::get('/boom-placer-checklists', [BoomPlacerController::class,'index']);
    Route::post('/boom-placer-checklists', [BoomPlacerController::class,'store']);
    Route::get('/boom-placer-checklists/{boomPlacer}', [BoomPlacerController::class,'show']);
    Route::post('/boom-placer-checklists/{boomPlacer}', [BoomPlacerController::class,'update']);
    Route::delete('/boom-placer-checklists/{boomPlacer}', [BoomPlacerController::class,'destroy']);

    Route::get('/electrical-vibrator-checklists', [ElectricalVibratorController::class,'index']);
    Route::post('/electrical-vibrator-checklists', [ElectricalVibratorController::class,'store']);
    Route::get('/electrical-vibrator-checklists/{electricalVibrator}', [ElectricalVibratorController::class,'show']);
    Route::post('/electrical-vibrator-checklists/{electricalVibrator}', [ElectricalVibratorController::class,'update']);
    Route::delete('/electrical-vibrator-checklists/{electricalVibrator}', [ElectricalVibratorController::class,'destroy']);

    Route::get('/bar-cutting-machine-checklists', [BarCuttingMachineController::class,'index']);
    Route::post('/bar-cutting-machine-checklists', [BarCuttingMachineController::class,'store']);
    Route::get('/bar-cutting-machine-checklists/{barCuttingMachine}', [BarCuttingMachineController::class,'show']);
    Route::post('/bar-cutting-machine-checklists/{barCuttingMachine}', [BarCuttingMachineController::class,'update']);
    Route::delete('/bar-cutting-machine-checklists/{barCuttingMachine}', [BarCuttingMachineController::class,'destroy']);

    Route::get('/bar-bending-machine-checklists', [BarBendingMachineController::class,'index']);
    Route::post('/bar-bending-machine-checklists', [BarBendingMachineController::class,'store']);
    Route::get('/bar-bending-machine-checklists/{barBendingMachine}', [BarBendingMachineController::class,'show']);
    Route::post('/bar-bending-machine-checklists/{barBendingMachine}', [BarBendingMachineController::class,'update']);
    Route::delete('/bar-bending-machine-checklists/{barBendingMachine}', [BarBendingMachineController::class,'destroy']);

    Route::get('/breaker-checklists', [BreakerController::class,'index']);
    Route::post('/breaker-checklists', [BreakerController::class,'store']);
    Route::get('/breaker-checklists/{breaker}', [BreakerController::class,'show']);
    Route::post('/breaker-checklists/{breaker}', [BreakerController::class,'update']);
    Route::delete('/breaker-checklists/{breaker}', [BreakerController::class,'destroy']);

    Route::get('/drill-machine-checklists', [DrillMachineController::class,'index']);
    Route::post('/drill-machine-checklists', [DrillMachineController::class,'store']);
    Route::get('/drill-machine-checklists/{drillMachine}', [DrillMachineController::class,'show']);
    Route::post('/drill-machine-checklists/{drillMachine}', [DrillMachineController::class,'update']);
    Route::delete('/drill-machine-checklists/{drillMachine}', [DrillMachineController::class,'destroy']);

    Route::get('/hydra-checklists', [HydraController::class,'index']);
    Route::post('/hydra-checklists', [HydraController::class,'store']);
    Route::get('/hydra-checklists/{hydra}', [HydraController::class,'show']);
    Route::post('/hydra-checklists/{hydra}', [HydraController::class,'update']);
    Route::delete('/hydra-checklists/{hydra}', [HydraController::class,'destroy']);

    Route::get('/mobile-crane-checklists', [MobileCraneController::class,'index']);
    Route::post('/mobile-crane-checklists', [MobileCraneController::class,'store']);
    Route::get('/mobile-crane-checklists/{mobileCrane}', [MobileCraneController::class,'show']);
    Route::post('/mobile-crane-checklists/{mobileCrane}', [MobileCraneController::class,'update']);
    Route::delete('/mobile-crane-checklists/{mobileCrane}', [MobileCraneController::class,'destroy']);

    Route::get('/tower-crane-checklists', [TowerCraneController::class,'index']);
    Route::post('/tower-crane-checklists', [TowerCraneController::class,'store']);
    Route::get('/tower-crane-checklists/{towerCrane}', [TowerCraneController::class,'show']);
    Route::post('/tower-crane-checklists/{towerCrane}', [TowerCraneController::class,'update']);
    Route::delete('/tower-crane-checklists/{towerCrane}', [TowerCraneController::class,'destroy']);

    Route::get('/diesel-generator-checklists', [DieselGeneratorController::class,'index']);
    Route::post('/diesel-generator-checklists', [DieselGeneratorController::class,'store']);
    Route::get('/diesel-generator-checklists/{dieselGenerator}', [DieselGeneratorController::class,'show']);
    Route::post('/diesel-generator-checklists/{dieselGenerator}', [DieselGeneratorController::class,'update']);
    Route::delete('/diesel-generator-checklists/{dieselGenerator}', [DieselGeneratorController::class,'destroy']);

    Route::get('/power-distribution-panel-checklists', [PowerDistributionPanelController::class,'index']);
    Route::post('/power-distribution-panel-checklists', [PowerDistributionPanelController::class,'store']);
    Route::get('/power-distribution-panel-checklists/{powerDistributionPanel}', [PowerDistributionPanelController::class,'show']);
    Route::post('/power-distribution-panel-checklists/{powerDistributionPanel}', [PowerDistributionPanelController::class,'update']);
    Route::delete('/power-distribution-panel-checklists/{powerDistributionPanel}', [PowerDistributionPanelController::class,'destroy']);

    Route::get('/gas-cutting-set-checklists', [GasCuttingSetController::class,'index']);
    Route::post('/gas-cutting-set-checklists', [GasCuttingSetController::class,'store']);
    Route::get('/gas-cutting-set-checklists/{gasCuttingSet}', [GasCuttingSetController::class,'show']);
    Route::post('/gas-cutting-set-checklists/{gasCuttingSet}', [GasCuttingSetController::class,'update']);
    Route::delete('/gas-cutting-set-checklists/{gasCuttingSet}', [GasCuttingSetController::class,'destroy']);

    Route::get('/portable-grinder-checklists', [PortableGrinderController::class,'index']);
    Route::post('/portable-grinder-checklists', [PortableGrinderController::class,'store']);
    Route::get('/portable-grinder-checklists/{portableGrinder}', [PortableGrinderController::class,'show']);
    Route::post('/portable-grinder-checklists/{portableGrinder}', [PortableGrinderController::class,'update']);
    Route::delete('/portable-grinder-checklists/{portableGrinder}', [PortableGrinderController::class,'destroy']);

    Route::get('/welding-machine-checklists', [WeldingMachineController::class,'index']);
    Route::post('/welding-machine-checklists', [WeldingMachineController::class,'store']);
    Route::get('/welding-machine-checklists/{weldingMachine}', [WeldingMachineController::class,'show']);
    Route::post('/welding-machine-checklists/{weldingMachine}', [WeldingMachineController::class,'update']);
    Route::delete('/welding-machine-checklists/{weldingMachine}', [WeldingMachineController::class,'destroy']);

    Route::get('/electrical-pump-checklists', [ElectricalPumpController::class,'index']);
    Route::post('/electrical-pump-checklists', [ElectricalPumpController::class,'store']);
    Route::get('/electrical-pump-checklists/{electricalPump}', [ElectricalPumpController::class,'show']);
    Route::post('/electrical-pump-checklists/{electricalPump}', [ElectricalPumpController::class,'update']);
    Route::delete('/electrical-pump-checklists/{electricalPump}', [ElectricalPumpController::class,'destroy']);

    Route::get('/winch-machine-checklists', [WinchMachineController::class,'index']);
    Route::post('/winch-machine-checklists', [WinchMachineController::class,'store']);
    Route::get('/winch-machine-checklists/{winchMachine}', [WinchMachineController::class,'show']);
    Route::post('/winch-machine-checklists/{winchMachine}', [WinchMachineController::class,'update']);
    Route::delete('/winch-machine-checklists/{winchMachine}', [WinchMachineController::class,'destroy']);

    Route::get('/chain-pulley-block-checklists', [ChainPulleyBlockController::class,'index']);
    Route::post('/chain-pulley-block-checklists', [ChainPulleyBlockController::class,'store']);
    Route::get('/chain-pulley-block-checklists/{chainPulleyBlock}', [ChainPulleyBlockController::class,'show']);
    Route::post('/chain-pulley-block-checklists/{chainPulleyBlock}', [ChainPulleyBlockController::class,'update']);
    Route::delete('/chain-pulley-block-checklists/{chainPulleyBlock}', [ChainPulleyBlockController::class,'destroy']);

    Route::get('/lifting-tools-tackles-checklists', [LiftingToolsTacklesController::class,'index']);
    Route::post('/lifting-tools-tackles-checklists', [LiftingToolsTacklesController::class,'store']);
    Route::get('/lifting-tools-tackles-checklists/{liftingToolsTackles}', [LiftingToolsTacklesController::class,'show']);
    Route::post('/lifting-tools-tackles-checklists/{liftingToolsTackles}', [LiftingToolsTacklesController::class,'update']);
    Route::delete('/lifting-tools-tackles-checklists/{liftingToolsTackles}', [LiftingToolsTacklesController::class,'destroy']);

    Route::get('/air-compressor-checklists', [AirCompressorController::class,'index']);
    Route::post('/air-compressor-checklists', [AirCompressorController::class,'store']);
    Route::get('/air-compressor-checklists/{airCompressor}', [AirCompressorController::class,'show']);
    Route::post('/air-compressor-checklists/{airCompressor}', [AirCompressorController::class,'update']);
    Route::delete('/air-compressor-checklists/{airCompressor}', [AirCompressorController::class,'destroy']);

    Route::get('/sand-blasting-set-checklists', [SandBlastingSetController::class,'index']);
    Route::post('/sand-blasting-set-checklists', [SandBlastingSetController::class,'store']);
    Route::get('/sand-blasting-set-checklists/{sandBlastingSet}', [SandBlastingSetController::class,'show']);
    Route::post('/sand-blasting-set-checklists/{sandBlastingSet}', [SandBlastingSetController::class,'update']);
    Route::delete('/sand-blasting-set-checklists/{sandBlastingSet}', [SandBlastingSetController::class,'destroy']);

    Route::get('/fire-extinguisher-checklists', [FireExtinguisherController::class,'index']);
    Route::post('/fire-extinguisher-checklists', [FireExtinguisherController::class,'store']);
    Route::get('/fire-extinguisher-checklists/{fireExtinguisher}', [FireExtinguisherController::class,'show']);
    Route::post('/fire-extinguisher-checklists/{fireExtinguisher}', [FireExtinguisherController::class,'update']);
    Route::delete('/fire-extinguisher-checklists/{fireExtinguisher}', [FireExtinguisherController::class,'destroy']);

    Route::get('/bench-cutting-machine-checklists', [BenchCuttingMachineController::class,'index']);
    Route::post('/bench-cutting-machine-checklists', [BenchCuttingMachineController::class,'store']);
    Route::get('/bench-cutting-machine-checklists/{benchCuttingMachine}', [BenchCuttingMachineController::class,'show']);
    Route::post('/bench-cutting-machine-checklists/{benchCuttingMachine}', [BenchCuttingMachineController::class,'update']);
    Route::delete('/bench-cutting-machine-checklists/{benchCuttingMachine}', [BenchCuttingMachineController::class,'destroy']);

    Route::get('/pedestal-grinder-checklists', [PedestalGrinderController::class,'index']);
    Route::post('/pedestal-grinder-checklists', [PedestalGrinderController::class,'store']);
    Route::get('/pedestal-grinder-checklists/{pedestalGrinder}', [PedestalGrinderController::class,'show']);
    Route::post('/pedestal-grinder-checklists/{pedestalGrinder}', [PedestalGrinderController::class,'update']);
    Route::delete('/pedestal-grinder-checklists/{pedestalGrinder}', [PedestalGrinderController::class,'destroy']);

    Route::get('/circular-saw-checklists', [CircularSawController::class,'index']);
    Route::post('/circular-saw-checklists', [CircularSawController::class,'store']);
    Route::get('/circular-saw-checklists/{circularSaw}', [CircularSawController::class,'show']);
    Route::post('/circular-saw-checklists/{circularSaw}', [CircularSawController::class,'update']);
    Route::delete('/circular-saw-checklists/{circularSaw}', [CircularSawController::class,'destroy']);

    Route::get('/batching-plant-checklists', [BatchingPlantController::class,'index']);
    Route::post('/batching-plant-checklists', [BatchingPlantController::class,'store']);
    Route::get('/batching-plant-checklists/{batchingPlant}', [BatchingPlantController::class,'show']);
    Route::post('/batching-plant-checklists/{batchingPlant}', [BatchingPlantController::class,'update']);
    Route::delete('/batching-plant-checklists/{batchingPlant}', [BatchingPlantController::class,'destroy']);

    Route::get('/ambulance-checklists', [AmbulanceController::class,'index']);
    Route::post('/ambulance-checklists', [AmbulanceController::class,'store']);
    Route::get('/ambulance-checklists/{ambulance}', [AmbulanceController::class,'show']);
    Route::post('/ambulance-checklists/{ambulance}', [AmbulanceController::class,'update']);
    Route::delete('/ambulance-checklists/{ambulance}', [AmbulanceController::class,'destroy']);

    Route::get('/skidSteer-loader-checklists', [SkidSteerLoaderController::class,'index']);
    Route::post('/skidSteer-loader-checklists', [SkidSteerLoaderController::class,'store']);
    Route::get('/skidSteer-loader-checklists/{skidSteerLoader}', [SkidSteerLoaderController::class,'show']);
    Route::post('/skidSteer-loader-checklists/{skidSteerLoader}', [SkidSteerLoaderController::class,'update']);
    Route::delete('/skidSteer-loader-checklists/{skidSteerLoader}', [SkidSteerLoaderController::class,'destroy']);

    Route::get('/grader-checklists', [GraderController::class,'index']);
    Route::post('/grader-checklists', [GraderController::class,'store']);
    Route::get('/grader-checklists/{grader}', [GraderController::class,'show']);
    Route::post('/grader-checklists/{grader}', [GraderController::class,'update']);
    Route::delete('/grader-checklists/{grader}', [GraderController::class,'destroy']);

    Route::get('/gantry-crane-checklists', [GantryCraneController::class,'index']);
    Route::post('/gantry-crane-checklists', [GantryCraneController::class,'store']);
    Route::get('/gantry-crane-checklists/{gantryCrane}', [GantryCraneController::class,'show']);
    Route::post('/gantry-crane-checklists/{gantryCrane}', [GantryCraneController::class,'update']);
    Route::delete('/gantry-crane-checklists/{gantryCrane}', [GantryCraneController::class,'destroy']);

    Route::get('/eot-crane-checklists', [EotCraneController::class,'index']);
    Route::post('/eot-crane-checklists', [EotCraneController::class,'store']);
    Route::get('/eot-crane-checklists/{eotCrane}', [EotCraneController::class,'show']);
    Route::post('/eot-crane-checklists/{eotCrane}', [EotCraneController::class,'update']);
    Route::delete('/eot-crane-checklists/{eotCrane}', [EotCraneController::class,'destroy']);

    Route::get('/trailer-checklists', [TrailerController::class,'index']);
    Route::post('/trailer-checklists', [TrailerController::class,'store']);
    Route::get('/trailer-checklists/{trailer}', [TrailerController::class,'show']);
    Route::post('/trailer-checklists/{trailer}', [TrailerController::class,'update']);
    Route::delete('/trailer-checklists/{trailer}', [TrailerController::class,'destroy']);

    Route::get('/four-wheeler-checklists', [FourWheelerController::class,'index']);
    Route::post('/four-wheeler-checklists', [FourWheelerController::class,'store']);
    Route::get('/four-wheeler-checklists/{fourWheeler}', [FourWheelerController::class,'show']);
    Route::post('/four-wheeler-checklists/{fourWheeler}', [FourWheelerController::class,'update']);
    Route::delete('/four-wheeler-checklists/{fourWheeler}', [FourWheelerController::class,'destroy']);

    Route::get('/bus-checklists', [BusController::class,'index']);
    Route::post('/bus-checklists', [BusController::class,'store']);
    Route::get('/bus-checklists/{bus}', [BusController::class,'show']);
    Route::post('/bus-checklists/{bus}', [BusController::class,'update']);
    Route::delete('/bus-checklists/{bus}', [BusController::class,'destroy']);

    Route::get('/diesel-tanker-checklists', [DieselTankerController::class,'index']);
    Route::post('/diesel-tanker-checklists', [DieselTankerController::class,'store']);
    Route::get('/diesel-tanker-checklists/{dieselTanker}', [DieselTankerController::class,'show']);
    Route::post('/diesel-tanker-checklists/{dieselTanker}', [DieselTankerController::class,'update']);
    Route::delete('/diesel-tanker-checklists/{dieselTanker}', [DieselTankerController::class,'destroy']);

    Route::get('/water-tanker-checklists', [WaterTankerController::class,'index']);
    Route::post('/water-tanker-checklists', [WaterTankerController::class,'store']);
    Route::get('/water-tanker-checklists/{waterTanker}', [WaterTankerController::class,'show']);
    Route::post('/water-tanker-checklists/{waterTanker}', [WaterTankerController::class,'update']);
    Route::delete('/water-tanker-checklists/{waterTanker}', [WaterTankerController::class,'destroy']);

    Route::get('/bike-checklists', [BikeController::class,'index']);
    Route::post('/bike-checklists', [BikeController::class,'store']);
    Route::get('/bike-checklists/{bike}', [BikeController::class,'show']);
    Route::post('/bike-checklists/{bike}', [BikeController::class,'update']);
    Route::delete('/bike-checklists/{bike}', [BikeController::class,'destroy']);


    Route::get('/safety-observation-dashboard', SafetyObservationDashboardController::class);
    Route::get('/environment-dashboard', EnvironmentDashboardController::class);
    Route::get('/safety-observation-rd-dashboard', [SafetyObsDashboardController::class,'responsible_department']);
    Route::get('/safety-observation-od-dashboard', [SafetyObsDashboardController::class,'owner_department']);
    Route::get('/safety-observation-due-tracker-dashboard', [SafetyObsDashboardController::class,'due_tracker']);

    Route::get('/question-answer', [QuestionAnswerController::class,'index']);
    Route::post('/question-answer', [QuestionAnswerController::class,'store']);
    Route::post('/question-answer/{questionAnswer}', [QuestionAnswerController::class,'update']);
    Route::get('/question-answer/{questionAnswer}', [QuestionAnswerController::class,'show']);
    Route::delete('/question-answer/{questionAnswer}', [QuestionAnswerController::class,'destroy']);

    Route::get('/question-answer-list-trn-id/{trainingTopicId}', [QuestionAnswerController::class, 'ListByTrainingTopicID']);
    Route::get('/question-answer-list/{trainingTopicId}', [QuestionAnswerController::class, 'ListByTraining']);


    Route::get('/user-submit-answer', [UserSubmitAnswerController::class,'index']);
    Route::post('/user-submit-answer', [UserSubmitAnswerController::class,'store']);
    Route::post('/user-submit-answer/{userSubmitAnswer}', [UserSubmitAnswerController::class,'update']);
    Route::get('/user-submit-answer/{userSubmitAnswer}', [UserSubmitAnswerController::class,'show']);
    Route::delete('/user-submit-answer/{userSubmitAnswer}', [UserSubmitAnswerController::class,'destroy']);

    Route::get('/energy-records', [EnergyRecordsController::class, 'index']);
    Route::post('/energy-records', [EnergyRecordsController::class, 'store']);
    Route::post('/energy-records/{energyRecord}', [EnergyRecordsController::class, 'update']);
    Route::get('/energy-records/{energyRecord}', [EnergyRecordsController::class, 'show']);
    Route::delete('/energy-records/{energyRecord}', [EnergyRecordsController::class, 'destroy']);

    Route::get('/water-consumption', [WaterConsumptionController::class, 'index']);
    Route::post('/water-consumption', [WaterConsumptionController::class, 'store']);
    Route::post('/water-consumption/{waterConsumption}', [WaterConsumptionController::class, 'update']);
    Route::get('/water-consumption/{waterConsumption}', [WaterConsumptionController::class, 'show']);
    Route::delete('/water-consumption/{waterConsumption}', [WaterConsumptionController::class, 'destroy']);

    Route::get('/non-hazardous-waste-inventory', [NonHazardousWasteInventoryController::class, 'index']); // List all non-hazardous waste records
    Route::post('/non-hazardous-waste-inventory', [NonHazardousWasteInventoryController::class, 'store']); // Create a new non-hazardous waste record
    Route::put('/non-hazardous-waste-inventory/{nonHazardousWasteInventory}', [NonHazardousWasteInventoryController::class, 'update']); // Update an existing non-hazardous waste record
    Route::get('/non-hazardous-waste-inventory/{nonHazardousWasteInventory}', [NonHazardousWasteInventoryController::class, 'show']); // Show a specific non-hazardous waste record
    Route::delete('/non-hazardous-waste-inventory/{nonHazardousWasteInventory}', [NonHazardousWasteInventoryController::class, 'destroy']); // Delete a specific non-hazardous waste record

    Route::get('/hazardous-waste-inventories', [HazardousWasteInventoriesController::class, 'index']);
    Route::post('/hazardous-waste-inventories', [HazardousWasteInventoriesController::class, 'store']);
    Route::get('/hazardous-waste-inventories/{hazardousWasteInventory}', [HazardousWasteInventoriesController::class, 'show']);
    Route::post('/hazardous-waste-inventories/{hazardousWasteInventory}', [HazardousWasteInventoriesController::class, 'update']);
    Route::delete('/hazardous-waste-inventories/{hazardousWasteInventory}', [HazardousWasteInventoriesController::class, 'destroy']);

    Route::get('/hira-lites', [HiraLiteController::class, 'index']);
    Route::post('/hira-lites', [HiraLiteController::class, 'store']);
    Route::get('/hira-lites/{hiraLite}', [HiraLiteController::class, 'show']);
    Route::post('/hira-lites/{hiraLite}', [HiraLiteController::class, 'update']);
    Route::delete('/hira-lites/{hiraLite}', [HiraLiteController::class, 'destroy']);
    Route::get('/hira-lites-drop-down', [HiraLiteController::class, 'getHiraLiteData']);

//    hira lites risk assessment
    Route::get('/hira-lites-assessment', [HiraLitesAssessmentController::class, 'index']);
    Route::post('/hira-lites-assessment', [HiraLitesAssessmentController::class, 'store']);
    Route::get('/hira-lites-assessment/{hiraLiteAssessment}', [HiraLitesAssessmentController::class, 'show']);
    Route::get('/hira-lites-assessment/edit/{hiraLiteAssessment}', [HiraLitesAssessmentController::class, 'edit']);
    Route::put('/hira-lites-assessment/update/{hiraLiteAssessment}', [HiraLitesAssessmentController::class, 'update']);
    Route::delete('/hira-lites-assessment/delete/{hiraLiteAssessment}', [HiraLitesAssessmentController::class, 'destroy']);

    Route::get('/accel-safety-words', [AccelSafetyWordController::class, 'index']);
    Route::post('/accel-safety-words', [AccelSafetyWordController::class, 'store']);
    Route::get('/accel-safety-words/{accelSafetyWord}', [AccelSafetyWordController::class, 'show']);
    Route::post('/accel-safety-words/{accelSafetyWord}', [AccelSafetyWordController::class, 'update']);
    Route::delete('/accel-safety-words/{accelSafetyWord}', [AccelSafetyWordController::class, 'destroy']);

    Route::post('/upload', [UploadController::class, 'uploadImage']);

//   EHS calculator
    Route::prefix('calculator')->name('calculator.')->group(function () {
        Route::post('/fire-extinguisher-placement-calculator', [CalculatorController::class, 'fire_extinguisher_placement_calculator']);
        Route::post('/swl-of-wire-rope', [CalculatorController::class, 'swl_of_wire_rope']);
        Route::post('/stack-height-calculator', [CalculatorController::class, 'stack_height_calculator']);
        Route::post('/ip-ratings-checker-calculator', [CalculatorController::class, 'ip_ratings_checker_calculator']);
        Route::post('/excavation-slope-calculator', [CalculatorController::class, 'excavation_slope_calculator']);
        Route::post('/fall-clearance-calculator', [CalculatorController::class, 'fall_clearance_calculator']);
        Route::post('/ladder-length-calculator', [CalculatorController::class, 'ladder_length_calculator']);
        Route::post('/fire-load-calculator', [CalculatorController::class, 'fire_load_calculator']);
        Route::post('/bulldog-grips-calculator', [CalculatorController::class, 'bulldog_grips_calculator']);
        Route::post('/lost-time-injury-frequency-rate', [CalculatorController::class, 'lost_time_injury_frequency_rate']);
        Route::post('/severity-rate-calculator', [CalculatorController::class, 'severity_rate_calculator']);
        Route::post('/incidence-rate-calculator', [CalculatorController::class, 'incidence_rate_calculator']);
        Route::post('/ambient-noise-level-calculator', [CalculatorController::class, 'ambient_noise_level_calculator']);
        Route::post('/generalized-anxiety-disorder-assessment', [CalculatorController::class, 'generalized_anxiety_disorder_assessment']);
        Route::post('/daily-drinking-water-intake-calculator', [CalculatorController::class, 'daily_drinking_water_intake_calculator']);
//        other country OHSA calculator
        Route::post('/osha-total-recordable-incident-rate-trir-calculator', [CalculatorController::class, 'osha_total_recordable_incident_rate_trir_calculator']);
        Route::post('/osha-dart-rate-calculator', [CalculatorController::class, 'osha_dart_rate_calculator']);
        Route::post('/nema-ratings-and-ip-equivalency-calculator', [CalculatorController::class, 'nema_ratings_and_ip_equivalency_calculator']);
    });

    Route::prefix('roles')->name('roles.')->group(function () {
        Route::resource('/', RoleController::class)->except(['update','edit']);
        Route::get('/edit/{id}', [RoleController::class, 'edit']);
        Route::put('/update/{id}', [RoleController::class, 'update']);
        Route::get('/delete/{id}', [RoleController::class, 'destroy']);

    });

    Route::prefix('users')->name('users.')->group(function () {
        Route::resource('/', UserController::class)->except(['update','edit']);
        Route::get('/edit/{userId}', [UserController::class, 'edit']);
        Route::put('/update/{userId}', [UserController::class, 'update']);
        Route::get('/delete/{userId}', [UserController::class, 'destroy']);

    });


//    site info and permit
    Route::prefix('site-info-permit')->name('site_info_permit.')->group(function () {
        Route::get('/', [SiteInfoPermitController::class,'index']);
        Route::get('/create', [SiteInfoPermitController::class, 'create']);
        Route::post('/create', [SiteInfoPermitController::class, 'store']);
        Route::get('/edit/{userId}', [SiteInfoPermitController::class, 'edit']);
        Route::put('/update/{userId}', [SiteInfoPermitController::class, 'update']);
        Route::get('/delete/{userId}', [SiteInfoPermitController::class, 'destroy']);

    });

//    power vehicle
    Route::prefix('power-vehicle')->name('power_vehicle.')->group(function () {
        Route::get('/', [PowerVehicleController::class,'index']);
        Route::post('/', [PowerVehicleController::class,'store']);
        Route::get('/edit/{vehicleId}', [PowerVehicleController::class, 'edit']);
        Route::put('/update/{vehicleId}', [PowerVehicleController::class, 'update']);
        Route::get('/delete/{vehicleId}', [PowerVehicleController::class, 'destroy']);

    });


    //    Visitor Entry
    Route::prefix('visitor-entry')->name('visitor-entry.')->group(function () {
        Route::get('/', [VisitorEntryController::class,'index']);
        Route::post('/', [VisitorEntryController::class,'store']);
        Route::get('/edit/{visitorId}', [VisitorEntryController::class, 'edit']);
        Route::post('/update/{visitorId}', [VisitorEntryController::class, 'update']);
        Route::delete('/delete/{visitorId}', [VisitorEntryController::class, 'destroy']);

    });


});

Route::get('/test-email', function () {
    Mail::raw('This is a test email.', function ($message) {
        $message->to('your_email@example.com')
                ->subject('Test Email');
    });

    return 'Test email sent!';
});







