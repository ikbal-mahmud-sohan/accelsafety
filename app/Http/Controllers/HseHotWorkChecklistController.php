<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseHotWorkChecklistRequest;
use App\Http\Resources\HseHotWorkChecklistResource;
use App\Models\HseHotWorkChecklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseHotWorkChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseHotWorkChecklist = HseHotWorkChecklistResource::collection(HseHotWorkChecklist::all());
        $total = $hseHotWorkChecklist->count();
            return response()->json([
                'data' => $hseHotWorkChecklist,
                'total' => $total,
            ]);
    }

    public function store(StoreHseHotWorkChecklistRequest $request)
    {
        $supervisorSignaturePaths = [];
       
        if ($request->hasFile('supervisor_signature')) {
            foreach ($request->file('supervisor_signature') as $image) {
                $path = $image->store('supervisor_signature', 'public');
                $supervisorSignaturePaths[] = Storage::url($path);
            }
        }
        $validatedData = $request->validated();
        $validatedData['supervisor_signature'] = $supervisorSignaturePaths;

        $hseHotWorkChecklist = HseHotWorkChecklist::create($validatedData);
        return new HseHotWorkChecklistResource($hseHotWorkChecklist);


    }

    public function show(HseHotWorkChecklist $hseHotWorkChecklist)
    {
        return HseHotWorkChecklistResource::make($hseHotWorkChecklist);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseHotWorkChecklist $hseHotWorkChecklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseHotWorkChecklist $hseHotWorkChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseHotWorkChecklist $hseHotWorkChecklist)
    {
        $hseHotWorkChecklist->delete();
        $hseHotWorkChecklist = HseHotWorkChecklistResource::collection(HseHotWorkChecklist::all());
        $total = $hseHotWorkChecklist->count();
            return response()->json([
                'data' => $hseHotWorkChecklist,
                'total' => $total,
            ]);
    }
}
