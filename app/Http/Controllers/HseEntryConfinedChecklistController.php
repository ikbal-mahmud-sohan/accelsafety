<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseEntryConfinedChecklistRequest;
use App\Http\Requests\StoreHseEntryConfinedSpaceRequest;
use App\Http\Resources\HseEntryConfinedChecklistResource;
use App\Http\Resources\HseEntryConfinedSpaceResource;
use App\Models\HseEntryConfinedChecklist;
use App\Models\HseEntryConfinedSpace;
use Illuminate\Http\Request;

class HseEntryConfinedChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseEntryConfinedChecklist = HseEntryConfinedChecklistResource::collection(HseEntryConfinedChecklist::all());
        $total = $hseEntryConfinedChecklist->count();
         return response()->json([
             'data' => $hseEntryConfinedChecklist,
             'total' => $total,
         ]);
    }

    public function store(StoreHseEntryConfinedChecklistRequest $request)
    {
        $hseEntryConfinedSpace = HseEntryConfinedChecklist::create($request->validated());
        return new HseEntryConfinedChecklistResource($hseEntryConfinedSpace);
    
    }

    public function show(HseEntryConfinedChecklist $hseEntryConfinedChecklist)
    {
        return HseEntryConfinedChecklistResource::make($hseEntryConfinedChecklist);
        
    }

    public function update(Request $request, HseEntryConfinedChecklist $hseEntryConfinedChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseEntryConfinedChecklist $hseEntryConfinedChecklist)
    {
        $hseEntryConfinedChecklist->delete();
        $hseEntryConfinedChecklist = HseEntryConfinedChecklistResource::collection(HseEntryConfinedChecklist::all());
        $total = $hseEntryConfinedChecklist->count();
         return response()->json([
             'data' => $hseEntryConfinedChecklist,
             'total' => $total,
         ]);
    }
}
