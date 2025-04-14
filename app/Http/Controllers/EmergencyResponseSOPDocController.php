<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmergencyResponseSOPDocRequest;
use App\Http\Requests\UpdateEmergencyResponseSOPDocRequest;
use App\Http\Resources\EmergencyResponseSOPDocResource;
use App\Models\EmergencyResponseSOPDoc;
use Illuminate\Http\Request;

class EmergencyResponseSOPDocController extends Controller
{
    public function index()
    {

        $emergencyResponseSOPDocs = EmergencyResponseSOPDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return EmergencyResponseSOPDocResource::collection($emergencyResponseSOPDocs);
    }

    public function store(StoreEmergencyResponseSOPDocRequest $request)
    {
        $emergencyResponseSOPDoc = EmergencyResponseSOPDoc::create($request->validated());
        return new EmergencyResponseSOPDocResource($emergencyResponseSOPDoc);
    }

    public function show(EmergencyResponseSOPDoc $emergencyResponseSOPDoc)
    {
        return EmergencyResponseSOPDocResource::make($emergencyResponseSOPDoc);
    }

    public function update(UpdateEmergencyResponseSOPDocRequest $request, EmergencyResponseSOPDoc $emergencyResponseSOPDoc)
    {
        $emergencyResponseSOPDoc->update($request->validated());
        return new EmergencyResponseSOPDocResource($emergencyResponseSOPDoc);

    }

    public function destroy(EmergencyResponseSOPDoc $emergencyResponseSOPDoc)
    {
        $emergencyResponseSOPDoc->delete();
        $emergencyResponseSOPDoc = EmergencyResponseSOPDocResource::collection(EmergencyResponseSOPDoc::all());
        $totalCount = $emergencyResponseSOPDoc->count();

        return response()->json([
            'data' => $emergencyResponseSOPDoc,
            'total_count' => $totalCount,
        ]);
    }
}
