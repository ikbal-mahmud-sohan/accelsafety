<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreMobileCraneRequest;
use App\Http\Resources\MobileCraneResource;
use App\Models\MobileCrane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class MobileCraneController extends Controller
{

    public function index()
    {
        $mobileCrane = MobileCraneResource::collection(MobileCrane::all());
        $total = $mobileCrane->count();
        return response()->json([
            'data' => $mobileCrane,
            'total' => $total
        ]);
    }

    public function store(StoreMobileCraneRequest $request)
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

        $mobileCrane = MobileCrane::create($validatedData);
        return new MobileCraneResource($mobileCrane);
    }

    /**
     * Display the specified resource.
     */
    public function show(MobileCrane $mobileCrane)
    {
        return MobileCraneResource::make($mobileCrane);
        
    }

    public function destroy(MobileCrane $mobileCrane)
    {
        $mobileCrane->delete();
        $mobileCrane = MobileCraneResource::collection(MobileCrane::all());
        $total = $mobileCrane->count();
        return response()->json([
            'data' => $mobileCrane,
            'total' => $total
        ]);
    }
}
