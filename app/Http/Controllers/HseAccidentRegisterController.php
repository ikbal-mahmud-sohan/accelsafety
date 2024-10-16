<?php

namespace App\Http\Controllers;

use App\Http\Resources\HseAccidentRegisterResource;
use App\Models\HseAccidentRegister;
use Illuminate\Http\Request;

class HseAccidentRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseAccidentRegister = HseAccidentRegisterResource::collection(HseAccidentRegister::all());
        $totalCount = $hseAccidentRegister->count();
        return response()->json([
            'data' => $hseAccidentRegister,
            'total_count' => $totalCount,
        ]);
    }

    
    public function store(Request $request)
    {
        $$hseAccidentRegister = HseAccidentRegister::create($request->validated());
        return new HseAccidentRegisterResource($$hseAccidentRegister);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseAccidentRegister $hseAccidentRegister)
    {
        return HseAccidentRegisterResource::make($$hseAccidentRegister);
        
    }

    public function update(Request $request, HseAccidentRegister $hseAccidentRegister)
    {
        $$hseAccidentRegister->update($request->validated());
        return new HseAccidentRegisterResource($$hseAccidentRegister);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseAccidentRegister $hseAccidentRegister)
    {
        $$hseAccidentRegister->delete();
        $$hseAccidentRegister = HseAccidentRegisterResource::collection(HseAccidentRegister::all());
        $totalCount = $$hseAccidentRegister->count();

        return response()->json([
            'data' => $$hseAccidentRegister,
            'total_count' => $totalCount,
        ]);
    }
}
