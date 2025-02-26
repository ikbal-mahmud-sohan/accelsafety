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


}
