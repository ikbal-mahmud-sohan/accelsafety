<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDieselTankerRequest;
use App\Http\Resources\DieselTankerResource;
use App\Models\DieselTanker;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class DieselTankerController extends Controller
{
    public function index()
    {
        $dieselTanker = DieselTankerResource::collection(DieselTanker::all());
        $total = $dieselTanker->count();
        return response()->json([
            'data' => $dieselTanker,
            'total' => $total
        ]);
    }

    public function store(StoreDieselTankerRequest $request)
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

        $dieselTanker = DieselTanker::create($validatedData);
        return new DieselTankerResource($dieselTanker);
    }

    public function show(DieselTanker $dieselTanker)
    {
        return DieselTankerResource::make($dieselTanker);
        
    }

    public function destroy(DieselTanker $dieselTanker)
    {
        $dieselTanker->delete();
        $dieselTanker = DieselTankerResource::collection(DieselTanker::all());
        $total = $dieselTanker->count();
        return response()->json([
            'data' => $dieselTanker,
            'total' => $total
        ]);
    }
}
