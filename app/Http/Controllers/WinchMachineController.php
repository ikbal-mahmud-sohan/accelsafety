<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreWinchMachineRequest;
use App\Http\Resources\WinchMachineResource;
use App\Models\WinchMachine;
use Illuminate\Support\Facades\Storage;


class WinchMachineController extends Controller
{

    public function index()
    {
        $winchMachine = WinchMachineResource::collection(WinchMachine::all());
        $total = $winchMachine->count();
        return response()->json([
            'data' => $winchMachine,
            'total' => $total
        ]);
    }

    public function store(StoreWinchMachineRequest $request)
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

        $winchMachine = WinchMachine::create($validatedData);
        return new WinchMachineResource($winchMachine);
    }

    /**
     * Display the specified resource.
     */
    public function show(WinchMachine $winchMachine)
    {
        return WinchMachineResource::make($winchMachine);
        
    }

    public function destroy(WinchMachine $winchMachine)
    {
        $winchMachine->delete();
        $winchMachine = WinchMachineResource::collection(WinchMachine::all());
        $total = $winchMachine->count();
        return response()->json([
            'data' => $winchMachine,
            'total' => $total
        ]);
    }
}
