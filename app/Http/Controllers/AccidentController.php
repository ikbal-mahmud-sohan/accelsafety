<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentRequest;
use App\Http\Requests\UpdateAccidentRequest;
use App\Http\Resources\Accident as ResourcesAccident;
use App\Models\Accident;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AccidentController extends Controller
{
  
    public function index()
    {
        $accident = ResourcesAccident::collection(Accident::all());
        $totalCount = $accident->count();
        return response()->json([
            'data' => $accident,
            'total_count' => $totalCount,
        ]);

    }

    public function store(StoreAccidentRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['property_damaged'] = filter_var($validatedData['property_damaged'], FILTER_VALIDATE_BOOLEAN);
        $validatedData['is_required'] = filter_var($validatedData['is_required'], FILTER_VALIDATE_BOOLEAN);
        $imageUrls = [];
        if ($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $image) {
                $path = $image->store('attachment', 'public');
                $imageUrls[] = Storage::url($path);
            }
    
            // Assign the uploaded image URLs to validatedData
            $validatedData['attachment'] = $imageUrls;
        } 
        
        $validatedData['status'] = $validatedData['is_required'] ? Accident::STATUS_OPEN : Accident::STATUS_CLOSED;

        $accident = Accident::create($validatedData);
        return ResourcesAccident::make($accident);
    }

    public function show(Accident $accident)
    {
        return ResourcesAccident::make($accident);
    }

    
    public function update(UpdateAccidentRequest $request, Accident $accident)
    {
    $validatedData = $request->validated();
    $imageUrls = [];
    if ($request->hasFile('verified_image')) {
        foreach ($request->file('verified_image') as $image) {
            $path = $image->store('verified_image', 'public');
            $imageUrls[] = Storage::url($path);
        }

        // Assign the uploaded image URLs to validatedData
        $validatedData['verified_image'] = $imageUrls;
    }

    if ($accident->update($validatedData)) {
        $accident->status = Accident::STATUS_CLOSED;
        $accident->save();
    }

    return ResourcesAccident::make($accident);

    
    }

   
    public function destroy(Accident $accident)
    {
        $accident->delete();
        $accident = ResourcesAccident::collection(accident::all());
        $totalCount = $accident->count();

        return response()->json([
            'data' => $accident,
            'total_count' => $totalCount,
        ]);
    }
}

