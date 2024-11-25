<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTowerCraneRequest;
use App\Http\Resources\TowerCraneResource;
use App\Models\TowerCrane;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TowerCraneController extends Controller
{
    public function index()
    {
        $towerCrane = TowerCraneResource::collection(TowerCrane::all());
        $total = $towerCrane->count();
        return response()->json([
            'data' => $towerCrane,
            'total' => $total
        ]);
    }

    public function store(StoreTowerCraneRequest $request)
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

        $towerCrane = TowerCrane::create($validatedData);
        return new TowerCraneResource($towerCrane);
    }

    public function show(TowerCrane $towerCrane)
    {
        return TowerCraneResource::make($towerCrane);
        
    }

    public function destroy(TowerCrane $towerCrane)
    {
        $towerCrane->delete();
        $towerCrane = TowerCraneResource::collection(TowerCrane::all());
        $total = $towerCrane->count();
        return response()->json([
            'data' => $towerCrane,
            'total' => $total
        ]);
    }
}
