<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBusRequest;
use App\Http\Resources\BusResource;
use App\Models\Bus;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BusController extends Controller
{
    public function index()
    {
        $bus = BusResource::collection(Bus::all());
        $total = $bus->count();
        return response()->json([
            'data' => $bus,
            'total' => $total
        ]);
    }

    public function store(StoreBusRequest $request)
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

        $bus = Bus::create($validatedData);
        return new BusResource($bus);
    }

    public function show(Bus $bus)
    {
        return BusResource::make($bus);
        
    }

    public function destroy(Bus $bus)
    {
        $bus->delete();
        $bus = BusResource::collection(Bus::all());
        $total = $bus->count();
        return response()->json([
            'data' => $bus,
            'total' => $total
        ]);
    }
}
