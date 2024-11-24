<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBarBendingMachineRequest;
use App\Http\Resources\BarBendingMachineResource;
use App\Models\BarBendingMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BarBendingMachineController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $barBendingMachine = BarBendingMachineResource::collection(BarBendingMachine::all());
        $total = $barBendingMachine->count();
        return response()->json([
            'data' => $barBendingMachine,
            'total' => $total
        ]);
    }

    public function store(StoreBarBendingMachineRequest $request)
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

        $barBendingMachine = BarBendingMachine::create($validatedData);
        return new BarBendingMachineResource($barBendingMachine);
    }

    /**
     * Display the specified resource.
     */
    public function show(BarBendingMachine $barBendingMachine)
    {
        return BarBendingMachineResource::make($barBendingMachine);
        
    }

    public function destroy(BarBendingMachine $barBendingMachine)
    {
        $barBendingMachine->delete();
        $barBendingMachine = BarBendingMachineResource::collection(BarBendingMachine::all());
        $total = $barBendingMachine->count();
        return response()->json([
            'data' => $barBendingMachine,
            'total' => $total
        ]);
    }
}
