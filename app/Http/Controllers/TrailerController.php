<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreTrailerRequest;
use App\Http\Resources\TrailerResource;
use App\Models\Trailer;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class TrailerController extends Controller
{

    public function index()
    {
        $trailer = TrailerResource::collection(Trailer::all());
        $total = $trailer->count();
        return response()->json([
            'data' => $trailer,
            'total' => $total
        ]);
    }

    public function store(StoreTrailerRequest $request)
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

        $trailer = Trailer::create($validatedData);
        return new TrailerResource($trailer);
    }

    public function show(Trailer $trailer)
    {
        return TrailerResource::make($trailer);
        
    }

    public function destroy(Trailer $trailer)
    {
        $trailer->delete();
        $trailer = TrailerResource::collection(Trailer::all());
        $total = $trailer->count();
        return response()->json([
            'data' => $trailer,
            'total' => $total
        ]);
    }
}
