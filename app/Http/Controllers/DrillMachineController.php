<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDrillMachineRequest;
use App\Http\Resources\DrillMachineResource;
use App\Models\DrillMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DrillMachineController extends Controller
{

    public function index()
    {
        $drillMachine = DrillMachineResource::collection(DrillMachine::all());
        $total = $drillMachine->count();
        return response()->json([
            'data' => $drillMachine,
            'total' => $total
        ]);
    }

    public function store(StoreDrillMachineRequest $request)
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

        $drillMachine = DrillMachine::create($validatedData);
        return new DrillMachineResource($drillMachine);
    }

    /**
     * Display the specified resource.
     */
    public function show(DrillMachine $drillMachine)
    {
        return DrillMachineResource::make($drillMachine);
        
    }

    public function destroy(DrillMachine $drillMachine)
    {
        $drillMachine->delete();
        $drillMachine = DrillMachineResource::collection(DrillMachine::all());
        $total = $drillMachine->count();
        return response()->json([
            'data' => $drillMachine,
            'total' => $total
        ]);
    }
}
