<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseWorkatHeightRequest;
use App\Http\Requests\UpdateHseWorkatHeightRequest;
use App\Http\Resources\HseWorkatHeightResource;
use App\Models\HseWorkatHeight;
use Illuminate\Http\Request;

class HseWorkatHeightController extends Controller
{
   
    public function index()
    {
        $hseWorkatHeight = HseWorkatHeightResource::collection(HseWorkatHeight::all());
        $total = $hseWorkatHeight->count();
        return response()->json([
            'data' => $hseWorkatHeight,
            'total' => $total
        ]);
    }

    public function store(StoreHseWorkatHeightRequest $request)
    {
        $hseWorkatHeight = HseWorkatHeight::create($request->validated());

        return HseWorkatHeightResource::make($hseWorkatHeight);
    }

    public function show(HseWorkatHeight $hseWorkatHeight)
    {
        return HseWorkatHeightResource::make($hseWorkatHeight);
        
    }

    public function update(UpdateHseWorkatHeightRequest $request, HseWorkatHeight $hseWorkatHeight)
    {
        $hseWorkatHeight->update($request->validated());
        return HseWorkatHeightResource::make($hseWorkatHeight);
    }

    public function destroy(HseWorkatHeight $hseWorkatHeight)
    {
        $hseWorkatHeight->delete();
        $hseWorkatHeight = HseWorkatHeightResource::collection(HseWorkatHeight::all());
        $total = $hseWorkatHeight->count();
        return response()->json([
            'data' => $hseWorkatHeight,
            'total' => $total
        ]);
    }
}
