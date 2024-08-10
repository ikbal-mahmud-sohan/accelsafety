<?php

namespace App\Http\Controllers;

use App\Http\Resources\SafetyObservation as ResourcesSafetyObservation;
use App\Models\SafetyObservation;
use Illuminate\Http\Request;

class CompleteSafetyObservationController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request,  SafetyObservation $safety)
    {
        $safety->status = $request->status;
        $safety->save();
        return  ResourcesSafetyObservation::make($safety);
    }
}
