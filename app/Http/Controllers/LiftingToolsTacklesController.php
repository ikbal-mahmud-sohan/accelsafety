<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreLiftingToolsTacklesRequest;
use App\Http\Resources\LiftingToolsTacklesResource;
use App\Models\LiftingToolsTackles;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class LiftingToolsTacklesController extends Controller
{
    public function index()
    {
        $liftingToolsTackles = LiftingToolsTacklesResource::collection(LiftingToolsTackles::all());
        $total = $liftingToolsTackles->count();
        return response()->json([
            'data' => $liftingToolsTackles,
            'total' => $total
        ]);
    }

    public function store(StoreLiftingToolsTacklesRequest $request)
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

        $liftingToolsTackles = LiftingToolsTackles::create($validatedData);
        return new LiftingToolsTacklesResource($liftingToolsTackles);
    }

    /**
     * Display the specified resource.
     */
    public function show(LiftingToolsTackles $liftingToolsTackles)
    {
        return LiftingToolsTacklesResource::make($liftingToolsTackles);
        
    }

    public function destroy(LiftingToolsTackles $liftingToolsTackles)
    {
        $liftingToolsTackles->delete();
        $liftingToolsTackles = LiftingToolsTacklesResource::collection(LiftingToolsTackles::all());
        $total = $liftingToolsTackles->count();
        return response()->json([
            'data' => $liftingToolsTackles,
            'total' => $total
        ]);
    }
}
