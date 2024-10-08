<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseHotWorkRequest;
use App\Http\Requests\StoreHseHotWorkRequest;
use App\Http\Requests\UpdateHseHotWorkRequest;
use App\Http\Resources\HseHseHotWorkResource;
use App\Models\HseHotWork;
use Illuminate\Http\Request;

class HseHotWorkController extends Controller
{
    
    public function index()
    {
        $hseHotWork = HseHotWork::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HseHseHotWorkResource::collection($hseHotWork);
    }

    public function store(StoreHseHotWorkRequest $request)
    {
        $hseHotWork = HseHotWork::create($request->validated());
        return new HseHseHotWorkResource($hseHotWork);
    }

    public function show(HseHotWork $hseHotWork)
    {
        return HseHseHotWorkResource::make($hseHotWork);
        
    }

    public function edit(ApprovedHseHotWorkRequest $request, HseHotWork $hseHotWork)
    {
        $hseHotWork->approved_by = $request->approved_by;
        $hseHotWork->approved_date = now();
        $hseHotWork->save(); 

        return new HseHseHotWorkResource($hseHotWork);
    }

    public function update(UpdateHseHotWorkRequest $request, HseHotWork $hseHotWork)
    {
        $hseHotWork->update($request->validated());
        return new HseHseHotWorkResource($hseHotWork);
    }

   
    public function destroy(HseHotWork $hseHotWork)
    {
        $hseHotWork->delete();
        $hseHotWork = HseHseHotWorkResource::collection(HseHotWork::all());
        $totalCount = $hseHotWork->count();

        return response()->json([
            'data' => $hseHotWork,
            'total_count' => $totalCount,
        ]);
    }
}
