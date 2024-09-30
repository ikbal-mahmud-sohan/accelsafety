<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseLadderSelfInspectionChecklistRequest;
use App\Http\Resources\HseLadderSelfInspectionChecklistResource;
use App\Models\HseLadderSelfInspectionChecklist;
use Illuminate\Http\Request;

class HseLadderSelfInspectionChecklistController extends Controller
{
   
    public function index()
    {
        $hseLadderSelfInspectionChecklist = HseLadderSelfInspectionChecklistResource::collection(HseLadderSelfInspectionChecklist::all());
        $total = $hseLadderSelfInspectionChecklist->count();
        return response()->json([
            'data' => $hseLadderSelfInspectionChecklist,
            'total' => $total
        ]);
    }

    public function store(StoreHseLadderSelfInspectionChecklistRequest $request)
    {
        $hseLadderSelfInspectionChecklist = HseLadderSelfInspectionChecklist::create($request->validated());

        return HseLadderSelfInspectionChecklistResource::make($hseLadderSelfInspectionChecklist);
    }

    public function show(HseLadderSelfInspectionChecklist $hseLadderSelfInspectionChecklist)
    {
        return HseLadderSelfInspectionChecklistResource::make($hseLadderSelfInspectionChecklist);
        
    }

    public function update(Request $request, HseLadderSelfInspectionChecklist $hseLadderSelfInspectionChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseLadderSelfInspectionChecklist $hseLadderSelfInspectionChecklist)
    {
        $hseLadderSelfInspectionChecklist->delete();
        $hseLadderSelfInspectionChecklist = HseLadderSelfInspectionChecklistResource::collection(HseLadderSelfInspectionChecklist::all());
        $total = $hseLadderSelfInspectionChecklist->count();
        return response()->json([
            'data' => $hseLadderSelfInspectionChecklist,
            'total' => $total
        ]);
    }
}
