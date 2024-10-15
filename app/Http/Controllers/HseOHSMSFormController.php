<?php

namespace App\Http\Controllers;

use App\Http\Resources\HseOHSMSFormResource;
use App\Models\HseOHSMSForm;
use Illuminate\Http\Request;

class HseOHSMSFormController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseOHSMSForm = HseOHSMSFormResource::collection(HseOHSMSForm::all());
        $total = $hseOHSMSForm->count();
        return response()->json([
            'data' => $hseOHSMSForm,
            'total' => $total
        ]);
    }

    public function store(Request $request)
    {
        $hseOHSMSForm = HseOHSMSForm::create($request->validated());
        return new HseOHSMSFormResource($hseOHSMSForm);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseOHSMSForm $hseOHSMSForm)
    {
        return HseOHSMSFormResource::make($hseOHSMSForm);
        
    }

    
    public function update(Request $request, HseOHSMSForm $hseOHSMSForm)
    {
        $validatedData = $request->validated();
        $hseOHSMSForm->update($validatedData);
        $hseOHSMSForm->save();
        return HseOHSMSFormResource::make($hseOHSMSForm);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseOHSMSForm $hseOHSMSForm)
    {
        $hseOHSMSForm->delete();
        $hseOHSMSForm = HseOHSMSFormResource::collection(HseOHSMSForm::all());
        $total = $hseOHSMSForm->count();
        return response()->json([
            'data' => $hseOHSMSForm,
            'total' => $total
        ]);
    }
}
