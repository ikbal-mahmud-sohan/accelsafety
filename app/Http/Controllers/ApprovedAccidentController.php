<?php

namespace App\Http\Controllers;

use App\Http\Resources\Accident as ResourcesAccident;
use App\Models\Accident;
use Illuminate\Http\Request;

class ApprovedAccidentController extends Controller
{
    
    public function __invoke(Request $request, Accident $accident)
    {
        $accident->status = $request->status;
        $accident->save();
        return ResourcesAccident::make($accident);
    }
}
