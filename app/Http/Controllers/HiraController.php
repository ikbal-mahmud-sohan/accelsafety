<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraRequest;
use App\Http\Resources\HiraResource;
use App\Models\Hira;

class HiraController extends Controller
{
 
    public function index()
    {
        $hira = HiraResource::collection(Hira::all());
        $totalCount = $hira->count();
        return response()->json([
            'data' => $hira,
            'total_count' => $totalCount,
        ]);
    }

    public function store(StoreHiraRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['operational_control_elimination'] = isset($validatedData['operational_control_elimination']) ? $validatedData['operational_control_elimination']: null;
        $validatedData['operational_control_substitution'] = isset($validatedData['operational_control_substitution']) ? $validatedData['operational_control_substitution'] : null;
        $validatedData['operational_control_engineering'] = isset($validatedData['operational_control_engineering']) ? $validatedData['operational_control_engineering'] : null;
        $validatedData['operational_control_administrative'] = isset($validatedData['operational_control_administrative']) ? $validatedData['operational_control_administrative'] : null;
        $validatedData['ppe'] = isset($validatedData['ppe']) ? $validatedData['ppe'] : null;
        $validatedData['sub_activity'] = isset($validatedData['sub_activity']) ? $validatedData['sub_activity'] : null;
        
        $hira = Hira::create($validatedData);
        return new HiraResource($hira);
    }

    public function destroy(Hira $hira)
    {
        $hira->delete();
        $hira = HiraResource::collection(Hira::all());
        $totalCount = $hira->count();
        return response()->json([
            'data' => $hira,
            'total_count' => $totalCount,
        ]);
    }
}
