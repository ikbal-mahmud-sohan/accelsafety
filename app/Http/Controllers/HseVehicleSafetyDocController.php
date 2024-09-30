<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseVehicleSafetyDocRequest;
use App\Http\Requests\UpdateHseVehicleSafetyDocRequest;
use App\Http\Requests\UpdateHseVehicleSafetyRequest;
use App\Http\Resources\HseVehicleSafetyDocResource;
use App\Http\Resources\HseVehicleSafetyResource;
use App\Models\HseVehicleSafety;
use App\Models\HseVehicleSafetyDoc;
use Illuminate\Http\Request;

class HseVehicleSafetyDocController extends Controller
{
    
    public function index()
    {
        $hseVehicleSafetyDoc = HseVehicleSafetyDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseVehicleSafetyDocResource::collection($hseVehicleSafetyDoc);
    }

    public function store(StoreHseVehicleSafetyDocRequest $request)
    {
        $hseVehicleSafetyDoc = HseVehicleSafetyDoc::create($request->validated());
        return new HseVehicleSafetyDocResource($hseVehicleSafetyDoc);
    }

    public function show(HseVehicleSafetyDoc $hseVehicleSafetyDoc)
    {
        return HseVehicleSafetyDocResource::make($hseVehicleSafetyDoc);
        
    }

    public function update(UpdateHseVehicleSafetyDocRequest $request, HseVehicleSafetyDoc $hseVehicleSafetyDoc)
    {
        $hseVehicleSafetyDoc->update($request->validated());
        return new HseVehicleSafetyDocResource($hseVehicleSafetyDoc);
    }

    public function destroy(HseVehicleSafetyDoc $hseVehicleSafetyDoc)
    {
        $hseVehicleSafetyDoc->delete();
        $hseVehicleSafetyDoc = HseVehicleSafetyDocResource::collection(hseVehicleSafetyDoc::all());
        $totalCount = $hseVehicleSafetyDoc->count();

        return response()->json([
            'data' => $hseVehicleSafetyDoc,
            'total_count' => $totalCount,
        ]);
    }
}
