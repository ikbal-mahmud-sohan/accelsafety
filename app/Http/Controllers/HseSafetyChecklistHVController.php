<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyChecklistHVRequest;
use App\Http\Requests\UpdateHseSafetyChecklistHVRequest;
use App\Http\Resources\HseSafetyChecklistHVResource;
use App\Models\HseSafetyChecklistHV;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetyChecklistHVController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseSafetyChecklistHV = HseSafetyChecklistHVResource::collection(HseSafetyChecklistHV::all());
        $total = $hseSafetyChecklistHV->count();
        return response()->json([
            'data' => $hseSafetyChecklistHV,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetyChecklistHVRequest $request)
    {
        $hseSafetyChecklistHV = HseSafetyChecklistHV::create($request->validated());
        return new HseSafetyChecklistHVResource($hseSafetyChecklistHV);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseSafetyChecklistHV $hseSafetyChecklistHV)
    {
        return HseSafetyChecklistHVResource::make($hseSafetyChecklistHV);
        
    }

    public function update(UpdateHseSafetyChecklistHVRequest $request, HseSafetyChecklistHV $hseSafetyChecklistHV)
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
        $hseSafetyChecklistHV->update($validatedData);
        $hseSafetyChecklistHV->save();
    
        return HseSafetyChecklistHVResource::make($hseSafetyChecklistHV);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseSafetyChecklistHV $hseSafetyChecklistHV)
    {
        $hseSafetyChecklistHV->delete();
        $hseSafetyChecklistHV = HseSafetyChecklistHVResource::collection(HseSafetyChecklistHV::all());
        $total = $hseSafetyChecklistHV->count();
        return response()->json([
            'data' => $hseSafetyChecklistHV,
            'total' => $total,
        ]);
        
    }
}
