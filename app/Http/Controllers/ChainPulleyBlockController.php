<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreChainPulleyBlockRequest;
use App\Http\Resources\ChainPulleyBlockResource;
use App\Models\ChainPulleyBlock;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ChainPulleyBlockController extends Controller
{
    public function index()
    {
        $chainPulleyBlock = ChainPulleyBlockResource::collection(ChainPulleyBlock::all());
        $total = $chainPulleyBlock->count();
        return response()->json([
            'data' => $chainPulleyBlock,
            'total' => $total
        ]);
    }

    public function store(StoreChainPulleyBlockRequest $request)
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

        $chainPulleyBlock = ChainPulleyBlock::create($validatedData);
        return new ChainPulleyBlockResource($chainPulleyBlock);
    }

    /**
     * Display the specified resource.
     */
    public function show(ChainPulleyBlock $chainPulleyBlock)
    {
        return ChainPulleyBlockResource::make($chainPulleyBlock);
        
    }

    public function destroy(ChainPulleyBlock $chainPulleyBlock)
    {
        $chainPulleyBlock->delete();
        $chainPulleyBlock = ChainPulleyBlockResource::collection(ChainPulleyBlock::all());
        $total = $chainPulleyBlock->count();
        return response()->json([
            'data' => $chainPulleyBlock,
            'total' => $total
        ]);
    }
}
