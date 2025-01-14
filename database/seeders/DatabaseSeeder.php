<?php

namespace Database\Seeders;

use App\Models\AccidentInjuryType;
use App\Models\AccidentInvestigation;
use App\Models\AccidentMonth;
use App\Models\AccidentType;
use App\Models\AssignSpecialTraining;
use App\Models\AssignTraining;
use App\Models\employee_department;
use App\Models\employee_designation;
use App\Models\EmployeeDepartment;
use App\Models\EmployeeDesignation;
use App\Models\EmployeeInfo;
use App\Models\Hira;
use App\Models\HiraActivity;
use App\Models\HiraAdministrative;
use App\Models\HiraCause;
use App\Models\HiraEngineering;
use App\Models\HiraEvent;
use App\Models\HiraImpact;
use App\Models\HiraLocation;
use App\Models\HiraOccupations;
use App\Models\HiraPPE;
use App\Models\HiraProcess;
use App\Models\HiraTypeOfActivity;
use App\Models\HseVehicleSafety;
use App\Models\SafetyObservation;
use App\Models\SafetyObservationOwnerDepartment;
use App\Models\SafetyObservationPlantName;
use App\Models\SafetyObservationRespDepartment;
use App\Models\Training;
use App\Models\TrainingAttendence;
use App\Models\TrainingTopics;
use App\Models\User;
use Database\Factories\AccidentInvestigationFactory;
use Database\Factories\TrainingTopicsFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory()->create([
            'name' => 'sohan',
            'email' => 'sohan@gmail.com',
            'password' => Hash::make('sohan123'),
        ]);
        $months = [
            'January 2024', 'February 2024', 'March 2024', 'April 2024', 'May 2024', 'June 2024',
            'July 2024', 'August 2024', 'September 2024', 'October 2024', 'November 2024', 'December 2024',
        ];

        foreach ($months as $month) {
            AccidentMonth::create(['name' => $month]);
        }

        $typeAccident  = [
            'First Aid', 'Medical Injury', 'Minor Injury', 'Major Injury', 'Fatal',
        ];

        foreach ($typeAccident  as $ta) {
            AccidentType::create(['name' => $ta]);
        }

        $typeInjurAccident  = [
            'Cut', 
            'Burn', 
            'Irritation ', 
            'Muscle Pain', 
            'Etching', 
            'Fracture', 
            'Sprained', 
            'Other', 
        ];

        foreach ($typeInjurAccident  as $ta) {
            AccidentInjuryType::create(['name' => $ta]);
        }

        // AccidentInvestigation::factory(1)->create();

        $PlantName   = [
            'BISCO', 
            'KEW',
        ];

        foreach ($PlantName   as $ta) {
            SafetyObservationPlantName::create(['name' => $ta]);
        }

        $respDepartment   = [
            'MML', 
            'Electrical',
            'Mechanical',
            'SMS',
            'CCM',
            'Admin & Facilities',
            'HSE',
            'All Over',
            'QCM',
        ];

        foreach ($respDepartment   as $ta) {
            SafetyObservationRespDepartment::create(['name' => $ta]);
        }
        
        $ownerDepartment   = [
            'MML', 
            'Electrical',
            'Mechanical',
            'SMS',
            'CCM',
            'Admin & Facilities',
            'HSE',
            'All Over',
            'QCM',
        ];

        foreach ($ownerDepartment   as $ta) {
            SafetyObservationOwnerDepartment::create(['name' => $ta]);
        }

        EmployeeDepartment::factory()->create();
        EmployeeDesignation::factory()->create();
        EmployeeInfo::factory(5)->create();
        $topics = TrainingTopicsFactory::topicNames();
        foreach ($topics as $topic) {
            TrainingTopics::factory()->create(['name' => $topic]);
        }
        $processes   = [
            'SES fixing',
            'Furniture & Fixture ',
            'APC Dust delivery',
        ];

        foreach ($processes   as $ta) {
            HiraProcess::create(['name' => $ta]);
        }
        
        $activity   = [
            'Cooking',
            
        ];

        foreach ($activity   as $ta) {
            HiraActivity::create(['name' => $ta]);
        }

        $location   = [
            'apron chamber', 'near auto', 'tundish lining',
        ];

        foreach ($location   as $ta) {
            HiraLocation::create(['name' => $ta]);
        }

        $activity   = [
            'A',  
            'N',
            'E', 
        ];

        foreach ($activity   as $ta) {
            HiraTypeOfActivity::create(['name' => $ta]);
        }

        $occupations   = [
            'mold operators',
            'teemer man',
            'Store Asst',
            'Driver',
        ];

        foreach ($occupations   as $ta) {
            HiraOccupations::create(['name' => $ta]);
        }

        $event   = [
            
            'Burn in hand',
            'Fingers pressed',
            'Hit by chips',
            'Heat Absorbation',
        ];

        foreach ($event   as $ta) {
            HiraEvent::create(['name' => $ta]);
        }

        $cause   = [
            'Fallen from hand',
            'Sharp tools',
            'flying of dust',
            'Physical  injury ',
        ];

        foreach ($cause   as $ta) {
            HiraCause::create(['name' => $ta]);
        }

        $impact   = [
            'burn',
            'fracture in hand',
            'May get Eye Strain',
            'fracture in hand ',
            
        ];

        foreach ($impact   as $ta) {
            HiraImpact::create(['name' => $ta]);
        }

        $engineering   = [
            'Use sieve',
            'Battary backup',
            'Preventive',
            'Cantilever Beam ',
        ];

        foreach ($engineering   as $ta) {
            HiraEngineering::create(['name' => $ta]);
        }

        $administrative   = [
            'NA',
            'Ensuring proper',
            'Training',
            'Toolbox talk',
        ];

        foreach ($administrative   as $ta) {
            HiraAdministrative::create(['name' => $ta]);
        }

        $PPE   = [
            '1. Safety shoe ',
            '2. Safety helmet ',
            '3. Welding Hand Gloves',
            '4. Safety Mask',
        ];

        foreach ($PPE   as $ta) {
            HiraPPE::create(['name' => $ta]);
        }

        // HseVehicleSafety::factory(1)->create();

        

        // Hira::factory(5)->create();
    }
}

