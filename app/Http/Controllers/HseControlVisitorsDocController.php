<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseControlVisitorsRequest;
use App\Http\Requests\UpdateControlVisitorsRequest;
use App\Http\Resources\HseControlVisitorsResource;
use App\Models\HseControlVisitorsDoc;

class HseControlVisitorsDocController extends Controller
{
   
    public function index()
    {
        
        $hseControlVisitorsDocs = HseControlVisitorsDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseControlVisitorsResource::collection($hseControlVisitorsDocs);
    }

    public function store(StoreHseControlVisitorsRequest $request)
    {
        $hseControlVisitorsDoc = HseControlVisitorsDoc::create($request->validated());
        return new HseControlVisitorsResource($hseControlVisitorsDoc);
    }

    public function show(HseControlVisitorsDoc $hseControlVisitorsDoc)
    {
        return HseControlVisitorsResource::make($hseControlVisitorsDoc);
    }

    public function update(UpdateControlVisitorsRequest $request, HseControlVisitorsDoc $hseControlVisitorsDoc)
    {   
        $hseControlVisitorsDoc->update($request->validated());
        return new HseControlVisitorsResource($hseControlVisitorsDoc);
               
    }

    public function destroy(HseControlVisitorsDoc $hseControlVisitorsDoc)
    {
        $hseControlVisitorsDoc->delete();
        $hseControlVisitorsDoc = HseControlVisitorsResource::collection(HseControlVisitorsDoc::all());
        $totalCount = $hseControlVisitorsDoc->count();

        return response()->json([
            'data' => $hseControlVisitorsDoc,
            'total_count' => $totalCount,
        ]);
    }
}


