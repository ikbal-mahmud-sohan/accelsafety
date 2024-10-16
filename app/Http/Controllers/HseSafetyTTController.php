<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyTTRequest;
use App\Http\Requests\UpdateHseSafetyTTRequest;
use App\Http\Resources\HseSafetyTTResource;
use App\Models\HseSafetyTT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetyTTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseSafetyTT = HseSafetyTTResource::collection(HseSafetyTT::all());
        $total = $hseSafetyTT->count();
        return response()->json([
            'data' => $hseSafetyTT,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetyTTRequest $request)
    {
        $hseSafetyTT = HseSafetyTT::create($request->validated());
        return new HseSafetyTTResource($hseSafetyTT);
    }

    public function show(HseSafetyTT $hseSafetyTT)
    {
        return HseSafetyTTResource::make($hseSafetyTT);
        
    }

    
    public function update(UpdateHseSafetyTTRequest $request, HseSafetyTT $hseSafetyTT)
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
        $hseSafetyTT->update($validatedData);
        $hseSafetyTT->save();
    
        return HseSafetyTTResource::make($hseSafetyTT);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseSafetyTT $hseSafetyTT)
    {
        $hseSafetyTT->delete();
        $hseSafetyTT = HseSafetyTTResource::collection(HseSafetyTT::all());
        $total = $hseSafetyTT->count();
        return response()->json([
            'data' => $hseSafetyTT,
            'total' => $total,
        ]);
    }
}
