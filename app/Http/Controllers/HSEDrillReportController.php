<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseControlVisitorsRequest;
use App\Http\Requests\UpdateHSEDrillReportRequest;
use App\Http\Resources\HSEDrillReportResource;
use App\Models\HSEDrillReport;
use Illuminate\Http\Request;

class HSEDrillReportController extends Controller
{
    public function index()
    {

        $hseDrillReportDocs = HSEDrillReport::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HSEDrillReportResource::collection($hseDrillReportDocs);
    }

    public function store(StoreHseControlVisitorsRequest $request)
    {
        $hseDrillReportDoc = HSEDrillReport::create($request->validated());
        return new HSEDrillReportResource($hseDrillReportDoc);
    }

    public function show(HSEDrillReport $hseDrillReportDoc)
    {
        return HSEDrillReportResource::make($hseDrillReportDoc);
    }

    public function update(UpdateHSEDrillReportRequest $request, HSEDrillReport $hseDrillReportDoc)
    {
        $hseDrillReportDoc->update($request->validated());
        return new HSEDrillReportResource($hseDrillReportDoc);

    }

    public function destroy(HSEDrillReport $hseDrillReportDoc)
    {
        $hseDrillReportDoc->delete();
        $hseDrillReportDoc = HSEDrillReportResource::collection(HSEDrillReport::all());
        $totalCount = $hseDrillReportDoc->count();

        return response()->json([
            'data' => $hseDrillReportDoc,
            'total_count' => $totalCount,
        ]);
    }
}
