<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseIncidentRegisterRequest;
use App\Http\Requests\UpdateHseIncidentRegisterRequest;
use App\Http\Resources\HseIncidentRegisterResource;
use App\Models\HseIncidentRegister;
use Illuminate\Http\Request;

class HseIncidentRegisterController extends Controller
{

    public function index()
    {
        $hseIncidentRegister = HseIncidentRegisterResource::collection(HseIncidentRegister::all());
        $totalCount = $hseIncidentRegister->count();
        return response()->json([
            'data' => $hseIncidentRegister,
            'total_count' => $totalCount,
        ]);
    }

    
    public function store(StoreHseIncidentRegisterRequest $request)
    {
        $$hseIncidentRegister = HseIncidentRegister::create($request->validated());
        return new HseIncidentRegisterResource($$hseIncidentRegister);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseIncidentRegister $hseIncidentRegister)
    {
        return HseIncidentRegisterResource::make($$hseIncidentRegister);
        
    }

    public function update(UpdateHseIncidentRegisterRequest $request, HseIncidentRegister $hseIncidentRegister)
    {
        $$hseIncidentRegister->update($request->validated());
        return new HseIncidentRegisterResource($$hseIncidentRegister);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseIncidentRegister $hseIncidentRegister)
    {
        $$hseIncidentRegister->delete();
        $$hseIncidentRegister = HseIncidentRegisterResource::collection(HseIncidentRegister::all());
        $totalCount = $$hseIncidentRegister->count();

        return response()->json([
            'data' => $$hseIncidentRegister,
            'total_count' => $totalCount,
        ]);
    }
}
