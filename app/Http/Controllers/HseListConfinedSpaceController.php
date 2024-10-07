<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseListConfinedSpaceRequest;
use App\Http\Resources\HseHseListConfinedSpaceResource;
use App\Models\HseListConfinedSpace;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseListConfinedSpaceController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
       $hseListConfinedSpace = HseHseListConfinedSpaceResource::collection(HseListConfinedSpace::all());
       $total = $hseListConfinedSpace->count();
        return response()->json([
            'data' => $hseListConfinedSpace,
            'total' => $total,
        ]);
    }

    public function store(StoreHseListConfinedSpaceRequest $request)
    {
        $imagePaths = [];
       
        if ($request->hasFile('image')) {
            foreach ($request->file('image') as $image) {
                $path = $image->store('image', 'public');
                $bsrmSignaturePaths[] = Storage::url($path);
            }
        }
        $validatedData = $request->validated();
        $validatedData['image'] = $imagePaths;
        $hseHarnessChecklist = HseListConfinedSpace::create($validatedData);
        return new HseHseListConfinedSpaceResource($hseHarnessChecklist);

    }

    /**
     * Display the specified resource.
     */
    public function show(HseListConfinedSpace $hseListConfinedSpace)
    {
        return HseHseListConfinedSpaceResource::make($hseListConfinedSpace);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseListConfinedSpace $hseListConfinedSpace)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseListConfinedSpace $hseListConfinedSpace)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseListConfinedSpace $hseListConfinedSpace)
    {
       $hseListConfinedSpace->delete();
       $hseListConfinedSpace = HseHseListConfinedSpaceResource::collection(HseListConfinedSpace::all());
       $total = $hseListConfinedSpace->count();
        return response()->json([
            'data' => $hseListConfinedSpace,
            'total' => $total,
        ]);
    }
}
