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
        $hiraPPE = HiraPPEResource::collection(HiraPPE::orderBy('id', 'desc')->get());
        $totacount = $hiraPPE->count();
        return response()->json([
            'data' => $hiraPPE,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiaPPERequest $request)
    {
        $hiraPPE = HiraPPE::create($request->validated());
        HiraPPEResource::make($hiraPPE);
        $hiraPPE = HiraPPEResource::collection(HiraPPE::orderBy('id', 'desc')->get());
        $totacount = $hiraPPE->count();
        return response()->json([
            'data' => $hiraPPE,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraPPE $hiraPPE)
    {
        $hiraPPE->delete();
        $hiraPPE = HiraPPEResource::collection(HiraPPE::orderBy('id', 'desc')->get());
        $totacount = $hiraPPE->count();
        return response()->json([
            'data' => $hiraPPE,
            'total' => $totacount,
        ]);
    }

}
