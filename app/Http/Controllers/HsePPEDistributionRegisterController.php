<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePPEDistributionRegisterRequest;
use App\Http\Requests\UpdatePPEDistributionRegisterRequest;
use App\Http\Resources\PPEDistributionRegisterResource;
use App\Models\HsePPEDistributionRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class HsePPEDistributionRegisterController extends Controller
{
    
    public function index()
    {
        $hsePPEDistributionRegister = PPEDistributionRegisterResource::collection(HsePPEDistributionRegister::all());
        $totalCount = $hsePPEDistributionRegister->count();

        return response()->json([
            'data' => $hsePPEDistributionRegister,
            'total_count' => $totalCount,
        ]);
    }

    public function store(StorePPEDistributionRegisterRequest $request)
    {
        $hsePPEDistributionRegister = HsePPEDistributionRegister::create($request->validated());
        return new PPEDistributionRegisterResource($hsePPEDistributionRegister);
    }

    
    public function show(HsePPEDistributionRegister $hsePPEDistributionRegister)
    {
        return PPEDistributionRegisterResource::make($hsePPEDistributionRegister);
        
    }

    public function update(UpdatePPEDistributionRegisterRequest $request, HsePPEDistributionRegister $hsePPEDistributionRegister)
    {
        $imageUrls = [];
       
        if ($request->hasFile('receiver_signature')) {
            foreach ($request->file('receiver_signature') as $image) {
                $path = $image->store('receiver_signature', 'public');
                $imageUrls[] = Storage::url($path);
            }
        }
        
        $validatedData = $request->validated();
        
       
        if (!empty($imageUrls)) {
            $validatedData['receiver_signature'] = $imageUrls;
        }
       
        $hsePPEDistributionRegister->update($validatedData);
        
        return PPEDistributionRegisterResource::make($hsePPEDistributionRegister);
    }

    
    public function destroy(HsePPEDistributionRegister $hsePPEDistributionRegister)
    {
        $hsePPEDistributionRegister->delete();
        $hsePPEDistributionRegister = PPEDistributionRegisterResource::collection(HsePPEDistributionRegister::all());
        $totalCount = $hsePPEDistributionRegister->count();

        return response()->json([
            'data' => $hsePPEDistributionRegister,
            'total_count' => $totalCount,
        ]);
    }
}
