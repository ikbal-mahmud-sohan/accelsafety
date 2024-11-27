<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAmbulanceRequest;
use App\Http\Resources\AmbulanceResource;
use App\Models\Ambulance;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class AmbulanceController extends Controller
{
    public function index()
    {
        $ambulance = AmbulanceResource::collection(Ambulance::all());
        $total = $ambulance->count();
        return response()->json([
            'data' => $ambulance,
            'total' => $total
        ]);
    }

    public function store(StoreAmbulanceRequest $request)
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

        $ambulance = Ambulance::create($validatedData);
        return new AmbulanceResource($ambulance);
    }

    /**
     * Display the specified resource.
     */
    public function show(Ambulance $ambulance)
    {
        return AmbulanceResource::make($ambulance);
        
    }

    public function destroy(Ambulance $ambulance)
    {
        $ambulance->delete();
        $ambulance = AmbulanceResource::collection(Ambulance::all());
        $total = $ambulance->count();
        return response()->json([
            'data' => $ambulance,
            'total' => $total
        ]);
    }
}
