<?php

namespace App\Http\Controllers;

use App\Models\Assessment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class AssessmentController extends Controller
{
    public function index(Request $request)
    {

        $data = Assessment::all();
        $countries = getAllCountries();
        return response([
            'data' => $data,
            'countries' => $countries,
        ]);

    }

    public function create()
    {
        $countries = getAllCountries();
        return response([
           'countries'=> $countries
        ]);
    }

    public function show(Request $request)
    {

        $data = Assessment::where('key', $request->key)->first();
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


    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'key' => 'required|string',
            'value' => 'required|array',
            'value.file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
            'value.*.file' => 'nullable|file|mimes:jpg,png,pdf|max:2048',
        ]);

        // Fetch existing record
        $existingAssessment = Assessment::where('key', $validatedData['key'])->first();
        $existingValue = $existingAssessment ? $existingAssessment->value : [];

        $valueData = $request->value;

        // Process all uploaded files, delete old files if new ones exist
        array_walk_recursive($valueData, function (&$item, $key) use ($existingValue) {
            if ($key === 'file') {
                if ($item instanceof \Illuminate\Http\UploadedFile) {
                    //Delete previous file if a new file is uploaded
                    $oldFilePath = data_get($existingValue, $key);
                    if ($oldFilePath) {
                        Storage::disk('public')->delete(str_replace('/storage/', '', $oldFilePath));
                    }

                    //Upload new file & store URL
                    $item = Storage::url($item->store('attachments', 'public'));
                } else {
                    $item = data_get($existingValue, $key, $item);
                }
            }
        });

        // Save updated data in database
        $assessment = Assessment::updateOrCreate(
            ['key' => $validatedData['key']],  // Search by key
            ['value' => $valueData] // Store as JSON
        );

        return response()->json([
            'message' => 'Data Saved successfully!',
            'data' => $assessment,
        ], 201);
    }

    public function destroy($id)
    {
        $assessment = Assessment::find($id);
        if ($assessment){
            $assessment->delete();
            return response()->json([
                'message' => 'Data Deleted successfully!',
            ]);
        } else{
            return response()->json([
                'message' => 'Data not found!',
            ]);
        }
    }
}
