<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseEntryConfinedSpaceRequest;
use App\Http\Requests\StoreHseEntryConfinedSpaceRequest;
use App\Http\Requests\UpdateHseEntryConfinedSpaceRequest;
use App\Http\Resources\HseEntryConfinedSpaceResource;
use App\Models\HseEntryConfinedSpace;
use Illuminate\Http\Request;

class HseEntryConfinedSpaceController extends Controller
{
   
    public function index()
    {
        $hseEntryConfinedSpace = HseEntryConfinedSpace::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseEntryConfinedSpaceResource::collection($hseEntryConfinedSpace);
    }

    public function store(StoreHseEntryConfinedSpaceRequest $request)
    {
        $hseEntryConfinedSpace = HseEntryConfinedSpace::create($request->validated());
        return new HseEntryConfinedSpaceResource($hseEntryConfinedSpace);
    }

    public function show(HseEntryConfinedSpace $hseEntryConfinedSpace)
    {
        return HseEntryConfinedSpaceResource::make($hseEntryConfinedSpace);
        
    }

    public function edit(ApprovedHseEntryConfinedSpaceRequest $request, HseEntryConfinedSpace $hseEntryConfinedSpace)
    {
        $hseEntryConfinedSpace->approved_by = $request->approved_by;
        $hseEntryConfinedSpace->approved_date = now();
        $hseEntryConfinedSpace->save(); 

        return new HseEntryConfinedSpaceResource($hseEntryConfinedSpace);
    }

    public function update(UpdateHseEntryConfinedSpaceRequest $request, HseEntryConfinedSpace $hseEntryConfinedSpace)
    {
        $hseEntryConfinedSpace->update($request->validated());
        return new HseEntryConfinedSpaceResource($hseEntryConfinedSpace);
    }

   
    public function destroy(HseEntryConfinedSpace $hseEntryConfinedSpace)
    {
        $hseEntryConfinedSpace->delete();
        $hseEntryConfinedSpace = HseEntryConfinedSpaceResource::collection(HseEntryConfinedSpace::all());
        $totalCount = $hseEntryConfinedSpace->count();

        return response()->json([
            'data' => $hseEntryConfinedSpace,
            'total_count' => $totalCount,
        ]);
    }
}
