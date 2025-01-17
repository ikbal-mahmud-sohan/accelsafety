<?php

namespace App\Http\Controllers;

use App\Exports\EmployeeInfoExport;
use App\Http\Requests\StoreEmployeeInfoRequest;
use App\Http\Requests\UpdateEmployeeInfoRequest;
use App\Http\Resources\EmployeeInfo as ResourcesEmployeeInfo;
use App\Imports\EmployeeInfoImport;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;
use Maatwebsite\Excel\Facades\Excel;

class EmployeeInfoController extends Controller
{
    
    public function index(Request $request)
    {
            // Retrieve filters from the request
        $department = $request->input('department');
        $unitName = $request->input('unit_name');

        // Start a query builder for EmployeeInfo
        $query = EmployeeInfo::query();

        // Apply filters if provided
        if ($department) {
            $query->where('department', $department);
        }

        if ($unitName) {
            $query->where('unit_name', $unitName);
        }

        // Execute the query and get the results
        $employee = ResourcesEmployeeInfo::collection($query->get());
        $totalCount = $employee->count();

        return response()->json([
            'data' => $employee,
            'total' => $totalCount,
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
    public function exportExcel()
    {
        // Export the employee data to Excel
        return Excel::download(new EmployeeInfoExport, 'employee_infos.xlsx');
    }
    public function importExcel(Request $request)
    {
        // Validate the incoming file
        $request->validate([
            'file' => 'required|mimes:xlsx,csv'
        ]);

        // Import the Excel data into the database
        Excel::import(new EmployeeInfoImport, $request->file('file'));

        // Return a success response
        return response()->json(['message' => 'Excel data imported successfully']);
    }
}
