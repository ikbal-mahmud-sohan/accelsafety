<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Spatie\Permission\Models\Permission;

class PermissionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $permissions = [
            "dashboard",
            "report_dashboard",
            "environment_dashboard",

            "safety_observation_list",
            "safety_observation_create",

            "accident_data_list",
            "accident_data_create",
            "accident_investigations",

            "trainings_need_analysis_list",
            "assign_training",
            "assign_multiple_training",
            "training_create",
            "training_attendances",
            "training_attendances_create",
            "training_attendances_multiple",
            "question_and_answer",
            "user_submit_answer",
            "user_results",

            "hira_list",
            "hira_risk_assessment_list",
            "hira_risk_assessment_create",

            "energy_records_create",
            "energy_records_list",

            "water_consumption_create",
            "water_consumption_list",

            "waste_consumption_create",
            "waste_consumption_list",

            "hse",
            "employee_info_list",
            "employee_info_create",

            "departments",
            "designation",

            "safety_observation_input",
            "accident_input",
            "hira_input",
            "unit_input",

            "accel_safety_words_create",
            "accel_safety_words_list",

            "calculators",

            "role_list",
            "role_add",
            "role_edit",
            "role_delete",
        ];

        foreach ($permissions as $key => $permission) {
            Permission::create(['name' => $permission]);
        }
    }
}
