<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraProcessRequest;
use App\Http\Resources\HiraProcessResource;
use App\Models\Hira;
use App\Models\HiraProcess;
use Illuminate\Http\Request;

class HiraProcessController extends Controller
{
    
    public function index()
    {
        $hiraProcess = HiraProcessResource::collection(HiraProcess::all());
        $totacount = $hiraProcess->count();
        return response()->json([
            'data' => $hiraProcess,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraProcessRequest $request)
    {
        $hiraProcess = HiraProcess::create($request->validated());
        return HiraProcessResource::make($hiraProcess);
    }

    public function destroy(HiraProcess $hiraProcess)
    {
        $hiraProcess->delete();
        $hiraProcess = HiraProcessResource::collection(HiraProcess::all());
        $totacount = $hiraProcess->count();
        return response()->json([
            'data' => $hiraProcess,
            'total' => $totacount,
        ]);
    }
}
