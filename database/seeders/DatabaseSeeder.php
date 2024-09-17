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
            'APC Dust delivery',  
            'Apron chamber cleaning during shutdown',  
            'Argon cylinder change',  
            'Billet cutting',  
            'Billet Delivery',  
            'billet inspection',  
            'Billet salvaging activity',  
            'Billet Sample preparation for spectrometric analysis',  
            'Billets cutting & resizing',  
            'Billets head and tail Cutting',  
            'Billets Painting',  
            'Billets storage',  
            'Carpenting works',  
            'CCTV repair & maintenance',  
            'Civil Work',  
            'Civil Work for drain making',  
            'Crane operation',  
            'Crane operation at AB- Bay',  
            'Cylinder (Oxygen, LP, Nitrogen, Argon) gas received from party /sister concern',  
            'De-Burring of Billets',  
            'Disconnect Magnat from EOT Crane',  
            'Distill water plant operation',  
            'dummybar bolt fixing',  
            'Dust from scrap pit (Soil Dust) delivery',  
            'Facilities-Services',  
            'Forma received from supplier',  
            'Furniture & Fixture',  
            'Gardening',  
            'General Maintenance of Spectrometer',  
            'Guest House Management',  
            'HCL acid received from supplier',  
            'Hot Billet Marking',  
            'Hot Billet Inspection',  
            'Hot billets lifting to yard',  
            'House Keeping',  
            'Housekeeping',  
            'Incoming raw materials Inspection',  
            'Incoming Materials Sample preparation',  
            'Mold operation',  
            'Office Equipment repair',  
            'Office gathering',  
            'Office work',  
            'Over size scrap & Metal jam cutting',  
            'PABX Line',  
            'Painting Work',  
            'PC Maintenec',  
            'Pest controlling work',  
            'Physical Stock Taking',  
            'Plumbing Work',  
            'Preventive scale maintenance',  
            'Raw Materials Receiving',  
            'Reconnect with EOT crane',  
            'Sample box cleaning-Waste Disposal',  
            'Scale calibration',  
            'Scale fit cleaning',  
            'Septic Tank Cleaning',  
            'Service in the pantry shop',  
            'SES fixing',  
            'Short Billets Delivery',  
            'Short Billets refurnace',  
            'Slag dust & tundish dust delivery',  
            'Spectrometric analysis',  
            'Stacking of Billet',  
            'Thai work',  
            'Tiles Works',  
            'Tundish jam cleaning',  
            'Tundish lining',  
            'tundish preparation at casting platform',  
            'Unwanted Items segregation',  
            'Using asset items of the office',  
            'Water supply work',  
            'Water test procedure',  
            'Welding',  
            'Wet chemical analysis',  
            'Work Force handling',  
            'work inside apron chamber during CCM running time',  
            'Blanks',  
            'Instruction Board fixing',  
            'Kitchen & dining activity Labor deploying',  
            'ladle operation',  
            'ladle breaking',  
            'ladle lining',  
            'Lime received from supplier',  
            'Liquid gas received from linde',  
            'Lolly pop Sample cartridge preparation',  
            'Lolly pop Sample collection from CCM',  
            'Lolly pop Sample preparation for spectrometric analysis',  
            'Macro Analysis',  
            'Macro Analysis sample preparation',  
            'Macro Analysis used Acid disposal Macro sample collection',  
            'Make Magnets smaller & Larger',  
            'Material issue from outside rack / CCM rack/ Scale rack / Fuel Storage area',  
            'Material issue to user dept. from main store',  
            'Material Received from CPCL',  
            'Materials disposal through D/O to party',  
            'Materials disposal to bhatiary shipyard or Arco foam',  
            'Materials received from H/O through cover van',  
            'Materials received from outside party through by hand',  
            'Materials received from outside party / Sister concern through vehicle',  
            'Materials Send to CPCL or Sister Concern',  
            'Melting end cut refurnace',  
            'Metal jam/skull/bricks cleaning',  
            'mill scale cleaning from drain',  
            'mold cleaning/jacket changing',  
            'Mold operation',  
            'Office Equipment repair',  
            'Office gathering',  
            'Office work',  
            'Over size scrap & Metal jam cutting',  
            'PABX Line',  
            'Painting Work',  
            'PC Maintenec',  
            'Pest controlling work',  
            'Physical Stock Taking',  
            'Plumbing Work',  
        ];

        foreach ($processes   as $ta) {
            HiraProcess::create(['name' => $ta]);
        }
        
        $activity   = [
            'Quartering and coning',
            'Use of Mortar and Pestle',  
            'Use of laboratory hot air Oven', 
        ];

        foreach ($activity   as $ta) {
            HiraActivity::create(['name' => $ta]);
        }

        $location   = [
            'Wet lab',
            'Materials receiving area',  
            'Cylinder stacking area', 
        ];

        foreach ($location   as $ta) {
            HiraLocation::create(['name' => $ta]);
        }

        $activity   = [
            'N',
            'A',  
            'E', 
        ];

        foreach ($activity   as $ta) {
            HiraActivity::create(['name' => $ta]);
        }

        $occupations   = [
            'QC Technician',
            'QC Officer',  
            'MML asstt.', 
        ];

        foreach ($occupations   as $ta) {
            HiraOccupations::create(['name' => $ta]);
        }

        $event   = [
            'Dust generation',
            'Materials contact in skin',  
            'Hit by sharp materials', 
        ];

        foreach ($event   as $ta) {
            HiraEvent::create(['name' => $ta]);
        }

        $cause   = [
            'Sample Quartering and coning',
            'Materials spill from sieve',  
            'Skin irriation', 
        ];

        foreach ($cause   as $ta) {
            HiraCause::create(['name' => $ta]);
        }

        $impact   = [
            'Breathing problems',
            'discomfort',  
            'bleeding', 
        ];

        foreach ($impact   as $ta) {
            HiraImpact::create(['name' => $ta]);
        }

        $engineering   = [
            'NA',
            'Use long tongs',  
            'Use sieve analyzer machine', 
        ];

        foreach ($engineering   as $ta) {
            HiraEngineering::create(['name' => $ta]);
        }

        $administrative   = [
            'Tool box talk',
            'Safety signage',  
            'Follow SDS', 
        ];

        foreach ($administrative   as $ta) {
            HiraAdministrative::create(['name' => $ta]);
        }

        $PPE   = [
            'Dust Mask',
            'Helmet',  
            'Hand Gloves', 
        ];

        foreach ($PPE   as $ta) {
            HiraPPE::create(['name' => $ta]);
        }

        

        // Hira::factory(5)->create();
    }
}

