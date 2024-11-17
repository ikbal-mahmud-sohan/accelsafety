<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseChemicalRegisterRequest;
use App\Http\Resources\HseChemicalRegisterResource;
use App\Models\HseChemicalRegister;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class HseChemicalRegisterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseChemicalRegister = HseChemicalRegisterResource::collection(HseChemicalRegister::all());
        $total = $hseChemicalRegister->count();
         return response()->json([
             'data' => $hseChemicalRegister,
             'total' => $total,
         ]);
    }

    public function store(StoreHseChemicalRegisterRequest $request)
    {
        $hhazardSymbolsPaths = [];
        if ($request->hasFile('hazard_symbols')) {
            foreach ($request->file('hazard_symbols') as $image) {
                $path = $image->store('hazard_symbols', 'public');
                $hhazardSymbolsPaths[] = Storage::url($path);
            }
        }
        $validatedData = $request->validated();
        $validatedData['hazard_symbols'] = $hhazardSymbolsPaths;
        $hseHarnessChecklist = HseChemicalRegister::create($validatedData);
        return new HseChemicalRegisterResource($hseHarnessChecklist);

    }

    /**
     * Display the specified resource.
     */
    public function show(HseChemicalRegister $hseChemicalRegister)
    {
        return HseChemicalRegisterResource::make($hseChemicalRegister);
    }

    public function update(Request $request, HseChemicalRegister $hseChemicalRegister)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseChemicalRegister $hseChemicalRegister)
    {
        $hseChemicalRegister->delete();
        $hseChemicalRegister = HseChemicalRegisterResource::collection(HseChemicalRegister::all());
        $total = $hseChemicalRegister->count();
         return response()->json([
             'data' => $hseChemicalRegister,
             'total' => $total,
         ]);
    }
}
