<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreExcavatorChecklistRequest;
use App\Http\Resources\ExcavatorChecklistResource;
use App\Models\ExcavatorChecklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class ExcavatorChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $excavatorChecklist = ExcavatorChecklistResource::collection(ExcavatorChecklist::all());
        $total = $excavatorChecklist->count();
        return response()->json([
            'data' => $excavatorChecklist,
            'total' => $total
        ]);
    }

    public function store(StoreExcavatorChecklistRequest $request)
    {
        $$checkedBySignature = [];
        if ($request->hasFile('checked_by_signature')) {
            foreach ($request->file('checked_by_signature') as $image) {
                $path = $image->store('checked_by_signature', 'public');
                $$checkedBySignature[] = Storage::url($path);
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
        $validatedData['checked_by_signature'] = $$checkedBySignature; 
        $validatedData['reviewed_by_signature'] = $reviewedSignatureUrls;

        $excavatorChecklist = ExcavatorChecklist::create($validatedData);
        return new ExcavatorChecklistResource($excavatorChecklist);
    }

    /**
     * Display the specified resource.
     */
    public function show(ExcavatorChecklist $excavatorChecklist)
    {
        return ExcavatorChecklistResource::make($excavatorChecklist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(ExcavatorChecklist $excavatorChecklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, ExcavatorChecklist $excavatorChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(ExcavatorChecklist $excavatorChecklist)
    {
        $excavatorChecklist->delete();
        $excavatorChecklist = ExcavatorChecklistResource::collection(ExcavatorChecklist::all());
        $total = $excavatorChecklist->count();
        return response()->json([
            'data' => $excavatorChecklist,
            'total' => $total
        ]);
    }
}
