<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreFireExtinguisherRequest;
use App\Http\Resources\FireExtinguisherResource;
use App\Models\FireExtinguisher;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class FireExtinguisherController extends Controller
{
    public function index()
    {
        $fireExtinguisher = FireExtinguisherResource::collection(FireExtinguisher::all());
        $total = $fireExtinguisher->count();
        return response()->json([
            'data' => $fireExtinguisher,
            'total' => $total
        ]);
    }

    public function store(StoreFireExtinguisherRequest $request)
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

        $fireExtinguisher = FireExtinguisher::create($validatedData);
        return new FireExtinguisherResource($fireExtinguisher);
    }

    /**
     * Display the specified resource.
     */
    public function show(FireExtinguisher $fireExtinguisher)
    {
        return FireExtinguisherResource::make($fireExtinguisher);
        
    }

    public function destroy(FireExtinguisher $fireExtinguisher)
    {
        $fireExtinguisher->delete();
        $fireExtinguisher = FireExtinguisherResource::collection(FireExtinguisher::all());
        $total = $fireExtinguisher->count();
        return response()->json([
            'data' => $fireExtinguisher,
            'total' => $total
        ]);
    }
}
