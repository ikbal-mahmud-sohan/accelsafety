<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSandBlastingSetRequest;
use App\Http\Resources\SandBlastingSetResource;
use App\Models\SandBlastingSet;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SandBlastingSetController extends Controller
{
  
    public function index()
    {
        $sandBlastingSet = SandBlastingSetResource::collection(SandBlastingSet::all());
        $total = $sandBlastingSet->count();
        return response()->json([
            'data' => $sandBlastingSet,
            'total' => $total
        ]);
    }

    public function store(StoreSandBlastingSetRequest $request)
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

        $sandBlastingSet = SandBlastingSet::create($validatedData);
        return new SandBlastingSetResource($sandBlastingSet);
    }

    /**
     * Display the specified resource.
     */
    public function show(SandBlastingSet $sandBlastingSet)
    {
        return SandBlastingSetResource::make($sandBlastingSet);
        
    }

    public function destroy(SandBlastingSet $sandBlastingSet)
    {
        $sandBlastingSet->delete();
        $sandBlastingSet = SandBlastingSetResource::collection(SandBlastingSet::all());
        $total = $sandBlastingSet->count();
        return response()->json([
            'data' => $sandBlastingSet,
            'total' => $total
        ]);
    }
}
