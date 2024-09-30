<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedSafetyPowerToolsRequest;
use App\Http\Resources\SafetyPowerToolsResource;
use App\Models\SafetyPowerTools;
use Illuminate\Http\Request;

class StatusSafetyPowerToolsController extends Controller
{
    
    public function __invoke(ApprovedSafetyPowerToolsRequest $request, SafetyPowerTools $safetyPowerTools)
    {
        $safetyPowerTools->approved_by = $request->approved_by;
        $safetyPowerTools->approved_change_history = $request->approved_change_history;
        $safetyPowerTools->approved_date = now();
        $safetyPowerTools->save(); 

        return new SafetyPowerToolsResource($safetyPowerTools);
    }
}
