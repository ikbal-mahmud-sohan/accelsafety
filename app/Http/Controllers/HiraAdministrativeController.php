<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiaAdministrativeRequest;
use App\Http\Resources\HiraAdministrativeResource;
use App\Models\HiraAdministrative;
use Illuminate\Http\Request;

class HiraAdministrativeController extends Controller
{
    public function index()
    {
        $hiraAdministrative = HiraAdministrativeResource::collection(HiraAdministrative::orderBy('id', 'desc')->get());
        $totacount = $hiraAdministrative->count();
        return response()->json([
            'data' => $hiraAdministrative,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiaAdministrativeRequest $request)
    {
        $hiraImpact = HiraAdministrative::create($request->validated());
        HiraAdministrativeResource::make($hiraImpact);
        $hiraAdministrative = HiraAdministrativeResource::collection(HiraAdministrative::orderBy('id', 'desc')->get());
        $totacount = $hiraAdministrative->count();
        return response()->json([
            'data' => $hiraAdministrative,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraAdministrative $hiraAdministrative)
    {
        $hiraAdministrative->delete();
        $hiraAdministrative = HiraAdministrativeResource::collection(HiraAdministrative::orderBy('id', 'desc')->get());
        $totacount = $hiraAdministrative->count();
        return response()->json([
            'data' => $hiraAdministrative,
            'total' => $totacount,
        ]);
    }

}
