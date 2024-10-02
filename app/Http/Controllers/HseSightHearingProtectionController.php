<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSightHearingProtectionRequest;
use App\Http\Requests\UpdateHseSightHearingProtectionRequest;
use App\Http\Resources\HseSightHearingProtectionResource;
use App\Models\HseSightHearingProtection;
use Illuminate\Http\Request;

class HseSightHearingProtectionController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        $hseSightHearingProtection = HseSightHearingProtectionResource::collection(HseSightHearingProtection::all());
        $total = $hseSightHearingProtection->count();
        return response()->json([
            'data' => $hseSightHearingProtection,
            'total' => $total
        ]);
    }

    public function store(StoreHseSightHearingProtectionRequest $request)
    {
        $hseSightHearingProtection = HseSightHearingProtection::create($request->validated());

        return HseSightHearingProtectionResource::make($hseSightHearingProtection);
    }

    public function show(HseSightHearingProtection $hseSightHearingProtection)
    {
        return HseSightHearingProtectionResource::make($hseSightHearingProtection);
        
    }
    public function update(UpdateHseSightHearingProtectionRequest $request, HseSightHearingProtection $hseSightHearingProtection)
    {
        $hseSightHearingProtection->update($request->validated());
        return HseSightHearingProtectionResource::make($hseSightHearingProtection);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseSightHearingProtection $hseSightHearingProtection)
    {
        $hseSightHearingProtection->delete();
        $hseSightHearingProtection = HseSightHearingProtectionResource::collection(HseSightHearingProtection::all());
        $total = $$hseSightHearingProtection->count();
        return response()->json([
            'data' => $hseSightHearingProtection,
            'total' => $total
        ]);
        
    }
}
