<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseVehicleSafetyRequest;
use App\Http\Requests\UpdateHseVehicleSafetyRequest;
use App\Http\Resources\HseVehicleSafetyResource;
use App\Models\HseVehicleSafety;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseVehicleSafetyController extends Controller
{
   
    public function index()
    {
       $hseVehicleSafety = HseVehicleSafetyResource::collection(HseVehicleSafety::all());
       $total = $hseVehicleSafety->count();
        return response()->json([
            'data' => $hseVehicleSafety,
            'total' => $total,
        ]);
    }

    public function store(StoreHseVehicleSafetyRequest $request)
    {

        $signatureOfInspectorPaths = [];
       
        if ($request->hasFile('signature_of_inspector')) {
            foreach ($request->file('signature_of_inspector') as $image) {
                $path = $image->store('signature_of_inspector', 'public');
                $signatureOfInspectorPaths[] = Storage::url($path);
            }
        }
        $signatureOfDriversPaths = [];

        if ($request->hasFile('signature_of_drivers')) {
            foreach ($request->file('signature_of_drivers') as $image) {
                $path = $image->store('signature_of_drivers', 'public');
                $signatureOfDriversPaths[] = Storage::url($path);
            }
        }
        $validatedData = $request->validated();
        $validatedData['signature_of_inspector'] = $signatureOfInspectorPaths; 
        $validatedData['signature_of_drivers'] = $signatureOfDriversPaths; 

        $hseVehicleSafety = HseVehicleSafety::create($validatedData);
        return new HseVehicleSafetyResource($hseVehicleSafety);
        
    }

    public function show(HseVehicleSafety $hseVehicleSafety)
    {
        return HseVehicleSafetyResource::make($hseVehicleSafety);
    }

    public function update(UpdateHseVehicleSafetyRequest $request, HseVehicleSafety $hseVehicleSafety)
    {
        $hseVehicleSafety->update($request->validated());
        return new HseVehicleSafetyResource($hseVehicleSafety);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseVehicleSafety $hseVehicleSafety)
    {
        $hseVehicleSafety->delete();
        $hseVehicleSafety = HseVehicleSafetyResource::collection(HseVehicleSafety::all());
        $total = $hseVehicleSafety->count();
            return response()->json([
                'data' => $hseVehicleSafety,
                'total' => $total,
            ]);
    }
}
