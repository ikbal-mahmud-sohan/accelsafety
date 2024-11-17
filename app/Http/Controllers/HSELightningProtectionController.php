<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseLiftingLooseGearsRequest;
use App\Http\Requests\StoreHSELightningProtectionRequest;
use App\Http\Requests\StoreLightIntensityMeasurementRequest;
use App\Http\Resources\HSELightningProtectionResource;
use App\Models\HSELightningProtection;
use Illuminate\Http\Request;

class HSELightningProtectionController extends Controller
{
   
    public function index()
    {
        $hSELightningProtection = HSELightningProtectionResource::collection(HSELightningProtection::all());
        $total = $hSELightningProtection->count();
        return response()->json([
            'data' => $hSELightningProtection,
            'total' => $total
        ]);
    }

    public function store(StoreHSELightningProtectionRequest $request)
    {
        $hSELightningProtection = HSELightningProtection::create($request->validated());

        return HSELightningProtectionResource::make($hSELightningProtection);
    }

    public function show(HSELightningProtection $hSELightningProtection)
    {
        return HSELightningProtectionResource::make($hSELightningProtection);
        
    }

    public function update(Request $request, HSELightningProtection $hSELightningProtection)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HSELightningProtection $hSELightningProtection)
    {
        $hSELightningProtection->delete();
        $hSELightningProtection = HSELightningProtectionResource::collection(HSELightningProtection::all());
        $total = $hSELightningProtection->count();
        return response()->json([
            'data' => $hSELightningProtection,
            'total' => $total
        ]);
    }
}
