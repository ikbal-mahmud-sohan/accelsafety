<?php

namespace App\Http\Controllers;

use App\Models\SiteInfoPermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class SiteInfoPermitController extends Controller
{
    //
    public function index(Request $request)
    {

        $data = SiteInfoPermit::where('key', $request->key)->get();
        if ($request->key == 'sitecountry') {
            $countries = getAllCountries();
            return response([
                'key' => $request->key,
                'countries' => $countries,
                'data' => $data
            ]);
        } else {
            return response([
                'key' => $request->key,
                'data' => $data
            ]);
        }

    }

    public function create()
    {
        $countries = getAllCountries();
        return response([
            $countries
        ]);
    }


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'key' => 'required|string',
            'value' => 'required|array',
            'value.file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'value.facility_types' => 'nullable|array',
            'value.product_categories' => 'nullable|array',
            'value.rubbers' => 'nullable|array',
            'value.synthetic_leathers' => 'nullable|array',
            'value.facility_material_process_rubbers' => 'nullable|array',

        ]);

        $valueData = $request->value;

        // Handle File Upload (If file exists)
        if ($request->hasFile('value.file')) {
            $file = $request->file('value.file');
            $path = $file->store('attachments', 'public');
            $valueData['file'] = Storage::url($path);
        }

        // Store in database
      $sitePermit=  SiteInfoPermit::create([
            'key' => $validatedData['key'],
            'value' => $valueData,
        ]);

        return response()->json([
            'message' => 'Data saved successfully!',
            'data' => $sitePermit,
        ], 201);


    }
}
