<?php

namespace Database\Seeders;

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
        Training::factory(5)->create();
        SafetyObservation::factory(5)->create();
        TrainingAttendence::factory(5)->create();
        EmployeeInfo::factory(5)->create();
        $departments = EmployeeDepartment::factory()->departmentNames();


        foreach ($departments as $department) {
            EmployeeDepartment::factory()->create(['name' => $department]);
        }

        EmployeeDepartment::factory()->create();


        $designations = EmployeeDesignation::factory()->designationNames();
        foreach ($designations as $designation) {
            EmployeeDesignation::factory()->create(['name' => $designation]);
        }

        EmployeeDesignation::factory()->create();

        TrainingTopics::factory(20)->create();
        AssignTraining::factory(5)->create();
        AssignSpecialTraining::factory(5)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);
    }
}
