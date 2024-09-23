<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiaImpactRequest;
use App\Http\Resources\HiraImpactResource;
use App\Models\HiraImpact;
use Illuminate\Http\Request;

class HiraImpactController extends Controller
{
    public function index()
    {
        $hiraImpact = HiraImpactResource::collection(HiraImpact::orderBy('id', 'desc')->get());
        $totacount = $hiraImpact->count();
        return response()->json([
            'data' => $hiraImpact,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiaImpactRequest $request)
    {
        $hiraImpact = HiraImpact::create($request->validated());
        HiraImpactResource::make($hiraImpact);
        $hiraImpact = HiraImpactResource::collection(HiraImpact::orderBy('id', 'desc')->get());
        $totacount = $hiraImpact->count();
        return response()->json([
            'data' => $hiraImpact,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraImpact $hiraImpact)
    {
        $hiraImpact->delete();
        $hiraImpact = HiraImpactResource::collection(HiraImpact::orderBy('id', 'desc')->get());
        $totacount = $hiraImpact->count();
        return response()->json([
            'data' => $hiraImpact,
            'total' => $totacount,
        ]);
        
    }
}
