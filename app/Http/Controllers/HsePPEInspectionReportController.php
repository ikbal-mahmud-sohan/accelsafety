<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHsePPEInspectionReportRequest;
use App\Http\Requests\UpdateHsePPEInspectionReportRequest;
use App\Http\Resources\HsePPEInspectionReport as ResourcesHsePPEInspectionReport;
use App\Models\HsePPEInspectionReport;
use Illuminate\Http\Request;

class HsePPEInspectionReportController extends Controller
{
    
    public function index()
    {
        $hsePPEInspectionReport = ResourcesHsePPEInspectionReport::collection(HsePPEInspectionReport::all());
        $total = $hsePPEInspectionReport->count();
        return response()->json([
            'data' => $hsePPEInspectionReport,
            'total' => $total
        ]);
    }

    
    public function store(StoreHsePPEInspectionReportRequest $request)
    {
        $hsePPEInspectionReport = HsePPEInspectionReport::create($request->validated());
        return new ResourcesHsePPEInspectionReport($hsePPEInspectionReport);
    }

    /**
     * Display the specified resource.
     */
    public function show(HsePPEInspectionReport $hsePPEInspectionReport)
    {
        return ResourcesHsePPEInspectionReport::make($hsePPEInspectionReport);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HsePPEInspectionReport $hsePPEInspectionReport)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateHsePPEInspectionReportRequest $request, HsePPEInspectionReport $hsePPEInspectionReport)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HsePPEInspectionReport $hsePPEInspectionReport)
    {
        $hsePPEInspectionReport->delete();
        $hsePPEInspectionReport = ResourcesHsePPEInspectionReport::collection(HsePPEInspectionReport::all());
        $total = $hsePPEInspectionReport->count();
        return response()->json([
            'data' => $hsePPEInspectionReport,
            'total' => $total
        ]);
    }
}
