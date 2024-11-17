<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEarthCompactorRequest;
use App\Http\Resources\EarthCompactorResource;
use App\Models\EarthCompactor;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EarthCompactorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $earthCompactor = EarthCompactorResource::collection(EarthCompactor::all());
        $total = $earthCompactor->count();
        return response()->json([
            'data' => $earthCompactor,
            'total' => $total
        ]);
    }

    public function store(StoreEarthCompactorRequest $request)
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

        $earthCompactor = EarthCompactor::create($validatedData);
        return new EarthCompactorResource($earthCompactor);
    }

    /**
     * Display the specified resource.
     */
    public function show(EarthCompactor $earthCompactor)
    {
        return EarthCompactorResource::make($earthCompactor);
        
    }

    public function destroy(EarthCompactor $earthCompactor)
    {
        $earthCompactor->delete();
        $earthCompactor = EarthCompactorResource::collection(EarthCompactor::all());
        $total = $earthCompactor->count();
        return response()->json([
            'data' => $earthCompactor,
            'total' => $total
        ]);
    }
}
