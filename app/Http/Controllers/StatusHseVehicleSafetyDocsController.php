<?php

namespace App\Http\Controllers;

use App\Http\Resources\HseVehicleSafetyDocResource;
use Illuminate\Http\Request;
use App\Models\HseVehicleSafetyDoc;


class StatusHseVehicleSafetyDocsController extends Controller
{
    
    public function __invoke(Request $request, HseVehicleSafetyDoc $hseVehicleSafetyDoc)
    {
        $hseVehicleSafetyDoc->approved_by = $request->approved_by;
        $hseVehicleSafetyDoc->save(); 

        return new HseVehicleSafetyDocResource($hseVehicleSafetyDoc);
        
    }
}
