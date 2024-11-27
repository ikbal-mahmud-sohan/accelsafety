<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreSkidSteerLoaderRequest;
use App\Http\Resources\SkidSteerLoaderResource;
use App\Models\SkidSteerLoader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class SkidSteerLoaderController extends Controller
{
    public function index()
    {
        $skidSteerLoader = SkidSteerLoaderResource::collection(SkidSteerLoader::all());
        $total = $skidSteerLoader->count();
        return response()->json([
            'data' => $skidSteerLoader,
            'total' => $total
        ]);
    }

    public function store(StoreSkidSteerLoaderRequest $request)
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

        $skidSteerLoader = SkidSteerLoader::create($validatedData);
        return new SkidSteerLoaderResource($skidSteerLoader);
    }

    /**
     * Display the specified resource.
     */
    public function show(SkidSteerLoader $skidSteerLoader)
    {
        return SkidSteerLoaderResource::make($skidSteerLoader);
        
    }

    public function destroy(SkidSteerLoader $skidSteerLoader)
    {
        $skidSteerLoader->delete();
        $skidSteerLoader = SkidSteerLoaderResource::collection(SkidSteerLoader::all());
        $total = $skidSteerLoader->count();
        return response()->json([
            'data' => $skidSteerLoader,
            'total' => $total
        ]);
    }
}
