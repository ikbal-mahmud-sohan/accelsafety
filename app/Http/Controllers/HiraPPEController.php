<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiaPPERequest;
use App\Http\Resources\HiraPPEResource;
use App\Models\HiraPPE;
use Illuminate\Http\Request;

class HiraPPEController extends Controller
{
    public function index()
    {
        $hiraPPE = HiraPPEResource::collection(HiraPPE::all());
        $totacount = $hiraPPE->count();
        return response()->json([
            'data' => $hiraPPE,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiaPPERequest $request)
    {
        $hiraImpact = HiraPPE::create($request->validated());
        return HiraPPEResource::make($hiraImpact);
    }

    public function destroy(HiraPPE $hiraPPE)
    {
        $hiraPPE->delete();
        $hiraPPE = HiraPPEResource::collection(HiraPPE::all());
        $totacount = $hiraPPE->count();
        return response()->json([
            'data' => $hiraPPE,
            'total' => $totacount,
        ]);
    }

}
