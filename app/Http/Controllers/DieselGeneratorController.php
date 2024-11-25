<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDieselGeneratorRequest;
use App\Http\Resources\DieselGeneratorResource;
use App\Models\DieselGenerator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DieselGeneratorController extends Controller
{
    public function index()
    {
        $dieselGenerator = DieselGeneratorResource::collection(DieselGenerator::all());
        $total = $dieselGenerator->count();
        return response()->json([
            'data' => $dieselGenerator,
            'total' => $total
        ]);
    }

    public function store(StoreDieselGeneratorRequest $request)
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

        $dieselGenerator = DieselGenerator::create($validatedData);
        return new DieselGeneratorResource($dieselGenerator);
    }

    /**
     * Display the specified resource.
     */
    public function show(DieselGenerator $dieselGenerator)
    {
        return DieselGeneratorResource::make($dieselGenerator);
        
    }

    public function destroy(DieselGenerator $dieselGenerator)
    {
        $dieselGenerator->delete();
        $dieselGenerator = DieselGeneratorResource::collection(DieselGenerator::all());
        $total = $dieselGenerator->count();
        return response()->json([
            'data' => $dieselGenerator,
            'total' => $total
        ]);
    }
}
