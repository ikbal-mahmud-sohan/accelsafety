<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseSafetyCTCVTPTRequest;
use App\Http\Requests\UpdateHseSafetyCTCVTPTRequest;
use App\Http\Resources\HseSafetyCTCVTPTResource;
use App\Models\HseSafetyCTCVTPT;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseSafetyCTCVTPTController extends Controller
{
   
    public function index()
    {
        $hseSafetyCTCVTPT = HseSafetyCTCVTPTResource::collection(HseSafetyCTCVTPT::all());
        $total = $hseSafetyCTCVTPT->count();
        return response()->json([
            'data' => $hseSafetyCTCVTPT,
            'total' => $total,
        ]);
    }

    public function store(StoreHseSafetyCTCVTPTRequest $request)
    {
        $hseSafetyCTCVTPT = HseSafetyCTCVTPT::create($request->validated());
        return new HseSafetyCTCVTPTResource($hseSafetyCTCVTPT);
    }

    public function show(HseSafetyCTCVTPT $hseSafetyCTCVTPT)
    {
        return HseSafetyCTCVTPTResource::make($hseSafetyCTCVTPT);
        
    }

    public function update(UpdateHseSafetyCTCVTPTRequest $request, HseSafetyCTCVTPT $hseSafetyCTCVTPT)
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
        $hseSafetyCTCVTPT->update($validatedData);
        $hseSafetyCTCVTPT->save();
    
        return HseSafetyCTCVTPTResource::make($hseSafetyCTCVTPT);
    }

    public function destroy(HseSafetyCTCVTPT $hseSafetyCTCVTPT)
    {
        $hseSafetyCTCVTPT->delete();
        $hseSafetyCTCVTPT = HseSafetyCTCVTPTResource::collection(HseSafetyCTCVTPT::all());
        $total = $hseSafetyCTCVTPT->count();
        return response()->json([
            'data' => $hseSafetyCTCVTPT,
            'total' => $total,
        ]);
    }
}
