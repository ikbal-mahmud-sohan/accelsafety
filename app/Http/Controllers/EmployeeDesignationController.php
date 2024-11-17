<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDesignationRequest;
use App\Http\Requests\UpdateDesignationRequest;
use App\Http\Resources\DesignationResource;
use App\Models\EmployeeDesignation;
use Illuminate\Http\Request;

class EmployeeDesignationController extends Controller
{
   
    public function index()
    {
        $designation = DesignationResource::collection(EmployeeDesignation::all());
        $totlCount = $designation->count();
        return response()->json([
            'data' => $designation,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreDesignationRequest $request)
    {
        $designation = EmployeeDesignation::create($request->validated());
        return DesignationResource::make($designation);
    }

    public function show(EmployeeDesignation $employee_designation)
    {
        return DesignationResource::make($employee_designation);
    }

    public function update(UpdateDesignationRequest $request, EmployeeDesignation $employee_designation)
    {
        $validatedData = $request->validated();
         $employee_designation->update($validatedData);
         return DesignationResource::make($employee_designation);
    }

    public function destroy(EmployeeDesignation $employee_designation)
    {
        $employee_designation->delete();
        $designation = DesignationResource::collection(EmployeeDesignation::all());
        $totalCount = $designation->count();

        return response()->json([
            'data' => $designation,
            'total_count' => $totalCount,
        ]);
    }
}
