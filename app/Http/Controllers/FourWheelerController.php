<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFourWheelerRequest;
use App\Http\Resources\FourWheelerResource;
use App\Models\FourWheeler;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FourWheelerController extends Controller
{
    public function index()
    {
        $fourWheeler = FourWheelerResource::collection(FourWheeler::all());
        $total = $fourWheeler->count();
        return response()->json([
            'data' => $fourWheeler,
            'total' => $total
        ]);
    }

    public function store(StoreFourWheelerRequest $request)
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

        $fourWheeler = FourWheeler::create($validatedData);
        return new FourWheelerResource($fourWheeler);
    }

    public function show(FourWheeler $fourWheeler)
    {
        return FourWheelerResource::make($fourWheeler);
        
    }

    public function destroy(FourWheeler $fourWheeler)
    {
        $fourWheeler->delete();
        $fourWheeler = FourWheelerResource::collection(FourWheeler::all());
        $total = $fourWheeler->count();
        return response()->json([
            'data' => $fourWheeler,
            'total' => $total
        ]);
    }
}
