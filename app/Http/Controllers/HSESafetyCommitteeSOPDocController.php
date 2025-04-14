<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHSESafetyCommitteeSOPDocRequest;
use App\Http\Requests\UpdateHSESafetyCommitteeSOPDocRequest;
use App\Http\Resources\HSESafetyCommitteeSOPDocResource;
use App\Models\HSESafetyCommitteeSOPDoc;
use Illuminate\Http\Request;

class HSESafetyCommitteeSOPDocController extends Controller
{
    public function index()
    {

        $safetyCommitteeSOPDocs = HSESafetyCommitteeSOPDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HSESafetyCommitteeSOPDocResource::collection($safetyCommitteeSOPDocs);
    }

    public function store(StoreHSESafetyCommitteeSOPDocRequest $request)
    {
        $hseSafetyCommitteeSOPDoc = HSESafetyCommitteeSOPDoc::create($request->validated());
        return new HSESafetyCommitteeSOPDocResource($hseSafetyCommitteeSOPDoc);
    }

    public function show(HSESafetyCommitteeSOPDoc $hseSafetyCommitteeSOPDoc)
    {
        return HSESafetyCommitteeSOPDocResource::make($hseSafetyCommitteeSOPDoc);
    }

    public function update(UpdateHSESafetyCommitteeSOPDocRequest $request, HSESafetyCommitteeSOPDoc $hseSafetyCommitteeSOPDoc)
    {
        $hseSafetyCommitteeSOPDoc->update($request->validated());
        return new HSESafetyCommitteeSOPDocResource($hseSafetyCommitteeSOPDoc);

    }

    public function destroy(HSESafetyCommitteeSOPDoc $hseSafetyCommitteeSOPDoc)
    {
        $hseSafetyCommitteeSOPDoc->delete();
        $hseSafetyCommitteeSOPDoc = HSESafetyCommitteeSOPDocResource::collection(HSESafetyCommitteeSOPDoc::all());
        $totalCount = $hseSafetyCommitteeSOPDoc->count();

        return response()->json([
            'data' => $hseSafetyCommitteeSOPDoc,
            'total_count' => $totalCount,
        ]);
    }
}
