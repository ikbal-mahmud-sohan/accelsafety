<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBikeRequest;
use App\Http\Resources\BikeResource;
use App\Models\Bike;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BikeController extends Controller
{
    public function index()
    {
        $bike = BikeResource::collection(Bike::all());
        $total = $bike->count();
        return response()->json([
            'data' => $bike,
            'total' => $total
        ]);
    }

    public function store(StoreBikeRequest $request)
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

        $bike = Bike::create($validatedData);
        return new BikeResource($bike);
    }

    public function show(Bike $bike)
    {
        return BikeResource::make($bike);
        
    }

    public function destroy(Bike $bike)
    {
        $bike->delete();
        $bike = BikeResource::collection(Bike::all());
        $total = $bike->count();
        return response()->json([
            'data' => $bike,
            'total' => $total
        ]);
    }
}
