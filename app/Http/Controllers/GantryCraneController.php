<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGantryCraneRequest;
use App\Http\Resources\GantryCraneResource;
use App\Models\GantryCrane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class GantryCraneController extends Controller
{

    public function index()
    {
        $gantryCrane = GantryCraneResource::collection(GantryCrane::all());
        $total = $gantryCrane->count();
        return response()->json([
            'data' => $gantryCrane,
            'total' => $total
        ]);
    }

    public function store(StoreGantryCraneRequest $request)
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

        $gantryCrane = GantryCrane::create($validatedData);
        return new GantryCraneResource($gantryCrane);
    }

    public function show(GantryCrane $gantryCrane)
    {
        return GantryCraneResource::make($gantryCrane);
        
    }

    public function destroy(GantryCrane $gantryCrane)
    {
        $gantryCrane->delete();
        $gantryCrane = GantryCraneResource::collection(GantryCrane::all());
        $total = $gantryCrane->count();
        return response()->json([
            'data' => $gantryCrane,
            'total' => $total
        ]);
    }
}
