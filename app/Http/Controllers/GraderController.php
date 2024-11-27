<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreGraderRequest;
use App\Http\Resources\GraderResource;
use App\Models\Grader;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class GraderController extends Controller
{
    public function index()
    {
        $grader = GraderResource::collection(Grader::all());
        $total = $grader->count();
        return response()->json([
            'data' => $grader,
            'total' => $total
        ]);
    }

    public function store(StoreGraderRequest $request)
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

        $grader = Grader::create($validatedData);
        return new GraderResource($grader);
    }

    /**
     * Display the specified resource.
     */
    public function show(Grader $grader)
    {
        return GraderResource::make($grader);
        
    }

    public function destroy(Grader $grader)
    {
        $grader->delete();
        $grader = GraderResource::collection(Grader::all());
        $total = $grader->count();
        return response()->json([
            'data' => $grader,
            'total' => $total
        ]);
    }
}
