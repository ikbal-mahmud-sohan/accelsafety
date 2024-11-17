<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseSafeCraneOperationRequest;
use App\Http\Requests\StoreHseSafeCraneOperationRequest;
use App\Http\Requests\UpdateHseSafeCraneOperationRequest;
use App\Http\Resources\HseSafeCraneOperationResource;
use App\Models\HseSafeCraneOperation;
use Illuminate\Http\Request;

class HseSafeCraneOperationController extends Controller
{
    
    public function index()
    {
        $hseSafeCraneOperation = HseSafeCraneOperation::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseSafeCraneOperationResource::collection($hseSafeCraneOperation);
    }

    public function store(StoreHseSafeCraneOperationRequest $request)
    {
        $hseSafeCraneOperation = HseSafeCraneOperation::create($request->validated());
        return new HseSafeCraneOperationResource($hseSafeCraneOperation);
    }

   
    public function show(HseSafeCraneOperation $hseSafeCraneOperation)
    {
        return HseSafeCraneOperationResource::make($hseSafeCraneOperation);
        
    }

   
    public function edit(ApprovedHseSafeCraneOperationRequest $request, HseSafeCraneOperation $hseSafeCraneOperation)
    {
        $hseSafeCraneOperation->approved_by = $request->approved_by;
        $hseSafeCraneOperation->approved_date = now();
        $hseSafeCraneOperation->save(); 

        return new HseSafeCraneOperationResource($hseSafeCraneOperation);
    }

    
    public function update(UpdateHseSafeCraneOperationRequest $request, HseSafeCraneOperation $hseSafeCraneOperation)
    {
        $hseSafeCraneOperation->update($request->validated());
        return new HseSafeCraneOperationResource($hseSafeCraneOperation);
    }

    public function destroy(HseSafeCraneOperation $hseSafeCraneOperation)
    {
        $hseSafeCraneOperation->delete();
        $hseSafeCraneOperation = HseSafeCraneOperationResource::collection(HseSafeCraneOperation::all());
        $totalCount = $hseSafeCraneOperation->count();

        return response()->json([
            'data' => $hseSafeCraneOperation,
            'total_count' => $totalCount,
        ]);
    }
}
