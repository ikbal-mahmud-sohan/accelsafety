<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreElectricalVibratorRequest;
use App\Http\Resources\ElectricalVibratorResource;
use App\Models\ElectricalVibrator;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ElectricalVibratorController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $electricalVibrator = ElectricalVibratorResource::collection(ElectricalVibrator::all());
        $total = $electricalVibrator->count();
        return response()->json([
            'data' => $electricalVibrator,
            'total' => $total
        ]);
    }

    public function store(StoreElectricalVibratorRequest $request)
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

        $electricalVibrator = ElectricalVibrator::create($validatedData);
        return new ElectricalVibratorResource($electricalVibrator);
    }

    /**
     * Display the specified resource.
     */
    public function show(ElectricalVibrator $electricalVibrator)
    {
        return ElectricalVibratorResource::make($electricalVibrator);
        
    }

    public function destroy(ElectricalVibrator $electricalVibrator)
    {
        $electricalVibrator->delete();
        $electricalVibrator = ElectricalVibratorResource::collection(ElectricalVibrator::all());
        $total = $electricalVibrator->count();
        return response()->json([
            'data' => $electricalVibrator,
            'total' => $total
        ]);
    }
}
