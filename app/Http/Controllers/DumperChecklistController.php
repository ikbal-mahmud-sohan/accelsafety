<?php

namespace App\Http\Controllers;

use App\Http\Resources\DumperChecklistResource;
use App\Models\DumperChecklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class DumperChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $dumperChecklist = DumperChecklistResource::collection(DumperChecklist::all());
        $total = $dumperChecklist->count();
        return response()->json([
            'data' => $dumperChecklist,
            'total' => $total
        ]);
    }

    public function store(Request $request)
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

        $dumperChecklist = DumperChecklist::create($validatedData);
        return new DumperChecklistResource($dumperChecklist);
    }

    /**
     * Display the specified resource.
     */
    public function show(DumperChecklist $dumperChecklist)
    {
        return DumperChecklistResource::make($dumperChecklist);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DumperChecklist $dumperChecklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, DumperChecklist $dumperChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DumperChecklist $dumperChecklist)
    {
        $dumperChecklist->delete();
        $dumperChecklist = DumperChecklistResource::collection(DumperChecklist::all());
        $total = $dumperChecklist->count();
        return response()->json([
            'data' => $dumperChecklist,
            'total' => $total
        ]);
    }
}
