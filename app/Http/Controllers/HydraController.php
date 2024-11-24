<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHydraRequest;
use App\Http\Resources\HydraResource;
use App\Models\Hydra;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HydraController extends Controller
{

    public function index()
    {
        $hydra = HydraResource::collection(Hydra::all());
        $total = $hydra->count();
        return response()->json([
            'data' => $hydra,
            'total' => $total
        ]);
    }

    public function store(StoreHydraRequest $request)
    {
        $checkedBySignature = [];
        if ($request->hasFile('checked_by_signature')) {
            foreach ($request->file('checked_by_signature') as $image) {
                $path = $image->store('checked_by_signature', 'public');
                $checkedBySignature[] = Storage::url($path);
            }
        }
        $reviewedSignatureUrls = [];
        if ($request->hasFile('reviewed_by_signature')) {
            foreach ($request->file('reviewed_by_signature') as $image) {
                $path = $image->store('reviewed_by_signature', 'public');
                $reviewedSignatureUrls[] = Storage::url($path);
            }
        }

        $validatedData = $request->validated();
        $validatedData['checked_by_signature'] = $checkedBySignature; 
        $validatedData['reviewed_by_signature'] = $reviewedSignatureUrls;

        $hydra = Hydra::create($validatedData);
        return new HydraResource($hydra);
    }

    public function show(Hydra $hydra)
    {
        return HydraResource::make($hydra);
        
    }

    public function destroy(Hydra $hydra)
    {
        $hydra->delete();
        $hydra = HydraResource::collection(Hydra::all());
        $total = $hydra->count();
        return response()->json([
            'data' => $hydra,
            'total' => $total
        ]);
    }
}
