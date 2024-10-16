<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetySwitchgearRequest;
use App\Http\Requests\UpdateHseSafetySwitchgearRequest;
use App\Http\Resources\HseSafetySwitchgearResource;
use App\Models\HseSafetySwitchgear;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetySwitchgearController extends Controller
{
    public function index()
    {
        $hseSafetySwitchgear = HseSafetySwitchgearResource::collection(HseSafetySwitchgear::all());
        $total = $hseSafetySwitchgear->count();
        return response()->json([
            'data' => $hseSafetySwitchgear,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetySwitchgearRequest $request)
    {
        $hseSafetySwitchgear = HseSafetySwitchgear::create($request->validated());
        return new HseSafetySwitchgearResource($hseSafetySwitchgear);
    }

    public function show(HseSafetySwitchgear $hseSafetySwitchgear)
    {
        return HseSafetySwitchgearResource::make($hseSafetySwitchgear);
        
    }

    public function update(UpdateHseSafetySwitchgearRequest $request, HseSafetySwitchgear $hseSafetySwitchgear)
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
        $hseSafetySwitchgear->update($validatedData);
        $hseSafetySwitchgear->save();
    
        return HseSafetySwitchgearResource::make($hseSafetySwitchgear);
    }

    public function destroy(HseSafetySwitchgear $hseSafetySwitchgear)
    {
        $hseSafetySwitchgear->delete();
        $hseSafetySwitchgear = HseSafetySwitchgearResource::collection(HseSafetySwitchgear::all());
        $total = $hseSafetySwitchgear->count();
        return response()->json([
            'data' => $hseSafetySwitchgear,
            'total' => $total,
        ]);
    }
}
