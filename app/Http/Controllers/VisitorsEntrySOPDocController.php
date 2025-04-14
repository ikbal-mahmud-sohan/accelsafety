<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreVisitorsEntrySOPDocRequest;
use App\Http\Requests\UpdateVisitorsEntrySOPDocRequest;
use App\Http\Resources\VisitorsEntrySOPDocResource;
use App\Models\VisitorsEntrySOPDoc;
use Illuminate\Http\Request;

class VisitorsEntrySOPDocController extends Controller
{
    public function index()
    {

        $visitorsEntrySOPDocs = VisitorsEntrySOPDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return VisitorsEntrySOPDocResource::collection($visitorsEntrySOPDocs);
    }

    public function store(StoreVisitorsEntrySOPDocRequest $request)
    {
        $visitorsEntrySOPDoc = VisitorsEntrySOPDoc::create($request->validated());
        return new VisitorsEntrySOPDocResource($visitorsEntrySOPDoc);
    }

    public function show(VisitorsEntrySOPDoc $visitorsEntrySOPDoc)
    {
        return VisitorsEntrySOPDocResource::make($visitorsEntrySOPDoc);
    }

    public function update(UpdateVisitorsEntrySOPDocRequest $request, VisitorsEntrySOPDoc $visitorsEntrySOPDoc)
    {
        $visitorsEntrySOPDoc->update($request->validated());
        return new VisitorsEntrySOPDocResource($visitorsEntrySOPDoc);

    }

    public function destroy(VisitorsEntrySOPDoc $visitorsEntrySOPDoc)
    {
        $visitorsEntrySOPDoc->delete();
        $visitorsEntrySOPDoc = VisitorsEntrySOPDocResource::collection(VisitorsEntrySOPDoc::all());
        $totalCount = $visitorsEntrySOPDoc->count();

        return response()->json([
            'data' => $visitorsEntrySOPDoc,
            'total_count' => $totalCount,
        ]);
    }
}
