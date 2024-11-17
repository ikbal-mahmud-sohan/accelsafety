<?php

namespace App\Http\Controllers;

use App\Http\Resources\EmployeeInfo as ResourcesEmployeeInfo;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;

class EmployeeUnitController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke()
    {
        $unitNames = EmployeeInfo::select('unit_name')->distinct()->pluck('unit_name');
        return response()->json([
            'unit_names' => $unitNames,
        ]);
    }
}
