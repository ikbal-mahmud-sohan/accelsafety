<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseLiftingLooseGearsRequest;
use App\Http\Requests\UpdateHseLiftingLooseGearsRequest;
use App\Http\Resources\HseLiftingLooseGearsResource;
use App\Models\HseLiftingLooseGears;
use Illuminate\Http\Request;

class HseLiftingLooseGearsController extends Controller
{
    
    public function index()
    {
        $hseLiftingLooseGears = HseLiftingLooseGearsResource::collection(HseLiftingLooseGears::all());
        $total = $hseLiftingLooseGears->count();
        return response()->json([
            'data' => $hseLiftingLooseGears,
            'total' => $total
        ]);
    }

    public function store(StoreHseLiftingLooseGearsRequest $request)
    {
        $hseLiftingLooseGears = HseLiftingLooseGears::create($request->validated());

        return HseLiftingLooseGearsResource::make($hseLiftingLooseGears);
    }

    public function show(HseLiftingLooseGears $hseLiftingLooseGears)
    {
        return HseLiftingLooseGearsResource::make($hseLiftingLooseGears);
        
    }

    public function update(UpdateHseLiftingLooseGearsRequest $request, HseLiftingLooseGears $hseLiftingLooseGears)
    {
        if ($hseLiftingLooseGears->update($request->validated())) {
            $hseLiftingLooseGears->updated_by = $request->updated_by;
            $hseLiftingLooseGears->status = 1;
            $hseLiftingLooseGears->save();
        }
    
        return HseLiftingLooseGearsResource::make($hseLiftingLooseGears);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseLiftingLooseGears $hseLiftingLooseGears)
    {
        $hseLiftingLooseGears->delete();
        $hseLiftingLooseGears = HseLiftingLooseGearsResource::collection(HseLiftingLooseGears::all());
        $total = $hseLiftingLooseGears->count();
        return response()->json([
            'data' => $hseLiftingLooseGears,
            'total' => $total
        ]);
    }
}
