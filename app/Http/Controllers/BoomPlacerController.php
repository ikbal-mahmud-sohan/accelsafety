<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBoomPlacerRequest;
use App\Http\Resources\BoomPlacerResource;
use App\Models\BoomPlacer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BoomPlacerController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $boomPlacer = BoomPlacerResource::collection(BoomPlacer::all());
        $total = $boomPlacer->count();
        return response()->json([
            'data' => $boomPlacer,
            'total' => $total
        ]);
    }

    public function store(StoreBoomPlacerRequest $request)
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

        $boomPlacer = BoomPlacer::create($validatedData);
        return new BoomPlacerResource($boomPlacer);
    }

    public function show(BoomPlacer $boomPlacer)
    {
        return BoomPlacerResource::make($boomPlacer);
        
    }

    public function destroy(BoomPlacer $boomPlacer)
    {
        $boomPlacer->delete();
        $boomPlacer = BoomPlacerResource::collection(BoomPlacer::all());
        $total = $boomPlacer->count();
        return response()->json([
            'data' => $boomPlacer,
            'total' => $total
        ]);
    }
}
