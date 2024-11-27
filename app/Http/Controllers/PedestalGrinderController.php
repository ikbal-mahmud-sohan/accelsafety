<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePedestalGrinderRequest;
use App\Http\Resources\PedestalGrinderResource;
use App\Models\PedestalGrinder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PedestalGrinderController extends Controller
{
    public function index()
    {
        $pedestalGrinder = PedestalGrinderResource::collection(PedestalGrinder::all());
        $total = $pedestalGrinder->count();
        return response()->json([
            'data' => $pedestalGrinder,
            'total' => $total
        ]);
    }

    public function store(StorePedestalGrinderRequest $request)
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

        $pedestalGrinder = PedestalGrinder::create($validatedData);
        return new PedestalGrinderResource($pedestalGrinder);
    }

    /**
     * Display the specified resource.
     */
    public function show(PedestalGrinder $pedestalGrinder)
    {
        return PedestalGrinderResource::make($pedestalGrinder);
        
    }

    public function destroy(PedestalGrinder $pedestalGrinder)
    {
        $pedestalGrinder->delete();
        $pedestalGrinder = PedestalGrinderResource::collection(PedestalGrinder::all());
        $total = $pedestalGrinder->count();
        return response()->json([
            'data' => $pedestalGrinder,
            'total' => $total
        ]);
    }
}
