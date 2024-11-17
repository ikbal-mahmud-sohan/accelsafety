<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyHandlingRequest;
use App\Http\Requests\UpdateHseSafetyHandlingRequest;
use App\Http\Resources\HseSafetyHandlingResource;
use App\Models\HseSafetyHandling;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetyHandlingController extends Controller
{
    
    public function index()
    {
        $hseSafetyHandling = HseSafetyHandlingResource::collection(HseSafetyHandling::all());
        $total = $hseSafetyHandling->count();
        return response()->json([
            'data' => $hseSafetyHandling,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetyHandlingRequest $request)
    {
        $hseSafetyHandling = HseSafetyHandling::create($request->validated());
        return new HseSafetyHandlingResource($hseSafetyHandling);
    }

    public function show(HseSafetyHandling $hseSafetyHandling)
    {
        return HseSafetyHandlingResource::make($hseSafetyHandling);
        
    }

    public function update(UpdateHseSafetyHandlingRequest $request, HseSafetyHandling $hseSafetyHandling)
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
        $hseSafetyHandling->update($validatedData);
        $hseSafetyHandling->save();
    
        return HseSafetyHandlingResource::make($hseSafetyHandling);
    }

    public function destroy(HseSafetyHandling $hseSafetyHandling)
    {
        $hseSafetyHandling->delete();
        $hseSafetyHandling = HseSafetyHandlingResource::collection(HseSafetyHandling::all());
        $total = $hseSafetyHandling->count();
        return response()->json([
            'data' => $hseSafetyHandling,
            'total' => $total,
        ]);
    }
}
