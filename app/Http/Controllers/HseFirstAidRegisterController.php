<?php

namespace App\Http\Controllers;

use App\Http\Resources\HseFirstAidRegisterResource;
use App\Models\HseFirstAidRegister;
use Illuminate\Http\Request;

class HseFirstAidRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseFirstAidRegister = HseFirstAidRegisterResource::collection(HseFirstAidRegister::all());
        $total = $hseFirstAidRegister->count();
        return response()->json([
            'data' => $hseFirstAidRegister,
            'total' => $total
        ]);
    }

    public function store(Request $request)
    {
        $hseFirstAidRegister = HseFirstAidRegister::create($request->validated());
        return new HseFirstAidRegisterResource($hseFirstAidRegister);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseFirstAidRegister $hseFirstAidRegister)
    {
        return HseFirstAidRegisterResource::make($hseFirstAidRegister);
        
    }

    public function update(Request $request, HseFirstAidRegister $hseFirstAidRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseFirstAidRegister $hseFirstAidRegister)
    {
        $hseFirstAidRegister->delete();
        $hseFirstAidRegister = HseFirstAidRegisterResource::collection(HseFirstAidRegister::all());
        $total = $hseFirstAidRegister->count();
        return response()->json([
            'data' => $hseFirstAidRegister,
            'total' => $total
        ]);
    }
}
