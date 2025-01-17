<?php

namespace App\Imports;

use App\Models\EmployeeInfo;
use Maatwebsite\Excel\Concerns\ToModel;
use Maatwebsite\Excel\Concerns\WithHeadingRow;

class EmployeeInfoImport implements ToModel, WithHeadingRow
{
    /**
    * @param array $row
    *
    * @return \Illuminate\Database\Eloquent\Model|null
    */
    public function model(array $row)
    {
        return new EmployeeInfo([
            'name'          => $row['name'],
            'emp_id'        => $row['employee_id'],
            'emp_email'     => $row['employee_email'],
            'first_name'    => $row['first_name'],
            'last_name'     => $row['last_name'],
            'unit_name'     => $row['unit_name'],
            'location'      => $row['location'],
            'designation'   => $row['designation'],
            'department'    => $row['department'],
            'employee_type' => $row['employee_type'],
        ]);
    }
}
