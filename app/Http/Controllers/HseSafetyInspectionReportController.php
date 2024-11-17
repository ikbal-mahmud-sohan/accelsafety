<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyInspectionReportRequest;
use App\Http\Resources\HseSafetyInspectionReportResource;
use App\Models\HseSafetyInspectionReport;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetyInspectionReportController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseSafetyInspectionReport = HseSafetyInspectionReportResource::collection(HseSafetyInspectionReport::all());
        $total = $hseSafetyInspectionReport->count();
        return response()->json([
            'data' => $hseSafetyInspectionReport,
            'total' => $total
        ]);
    }

    public function store(StoreHseSafetyInspectionReportRequest $request)
    {
        $imageUrls = [];
    if ($request->hasFile('signature')) {
        foreach ($request->file('signature') as $image) {
            $path = $image->store('signature', 'public');
            $imageUrls[] = Storage::url($path);
        }
    }

    $validatedData = $request->validated();
    $validatedData['signature'] = $imageUrls; 

    $hseSafetyInspectionReport = HseSafetyInspectionReport::create($validatedData);

    // Return the newly created record using a resource
    return HseSafetyInspectionReportResource::make($hseSafetyInspectionReport);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseSafetyInspectionReport $hseSafetyInspectionReport)
    {
        return HseSafetyInspectionReportResource::make($hseSafetyInspectionReport);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseSafetyInspectionReport $hseSafetyInspectionReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseSafetyInspectionReport $hseSafetyInspectionReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseSafetyInspectionReport $hseSafetyInspectionReport)
    {
        $hseSafetyInspectionReport->delete();
        $hseSafetyInspectionReport = HseSafetyInspectionReportResource::collection(HseSafetyInspectionReport::all());
        $total = $hseSafetyInspectionReport->count();
        return response()->json([
            'data' => $hseSafetyInspectionReport,
            'total' => $total
        ]);
    }
}

