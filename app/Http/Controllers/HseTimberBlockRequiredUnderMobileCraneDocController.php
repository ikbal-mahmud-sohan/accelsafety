<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseTimberBlockRequiredUnderMobileCraneDocRequest;
use App\Http\Requests\StoreHseTimberBlockRequiredUnderMobileCraneDocRequest;
use App\Http\Requests\UpdateHseTimberBlockRequiredUnderMobileCraneDocRequest;
use App\Http\Resources\HseTimberBlockRequiredUnderMobileCraneDocResource;
use App\Models\HseTimberBlockRequiredUnderMobileCraneDoc;
use Illuminate\Http\Request;

class HseTimberBlockRequiredUnderMobileCraneDocController extends Controller
{
  
    public function index()
    {
        $hseTimberMobileCrane = HseTimberBlockRequiredUnderMobileCraneDoc::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseTimberBlockRequiredUnderMobileCraneDocResource::collection($hseTimberMobileCrane);
    }

    public function store(StoreHseTimberBlockRequiredUnderMobileCraneDocRequest $request)
    {
        $hseTimberMobileCrane = HseTimberBlockRequiredUnderMobileCraneDoc::create($request->validated());
        return new HseTimberBlockRequiredUnderMobileCraneDocResource($hseTimberMobileCrane);
    }

    public function show(HseTimberBlockRequiredUnderMobileCraneDoc $hseTimberMobileCrane)
    {
        return HseTimberBlockRequiredUnderMobileCraneDocResource::make($hseTimberMobileCrane);
        
    }

    public function edit(ApprovedHseTimberBlockRequiredUnderMobileCraneDocRequest $request, HseTimberBlockRequiredUnderMobileCraneDoc $hseTimberMobileCrane)
    {
        $hseTimberMobileCrane->approved_by = $request->approved_by;
        $hseTimberMobileCrane->approved_date = now();
        $hseTimberMobileCrane->save(); 

        return new HseTimberBlockRequiredUnderMobileCraneDocResource($hseTimberMobileCrane);
    }

    public function update(UpdateHseTimberBlockRequiredUnderMobileCraneDocRequest $request, HseTimberBlockRequiredUnderMobileCraneDoc $hseTimberMobileCrane)
    {
        $hseTimberMobileCrane->update($request->validated());
        return new HseTimberBlockRequiredUnderMobileCraneDocResource($hseTimberMobileCrane);
    }

    
    public function destroy(HseTimberBlockRequiredUnderMobileCraneDoc $hseTimberMobileCrane)
    {
        $hseTimberMobileCrane->delete();
        $hseTimberMobileCrane = HseTimberBlockRequiredUnderMobileCraneDocResource::collection(HseTimberBlockRequiredUnderMobileCraneDoc::all());
        $totalCount = $hseTimberMobileCrane->count();

        return response()->json([
            'data' => $hseTimberMobileCrane,
            'total_count' => $totalCount,
        ]);
    }
}

