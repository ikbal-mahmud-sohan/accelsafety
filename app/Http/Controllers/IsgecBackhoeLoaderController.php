<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreIsgecBackhoeLoaderRequest;
use App\Http\Resources\IsgecBackhoeLoaderResource;
use App\Models\IsgecBackhoeLoader;
use Illuminate\Support\Facades\Storage;


class IsgecBackhoeLoaderController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $isgecBackhoeLoader = IsgecBackhoeLoaderResource::collection(IsgecBackhoeLoader::all());
        $total = $isgecBackhoeLoader->count();
        return response()->json([
            'data' => $isgecBackhoeLoader,
            'total' => $total,
        ]);
    }

    public function store(StoreIsgecBackhoeLoaderRequest $request)
    {
        $inspectedSignatureUrls = [];
        if ($request->hasFile('inspected_by_signature')) {
            foreach ($request->file('inspected_by_signature') as $image) {
                $path = $image->store('inspected_by_signature', 'public');
                $inspectedSignatureUrls[] = Storage::url($path);
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
        $validatedData['inspected_by_signature'] = $inspectedSignatureUrls; 
        $validatedData['reviewed_by_signature'] = $reviewedSignatureUrls; 

        $isgecBackhoeLoader = IsgecBackhoeLoader::create($validatedData);
        
        return IsgecBackhoeLoaderResource::make($isgecBackhoeLoader);
    }

    public function destroy(IsgecBackhoeLoader $isgecBackhoeLoader)
    {
        $isgecBackhoeLoader->delete();
        $isgecBackhoeLoader = IsgecBackhoeLoaderResource::collection(IsgecBackhoeLoader::all());
        $totalCount = $isgecBackhoeLoader->count();

        return response()->json([
            'data' => $isgecBackhoeLoader,
            'total_count' => $totalCount,
        ]);
    }
}
