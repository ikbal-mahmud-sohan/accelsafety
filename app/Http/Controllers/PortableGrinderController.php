<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePortableGrinderRequest;
use App\Http\Resources\PortableGrinderResource;
use App\Models\PortableGrinder;
use Illuminate\Support\Facades\Storage;


class PortableGrinderController extends Controller
{

    public function index()
    {
        $portableGrinder = PortableGrinderResource::collection(PortableGrinder::all());
        $total = $portableGrinder->count();
        return response()->json([
            'data' => $portableGrinder,
            'total' => $total
        ]);
    }

    public function store(StorePortableGrinderRequest $request)
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

        $portableGrinder = PortableGrinder::create($validatedData);
        return new PortableGrinderResource($portableGrinder);
    }

    public function show(PortableGrinder $portableGrinder)
    {
        return PortableGrinderResource::make($portableGrinder);
        
    }

    public function destroy(PortableGrinder $portableGrinder)
    {
        $portableGrinder->delete();
        $portableGrinder = PortableGrinderResource::collection(PortableGrinder::all());
        $total = $portableGrinder->count();
        return response()->json([
            'data' => $portableGrinder,
            'total' => $total
        ]);
    }
}
