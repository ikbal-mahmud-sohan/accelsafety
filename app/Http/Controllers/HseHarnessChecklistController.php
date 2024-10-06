<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseHarnessChecklistRequest;
use App\Http\Resources\HseHarnessChecklistResource;
use App\Models\HseHarnessChecklist;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HseHarnessChecklistController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseHarnessChecklist = HseHarnessChecklistResource::collection(HseHarnessChecklist::all());
       $total = $hseHarnessChecklist->count();
        return response()->json([
            'data' => $hseHarnessChecklist,
            'total' => $total,
        ]);
    }

    public function store(StoreHseHarnessChecklistRequest $request)
    {
        $harnessImage1Paths = [];
       
        if ($request->hasFile('harness_image_1')) {
            foreach ($request->file('harness_image_1') as $image) {
                $path = $image->store('harness_image_1', 'public');
                $harnessImage1Paths[] = Storage::url($path);
            }
        }
        $harnessImage1Paths = [];

        if ($request->hasFile('harness_image_2')) {
            foreach ($request->file('harness_image_2') as $image) {
                $path = $image->store('harness_image_2', 'public');
                $harnessImage1Paths[] = Storage::url($path);
            }
        }
        $harnessImage3Paths = [];
        if ($request->hasFile('harness_image_3')) {
            foreach ($request->file('harness_image_3') as $image) {
                $path = $image->store('harness_image_3', 'public');
                $harnessImage2Paths[] = Storage::url($path);
            }
        }
        $harnessImage4Paths = [];
        if ($request->hasFile('harness_image_4')) {
            foreach ($request->file('harness_image_4') as $image) {
                $path = $image->store('harness_image_4', 'public');
                $harnessImage4Paths[] = Storage::url($path);
            }
        }
        $harnessImage5Paths = [];
        if ($request->hasFile('harness_image_5')) {
            foreach ($request->file('harness_image_5') as $image) {
                $path = $image->store('harness_image_5', 'public');
                $harnessImage5Paths[] = Storage::url($path);
            }
        }
        $harnessImage6Paths = [];
        if ($request->hasFile('harness_image_6')) {
            foreach ($request->file('harness_image_6') as $image) {
                $path = $image->store('harness_image_6', 'public');
                $harnessImage6Paths[] = Storage::url($path);
            }
        }
        $harnessImage6Paths = [];
        if ($request->hasFile('harness_image_6')) {
            foreach ($request->file('harness_image_6') as $image) {
                $path = $image->store('harness_image_6', 'public');
                $harnessImage6Paths[] = Storage::url($path);
            }
        }
        $harnessImage7Paths = [];
        if ($request->hasFile('harness_image_7')) {
            foreach ($request->file('harness_image_7') as $image) {
                $path = $image->store('harness_image_7', 'public');
                $harnessImage7Paths[] = Storage::url($path);
            }
        }
        $harnessImage8Paths = [];
        if ($request->hasFile('harness_image_8')) {
            foreach ($request->file('harness_image_8') as $image) {
                $path = $image->store('harness_image_8', 'public');
                $harnessImage8Paths[] = Storage::url($path);
            }
        }
        $harnessImage9Paths = [];
        if ($request->hasFile('harness_image_9')) {
            foreach ($request->file('harness_image_9') as $image) {
                $path = $image->store('harness_image_9', 'public');
                $harnessImage9Paths[] = Storage::url($path);
            }
        }
        
        $validatedData = $request->validated();

        $validatedData['harness_image_1'] = $harnessImage1Paths;
        $validatedData['harness_image_2'] = $harnessImage2Paths;
        $validatedData['harness_image_3'] = $harnessImage3Paths;
        $validatedData['harness_image_4'] = $harnessImage4Paths;
        $validatedData['harness_image_5'] = $harnessImage5Paths;
        $validatedData['harness_image_6'] = $harnessImage6Paths;
        $validatedData['harness_image_7'] = $harnessImage7Paths;
        $validatedData['harness_image_8'] = $harnessImage8Paths;
        $validatedData['harness_image_9'] = $harnessImage9Paths;
        
        $hseHarnessChecklist = HseHarnessChecklist::create($validatedData);
        return new HseHarnessChecklistResource($hseHarnessChecklist);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseHarnessChecklist $hseHarnessChecklist)
    {
        return HseHarnessChecklistResource::make($hseHarnessChecklist);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseHarnessChecklist $hseHarnessChecklist)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseHarnessChecklist $hseHarnessChecklist)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseHarnessChecklist $hseHarnessChecklist)
    {
        $hseHarnessChecklist->delete();
        $hseHarnessChecklist = HseHarnessChecklistResource::collection(HseHarnessChecklist::all());
        $total = $hseHarnessChecklist->count();
        return response()->json([
            'data' => $hseHarnessChecklist,
            'total' => $total
        ]);
    }
}
