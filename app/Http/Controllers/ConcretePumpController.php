<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreConcretePumpRequest;
use App\Http\Resources\ConcretePumpResource;
use App\Models\ConcretePump;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ConcretePumpController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $concretePump = ConcretePumpResource::collection(ConcretePump::all());
        $total = $concretePump->count();
        return response()->json([
            'data' => $concretePump,
            'total' => $total
        ]);
    }

    public function store(StoreConcretePumpRequest $request)
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

        $concretePump = ConcretePump::create($validatedData);
        return new ConcretePumpResource($concretePump);
    }

    /**
     * Display the specified resource.
     */
    public function show(ConcretePump $concretePump)
    {
        return ConcretePumpResource::make($concretePump);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ConcretePump $concretePump)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ConcretePump $concretePump)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ConcretePump $concretePump)
    {
        $concretePump->delete();
        $concretePump = ConcretePumpResource::collection(ConcretePump::all());
        $total = $concretePump->count();
        return response()->json([
            'data' => $concretePump,
            'total' => $total
        ]);
    }
}
