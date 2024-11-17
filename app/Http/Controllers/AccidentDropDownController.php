<?php

namespace App\Http\Controllers;

use App\Http\Resources\AccidentInjuryTypeResource;
use App\Http\Resources\AccidentMonthResource;
use App\Http\Resources\AccidentTypeResource;
use App\Models\AccidentInjuryType;
use App\Models\AccidentMonth;
use App\Models\AccidentType;
use Illuminate\Http\Request;

class AccidentDropDownController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        $month = AccidentMonthResource::collection(AccidentMonth::all());
        $injurytype = AccidentInjuryTypeResource::collection(AccidentInjuryType::all());
        $act = AccidentTypeResource::collection(AccidentType::all());
        return response()->json([
            'Month' => $month,
            'InjuryType' => $injurytype,
            'AccidentType' => $act,
        ]); 

    }
}
