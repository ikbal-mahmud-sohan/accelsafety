<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyRelayRequest;
use App\Http\Requests\UpdateHseSafetyRelayRequest;
use App\Http\Resources\HseSafetyRelayResource;
use App\Models\HseSafetyRelay;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetyRelayController extends Controller
{
   
    public function index()
    {
        $hseSafetyRelay = HseSafetyRelayResource::collection(HseSafetyRelay::all());
        $total = $hseSafetyRelay->count();
        return response()->json([
            'data' => $hseSafetyRelay,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetyRelayRequest $request)
    {
        $hseSafetyRelay = HseSafetyRelay::create($request->validated());
        return new HseSafetyRelayResource($hseSafetyRelay);
    }

    public function show(HseSafetyRelay $hseSafetyRelay)
    {
        return HseSafetyRelayResource::make($hseSafetyRelay);
        
    }

    public function update(UpdateHseSafetyRelayRequest $request, HseSafetyRelay $hseSafetyRelay)
    {
        $checkedSignatureUrls = [];
        if ($request->hasFile('checked_by_signature')) {
            foreach ($request->file('checked_by_signature') as $image) {
                $path = $image->store('checked_by_signature', 'public');
                $checkedSignatureUrls[] = Storage::url($path);
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
        $validatedData['checked_by_signature'] = $checkedSignatureUrls; 
        $validatedData['reviewed_by_signature'] = $reviewedSignatureUrls;
        $hseSafetyRelay->update($validatedData);
        $hseSafetyRelay->save();
    
        return HseSafetyRelayResource::make($hseSafetyRelay);
    }

    public function destroy(HseSafetyRelay $hseSafetyRelay)
    {
        $hseSafetyRelay->delete();
        $hseSafetyRelay = HseSafetyRelayResource::collection(HseSafetyRelay::all());
        $total = $hseSafetyRelay->count();
        return response()->json([
            'data' => $hseSafetyRelay,
            'total' => $total,
        ]);
    }
}
