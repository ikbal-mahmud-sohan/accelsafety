<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreBenchCuttingMachineRequest;
use App\Http\Resources\BenchCuttingMachineResource;
use App\Models\BenchCuttingMachine;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class BenchCuttingMachineController extends Controller
{
    public function index()
    {
        $benchCuttingMachine = BenchCuttingMachineResource::collection(BenchCuttingMachine::all());
        $total = $benchCuttingMachine->count();
        return response()->json([
            'data' => $benchCuttingMachine,
            'total' => $total
        ]);
    }

    public function store(StoreBenchCuttingMachineRequest $request)
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

        $benchCuttingMachine = BenchCuttingMachine::create($validatedData);
        return new BenchCuttingMachineResource($benchCuttingMachine);
    }

    /**
     * Display the specified resource.
     */
    public function show(BenchCuttingMachine $benchCuttingMachine)
    {
        return BenchCuttingMachineResource::make($benchCuttingMachine);
        
    }

    public function destroy(BenchCuttingMachine $benchCuttingMachine)
    {
        $benchCuttingMachine->delete();
        $benchCuttingMachine = BenchCuttingMachineResource::collection(BenchCuttingMachine::all());
        $total = $benchCuttingMachine->count();
        return response()->json([
            'data' => $benchCuttingMachine,
            'total' => $total
        ]);
    }
}
