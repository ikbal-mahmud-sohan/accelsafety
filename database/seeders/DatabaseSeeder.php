<?php

namespace Database\Seeders;

use App\Models\AccidentInjuryType;
use App\Models\AccidentMonth;
use App\Models\AccidentType;
use App\Models\AssignSpecialTraining;
use App\Models\AssignTraining;
use App\Models\employee_department;
use App\Models\employee_designation;
use App\Models\EmployeeDepartment;
use App\Models\EmployeeDesignation;
use App\Models\EmployeeInfo;
use App\Models\SafetyObservation;
use App\Models\Training;
use App\Models\TrainingAttendence;
use App\Models\TrainingTopics;
use App\Models\User;
use Database\Factories\TrainingTopicsFactory;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        User::factory(2)->create();
        // Training::factory(5)->create();
        // SafetyObservation::factory(5)->create();
        // TrainingAttendence::factory(5)->create();
        // Seed Accident Months
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
        EmployeeDepartment::factory()->create();
        EmployeeDesignation::factory()->create();
        EmployeeInfo::factory(5)->create();
        $topics = TrainingTopicsFactory::topicNames();
        foreach ($topics as $topic) {
            TrainingTopics::factory()->create(['name' => $topic]);
        }
        // AssignTraining::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
