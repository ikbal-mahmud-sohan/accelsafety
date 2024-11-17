<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiaCauseRequest;
use App\Http\Resources\HiraCauseResource;
use App\Models\HiraCause;
use Illuminate\Http\Request;

class HiraCauseController extends Controller
{
    public function index()
    {
        $hiraCause = HiraCauseResource::collection(HiraCause::orderBy('id', 'desc')->get());
        $totacount = $hiraCause->count();
        return response()->json([
            'data' => $hiraCause,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiaCauseRequest $request)
    {
        $hiraImpact = HiraCause::create($request->validated());
        HiraCauseResource::make($hiraImpact);
        $hiraCause = HiraCauseResource::collection(HiraCause::orderBy('id', 'desc')->get());
        $totacount = $hiraCause->count();
        return response()->json([
            'data' => $hiraCause,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraCause $hiraCause)
    {
        $hiraCause->delete();
        $hiraCause = HiraCauseResource::collection(HiraCause::orderBy('id', 'desc')->get());
        $totacount = $hiraCause->count();
        return response()->json([
            'data' => $hiraCause,
            'total' => $totacount,
        ]);
    }
}
