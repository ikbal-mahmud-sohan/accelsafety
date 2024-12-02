<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEotCraneRequest;
use App\Http\Resources\EotCraneResource;
use App\Models\EotCrane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class EotCraneController extends Controller
{

    public function index()
    {
        $eotCrane = EotCraneResource::collection(EotCrane::all());
        $total = $eotCrane->count();
        return response()->json([
            'data' => $eotCrane,
            'total' => $total
        ]);
    }

    public function store(StoreEotCraneRequest $request)
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

        $eotCrane = EotCrane::create($validatedData);
        return new EotCraneResource($eotCrane);
    }

    public function show(EotCrane $eotCrane)
    {
        return EotCraneResource::make($eotCrane);
        
    }

    public function destroy(EotCrane $eotCrane)
    {
        $eotCrane->delete();
        $eotCrane = EotCraneResource::collection(EotCrane::all());
        $total = $eotCrane->count();
        return response()->json([
            'data' => $eotCrane,
            'total' => $total
        ]);
    }
}
