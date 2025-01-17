<?php

namespace App\Exports;

use App\Models\EmployeeInfo;
use Maatwebsite\Excel\Concerns\FromCollection;
use Maatwebsite\Excel\Concerns\WithHeadings;

class EmployeeInfoExport implements FromCollection, WithHeadings
{
    /**
    * @return \Illuminate\Support\Collection
    */
    public function collection()
    {
        return EmployeeInfo::select(
            'name',
            'emp_id',
            'emp_email',
            'first_name',
            'last_name',
            'unit_name',
            'location',
            'designation',
            'department',
            'employee_type'
        )->get();
    }

    /**
     * Define the column headings for the Excel file.
     *
     * @return array
     */
    public function headings(): array
    {
        return [
            'Name',
            'Employee ID',
            'Employee Email',
            'First Name',
            'Last Name',
            'Unit Name',
            'Location',
            'Designation',
            'Department',
            'Employee Type',
        ];
    }
}
