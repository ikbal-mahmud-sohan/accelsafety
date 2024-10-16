<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyBTRequest;
use App\Http\Requests\UpdateHseSafetyBTRequest;
use App\Http\Resources\HseSafetyBTResource;
use App\Models\HseSafetyBT;
use Illuminate\Support\Facades\Storage;


class HseSafetyBTController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseSafetyBT = HseSafetyBTResource::collection(HseSafetyBT::all());
        $total = $hseSafetyBT->count();
        return response()->json([
            'data' => $hseSafetyBT,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetyBTRequest $request)
    {
        $hseSafetyBT = HseSafetyBT::create($request->validated());
        return new HseSafetyBTResource($hseSafetyBT);
    }

    public function show(HseSafetyBT $hseSafetyBT)
    {
        return HseSafetyBTResource::make($hseSafetyBT);
        
    }

    public function update(UpdateHseSafetyBTRequest $request, HseSafetyBT $hseSafetyBT)
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
        $hseSafetyBT->update($validatedData);
        $hseSafetyBT->save();
    
        return HseSafetyBTResource::make($hseSafetyBT);
    }

    public function destroy(HseSafetyBT $hseSafetyBT)
    {
        $hseSafetyBT->delete();

        $hseSafetyBT = HseSafetyBTResource::collection(HseSafetyBT::all());
        $total = $hseSafetyBT->count();
        return response()->json([
            'data' => $hseSafetyBT,
            'total' => $total,
        ]);
    }
}
