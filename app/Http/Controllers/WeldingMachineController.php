<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWeldingMachineRequest;
use App\Http\Resources\WeldingMachineResource;
use App\Models\WeldingMachine;
use Illuminate\Support\Facades\Storage;


class WeldingMachineController extends Controller
{

    public function index()
    {
        $weldingMachine = WeldingMachineResource::collection(WeldingMachine::all());
        $total = $weldingMachine->count();
        return response()->json([
            'data' => $weldingMachine,
            'total' => $total
        ]);
    }

    public function store(StoreWeldingMachineRequest $request)
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

        $weldingMachine = WeldingMachine::create($validatedData);
        return new WeldingMachineResource($weldingMachine);
    }

    public function show(WeldingMachine $weldingMachine)
    {
        return WeldingMachineResource::make($weldingMachine);
        
    }

    public function destroy(WeldingMachine $weldingMachine)
    {
        $weldingMachine->delete();
        $weldingMachine = WeldingMachineResource::collection(WeldingMachine::all());
        $total = $weldingMachine->count();
        return response()->json([
            'data' => $weldingMachine,
            'total' => $total
        ]);
    }
}
