<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBreakerRequest;
use App\Http\Resources\BreakerResource;
use App\Models\Breaker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BreakerController extends Controller
{

    public function index()
    {
        $breaker = BreakerResource::collection(Breaker::all());
        $total = $breaker->count();
        return response()->json([
            'data' => $breaker,
            'total' => $total
        ]);
    }

    public function store(StoreBreakerRequest $request)
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

        $breaker = Breaker::create($validatedData);
        return new BreakerResource($breaker);
    }

    /**
     * Display the specified resource.
     */
    public function show(Breaker $breaker)
    {
        return BreakerResource::make($breaker);
        
    }

    public function destroy(Breaker $breaker)
    {
        $breaker->delete();
        $breaker = BreakerResource::collection(Breaker::all());
        $total = $breaker->count();
        return response()->json([
            'data' => $breaker,
            'total' => $total
        ]);
    }
}
