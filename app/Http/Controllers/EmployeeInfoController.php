<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreEmployeeInfoRequest;
use App\Http\Requests\UpdateEmployeeInfoRequest;
use App\Http\Resources\EmployeeInfo as ResourcesEmployeeInfo;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;

class EmployeeInfoController extends Controller
{
    
    public function index()
    {
        $employee = ResourcesEmployeeInfo::collection(EmployeeInfo::all());
        $totlCount = $employee->count();
        return response()->json([
            'data' => $employee,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreEmployeeInfoRequest $request)
    {
        $employee = EmployeeInfo::create($request->validated());
        return ResourcesEmployeeInfo::make($employee);
    }

    public function show(EmployeeInfo $employeeInfo)
    {
        return ResourcesEmployeeInfo::make($employeeInfo);
        
    }

    public function update(UpdateEmployeeInfoRequest $request, EmployeeInfo $employeeInfo)
    {
        $validatedData = $request->validated();
         $employeeInfo->update($validatedData);
         return ResourcesEmployeeInfo::make($employeeInfo);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(EmployeeInfo $employeeInfo)
    {
        $employeeInfo->delete();
        $emp = ResourcesEmployeeInfo::collection(EmployeeInfo::all());
        $totalCount = $emp->count();

        return response()->json([
            'data' => $emp,
            'total_count' => $totalCount,
        ]);
    }
}
