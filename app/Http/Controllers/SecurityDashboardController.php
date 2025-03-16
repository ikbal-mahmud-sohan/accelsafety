<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SecurityDashboardController extends Controller
{
    public function security_incidents(Request $request)
    {
        $security_incidents = [
            ["country_name" => "Australia", "incident_count" => 5, "incident_date" => "2024-03-01"],
            ["country_name" => "Bangladesh", "incident_count" => 10, "incident_date" => "2024-03-15"],
            ["country_name" => "India", "incident_count" => 15, "incident_date" => "2024-03-20"],
            ["country_name" => "Pakistan", "incident_count" => 8, "incident_date" => "2024-03-10"],
            ["country_name" => "Srilanka", "incident_count" => 6, "incident_date" => "2024-03-12"],
            ["country_name" => "Indonesia", "incident_count" => 12, "incident_date" => "2024-03-08"],
            ["country_name" => "Malaysia", "incident_count" => 14, "incident_date" => "2024-03-18"],
            ["country_name" => "Myanmar", "incident_count" => 9, "incident_date" => "2024-03-05"],
            ["country_name" => "Philippines", "incident_count" => 7, "incident_date" => "2024-03-11"],
            ["country_name" => "Singapore", "incident_count" => 11, "incident_date" => "2024-03-22"],
            ["country_name" => "Thailand", "incident_count" => 13, "incident_date" => "2024-03-14"],
            ["country_name" => "Vietnam", "incident_count" => 16, "incident_date" => "2024-03-25"],
            ["country_name" => "New Zealand", "incident_count" => 4, "incident_date" => "2024-03-07"],
        ];

        return response()->json([
            'security_incidents'=>$security_incidents
        ]);
    }

}
