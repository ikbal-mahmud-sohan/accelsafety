<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreDepartmentRequest;
use App\Http\Requests\UpdateDepartmentRequest;
use App\Http\Resources\DepartmentResource;
use App\Models\EmployeeDepartment;
use Illuminate\Http\Request;

class EmployeeDepartmentController extends Controller
{
    
    public function index()
    {
        $department = DepartmentResource::collection(EmployeeDepartment::all());
        $totlCount = $department->count();
        return response()->json([
            'data' => $department,
            'total' => $totlCount,
        ]); 
    }

    public function store(StoreDepartmentRequest $request)
    {
        $department = EmployeeDepartment::create($request->validated());
        return DepartmentResource::make($department);
    }

   
    public function show(EmployeeDepartment $employee_department)
    {
        return DepartmentResource::make($employee_department);
    }

    public function update(UpdateDepartmentRequest $request, EmployeeDepartment $employee_department)
    {
        $validatedData = $request->validated();
         $employee_department->update($validatedData);
         return DepartmentResource::make($employee_department);
        
    }

    public function destroy(EmployeeDepartment $employee_department)
    {
        $employee_department->delete();
        $department = DepartmentResource::collection(EmployeeDepartment::all());
        $totalCount = $department->count();

        return response()->json([
            'data' => $department,
            'total_count' => $totalCount,
        ]);
    }
}
