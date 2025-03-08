<?php

namespace App\Http\Controllers;

use App\Models\Ems;
use App\Models\SiteInfoPermit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class EmsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {

        $data = Ems::all();
        return response([
            'data' => $data
        ]);

    }

    public function create()
    {

    }

    public function show(Request $request)
    {

        $data = Ems::where('key', $request->key)->first();
            return response([
                'key' => $request->key,
                'data' => $data
            ]);
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
        $ems = Ems::where('key', $validatedData['key'])->first();
        $existingValue = $ems ? $ems->value : [];

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
        $ems = Ems::updateOrCreate(
            ['key' => $validatedData['key']],  // Search by key
            ['value' => $valueData] // Store as JSON
        );

        return response()->json([
            'message' => 'Data Saved successfully!',
            'data' => $ems,
        ], 201);
    }

    public function destroy($id)
    {
        $ems = Ems::find($id);
        if ($ems){
            $ems->delete();
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
