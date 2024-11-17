<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedSafetySignageManagementRequest;
use App\Http\Requests\StoreSafetySignageManagementRequest;
use App\Http\Requests\UpdateSafetySignageManagementRequest;
use App\Http\Resources\HseSafetySignageManagementResource;
use App\Models\HseSafetySignageManagement;
use Illuminate\Http\Request;

class HseSafetySignageManagementController extends Controller
{
    public function index()
    {
        $hseSafetySignageManagement = HseSafetySignageManagement::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseSafetySignageManagementResource::collection($hseSafetySignageManagement);
    }

    public function store(StoreSafetySignageManagementRequest $request)
    {
        $hseSafetySignageManagement = HseSafetySignageManagement::create($request->validated());
        return new HseSafetySignageManagementResource($hseSafetySignageManagement);
    }

    public function show(HseSafetySignageManagement $hseSafetySignageManagement)
    {
        return HseSafetySignageManagementResource::make($hseSafetySignageManagement);
        
    }

    public function edit(ApprovedSafetySignageManagementRequest $request, HseSafetySignageManagement $hseSafetySignageManagement)
    {
        $hseSafetySignageManagement->approved_by = $request->approved_by;
        $hseSafetySignageManagement->approved_date = now();
        $hseSafetySignageManagement->save(); 

        return new HseSafetySignageManagementResource($hseSafetySignageManagement);
    }

    public function update(UpdateSafetySignageManagementRequest $request, HseSafetySignageManagement $hseSafetySignageManagement)
    {
        $hseSafetySignageManagement->update($request->validated());
        return new HseSafetySignageManagementResource($hseSafetySignageManagement);
    }

   
    public function destroy(HseSafetySignageManagement $hseSafetySignageManagement)
    {
        $hseSafetySignageManagement->delete();
        $hseSafetySignageManagement = HseSafetySignageManagementResource::collection(HseSafetySignageManagement::all());
        $totalCount = $hseSafetySignageManagement->count();

        return response()->json([
            'data' => $hseSafetySignageManagement,
            'total_count' => $totalCount,
        ]);
    }
}
