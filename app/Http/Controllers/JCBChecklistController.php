<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreJCBChecklistRequest;
use App\Http\Resources\JCBChecklistResource;
use App\Models\JCBChecklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class JCBChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $jCBChecklist = JCBChecklistResource::collection(JCBChecklist::all());
        $total = $jCBChecklist->count();
        return response()->json([
            'data' => $jCBChecklist,
            'total' => $total
        ]);
    }

    public function store(StoreJCBChecklistRequest $request)
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

        $jCBChecklist = JCBChecklist::create($validatedData);
        return new JCBChecklistResource($jCBChecklist);
    }

    public function show(JCBChecklist $jCBChecklist)
    {
        return JCBChecklistResource::make($jCBChecklist);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(JCBChecklist $jCBChecklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, JCBChecklist $jCBChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(JCBChecklist $jCBChecklist)
    {
        $jCBChecklist->delete();
        $jCBChecklist = JCBChecklistResource::collection(JCBChecklist::all());
        $total = $jCBChecklist->count();
        return response()->json([
            'data' => $jCBChecklist,
            'total' => $total
        ]);
    }
}
