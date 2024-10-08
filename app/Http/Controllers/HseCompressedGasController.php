<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseCompressedGasRequest;
use App\Http\Requests\StoreHseCompressedGasRequest;
use App\Http\Requests\UpdateHseCompressedGasRequest;
use App\Http\Resources\HseCompressedGasResource;
use App\Models\HseCompressedGas;
use Illuminate\Http\Request;

class HseCompressedGasController extends Controller
{
   
    public function index()
    {
        $hseCompressedGas = HseCompressedGas::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseCompressedGasResource::collection($hseCompressedGas);
    }

    public function store(StoreHseCompressedGasRequest $request)
    {
        $hseCompressedGas = HseCompressedGas::create($request->validated());
        return new HseCompressedGasResource($hseCompressedGas);
    }

    public function show(HseCompressedGas $hseCompressedGas)
    {
        return HseCompressedGasResource::make($hseCompressedGas);
        
    }

    public function edit(ApprovedHseCompressedGasRequest $request, HseCompressedGas $hseCompressedGas)
    {
        $hseCompressedGas->approved_by = $request->approved_by;
        $hseCompressedGas->approved_date = now();
        $hseCompressedGas->save(); 

        return new HseCompressedGasResource($hseCompressedGas);
    }

    public function update(UpdateHseCompressedGasRequest $request, HseCompressedGas $hseCompressedGas)
    {
        $hseCompressedGas->update($request->validated());
        return new HseCompressedGasResource($hseCompressedGas);
    }

   
    public function destroy(HseCompressedGas $hseCompressedGas)
    {
        $hseCompressedGas->delete();
        $hseCompressedGas = HseCompressedGasResource::collection(HseCompressedGas::all());
        $totalCount = $hseCompressedGas->count();

        return response()->json([
            'data' => $hseCompressedGas,
            'total_count' => $totalCount,
        ]);
    }
}
