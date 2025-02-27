<?php

namespace App\Http\Controllers\Calculator;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class CalculatorController extends Controller
{
    //fire_extinguisher_placement_calculator
    public function fire_extinguisher_placement_calculator(Request $request){

       $validated= $request->validate([
            'fire_extinguisher_type'=>'required',
            'hazard_type'=>'required',
            'room_size'=>'required|numeric',
        ]);

       return $validated;
    }

    //swl_of_wire_rope
    public function swl_of_wire_rope(Request $request){

        $validated= $request->validate([
            'diameter_of_wire_rope'=>'required',
        ]);

        return $validated;
    }

    //stack-height-calculator
    public function stack_height_calculator(Request $request){

        $validated= $request->validate([
            'height_of_building'=>'required',
            'total_generator_capacity'=>'required',
        ]);

        return $validated;
    }

    //ip_ratings_checker_calculator
    public function ip_ratings_checker_calculator(Request $request){

        $validated= $request->validate([
            'solids'=>'required',
            'liquids'=>'required',
        ]);

        return $validated;
    }

    //excavation_slope_calculator
    public function excavation_slope_calculator(Request $request){

        $validated= $request->validate([
            'soil_type'=>'required',
            'height_of_excavation'=>'required',
            'width_of_excavation'=>'required',
        ]);

        return $validated;
    }

    //excavation_slope_calculator
    public function fall_clearance_calculator(Request $request){

        $validated= $request->validate([
            'safety_factor'=>'required',
            'height_of_suspended_worker'=>'required',
            'deceleration_distance'=>'required',
            'lanyard_length'=>'required',
        ]);

        return $validated;
    }

//ladder_length_calculator
    public function ladder_length_calculator(Request $request){

        $validated= $request->validate([
            'vertical_height'=>'required',
        ]);

        return $validated;
    }
    //fire-load-calculator
    public function fire_load_calculator(Request $request){

        $validated= $request->validate([
            'mass_of_material'=>'required',
            'calories_in_material'=>'required',
            'total_area'=>'required',
        ]);

        return $validated;
    }

    //bulldog_grips_calculator
    public function bulldog_grips_calculator(Request $request){

        $validated= $request->validate([
            'size_of_wire_rope'=>'required',
        ]);

        return $validated;
    }
    //lost_time_injury_frequency_rate
    public function lost_time_injury_frequency_rate(Request $request){

        $validated= $request->validate([
            'number_of_lost_time_injuries'=>'required',
            'total_man_hours_worked'=>'required',
        ]);

        return $validated;
    }

    //severity_rate_calculator
    public function severity_rate_calculator(Request $request){

        $validated= $request->validate([
            'number_of_man_days_lost'=>'required',
            'total_man_hours_worked'=>'required',
        ]);

        return $validated;
    }

    //incidence_rate_calculator
    public function incidence_rate_calculator(Request $request){

        $validated= $request->validate([
            'number_of_lost_time_injuries'=>'required',
            'average_number_of_persons_employed'=>'required',
        ]);

        return $validated;
    }
    //ambient_noise_level_calculator
    public function ambient_noise_level_calculator(Request $request){

        $validated= $request->validate([
            'category_of_area'=>'required',
            'time_of_day'=>'required',
        ]);

        return $validated;
    }

    //generalized_anxiety_disorder_assessment
    public function generalized_anxiety_disorder_assessment(Request $request){

        $validated= $request->validate([
            'feeling_nervous_anxious_or_on_edge'=>'required',
            'not_being_able_to_stop_or_control_worrying'=>'required',
            'worrying_too_much_about_different_things'=>'required',
            'trouble_relaxing'=>'required',
            'being_so_restless_that_hard_to_sit_still'=>'required',
            'becoming_easily_annoyed_or_irritable'=>'required',
            'feeling_afraid_as_if_something_awful_might_happen'=>'required',
        ]);

        return $validated;
    }

    //daily_drinking_water_intake_calculator
    public function daily_drinking_water_intake_calculator(Request $request){

        $validated= $request->validate([
            'life_stage_sex'=>'required',
            'age'=>'required'

        ]);

        return $validated;
    }

    //osha_total_recordable_incident_rate_trir_calculator
    public function osha_total_recordable_incident_rate_trir_calculator(Request $request){

        $validated= $request->validate([
            'number_of_recordable_injuries_and_illnesses'=>'required',
            'total_employee_hours_worked'=>'required'

        ]);

        return $validated;
    }

    //osha_dart_rate_calculator
    public function osha_dart_rate_calculator(Request $request){

        $validated= $request->validate([
            'total_number_of_DART_incidents'=>'required',
            'total_hours_worked'=>'required'

        ]);

        return $validated;
    }

    //nema_ratings_and_ip_equivalency_calculator
    public function nema_ratings_and_ip_equivalency_calculator(Request $request){

        $validated= $request->validate([
            'input_type'=>'required',
            'rating'=>'required'

        ]);

        return $validated;
    }


}
