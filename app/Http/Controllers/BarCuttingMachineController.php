<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarCuttingMachineRequest;
use App\Http\Resources\BarCuttingMachineResource;
use App\Models\BarCuttingMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BarCuttingMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barCuttingMachine = BarCuttingMachineResource::collection(BarCuttingMachine::all());
        $total = $barCuttingMachine->count();
        return response()->json([
            'data' => $barCuttingMachine,
            'total' => $total
        ]);
    }

    public function store(StoreBarCuttingMachineRequest $request)
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

        $barCuttingMachine = BarCuttingMachine::create($validatedData);
        return new BarCuttingMachineResource($barCuttingMachine);
    }

    /**
     * Display the specified resource.
     */
    public function show(BarCuttingMachine $barCuttingMachine)
    {
        return BarCuttingMachineResource::make($barCuttingMachine);
        
    }

    public function destroy(BarCuttingMachine $barCuttingMachine)
    {
        $barCuttingMachine->delete();
        $barCuttingMachine = BarCuttingMachineResource::collection(BarCuttingMachine::all());
        $total = $barCuttingMachine->count();
        return response()->json([
            'data' => $barCuttingMachine,
            'total' => $total
        ]);
    }
}
