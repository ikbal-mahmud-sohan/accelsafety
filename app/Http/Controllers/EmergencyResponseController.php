<?php

namespace App\Http\Controllers;

use App\Models\EmergencyResponse;
use http\Env\Response;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class EmergencyResponseController extends Controller
{
    function index()
    {
        $data = EmergencyResponse::all();

        return response()->json($data);

    }


    public function store(Request $request){
        $validatedData= $request->validate([
            'type' => 'required|string',
            'name'=>'required|string',
            'designation'=>'nullable|string',
            'phone'=>'nullable|numeric',
            'image'=>'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);
        $previous_data=EmergencyResponse::where('type',$request->type)->first();
        if ($previous_data && ($request->type == 'site_main_controller' || $request->type == 'site_incident_controller')) {
            return response()->json([
                'message'=> $request->type.' already exists',
            ]);
        }else{
            if ($request->hasFile('image')) {
                    $path = $request->image->store('emergency_response_team', 'public');
                $validatedData['image'] = Storage::url($path);
            }
            $data=EmergencyResponse::create($validatedData);
            return response()->json([
                'message'=>'Data has been saved',
                'data'=>$data
            ],201);
        }

    }

    public function show($id){
        $data=EmergencyResponse::find($id);
        if ($data){
            return response()->json([
                'data'=>$data
            ]);
        } else{
            return response()->json([
                'message' => 'Data not found!',
            ]);
        }
    }

    public function showByType(Request $request){
        $data=EmergencyResponse::where('type',$request->type)->get();
        if ($data){
            return response()->json([
                'data'=>$data
            ]);
        } else{
            return response()->json([
                'message' => 'Data not found!',
            ]);
        }
    }

    public function edit($id)
    {
        $data=EmergencyResponse::find($id);
        if ($data){
            return response()->json([
                'data'=>$data
            ]);
        } else{
            return response()->json([
                'message' => 'Data not found!',
            ]);
        }
    }

    public function update(Request $request, $id)
    {
        $validatedData = $request->validate([
            'type' => 'required|string',
            'name' => 'required|string',
            'designation' => 'nullable|string',
            'phone' => 'nullable|numeric',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $data = EmergencyResponse::find($id);

        if (!$data) {
            return response()->json([
                'message' => 'Data not found',
            ], 404);
        }

        // Check if the same type already exists and prevent duplication
        $existingData = EmergencyResponse::where('type', $request->type)
            ->where('id', '!=', $id)
            ->first();

        if ($existingData && ($request->type == 'site_main_controller' || $request->type == 'site_incident_controller')) {
            return response()->json([
                'message' => $request->type . ' already exists',
            ], 422);
        }

        // Handle Image Upload
        if ($request->hasFile('image')) {
            // Delete old image if exists
            if ($data->image) {
                $oldImagePath = str_replace('/storage/', '', $data->image);
                Storage::disk('public')->delete($oldImagePath);
            }

            // Store new image
            $path = $request->image->store('emergency_response_team', 'public');
            $validatedData['image'] = Storage::url($path);
        }

        // Update the record
        $data->update($validatedData);

        return response()->json([
            'message' => 'Data has been updated',
            'data' => $data
        ], 200);
    }

    public function destroy($id){
        $data=EmergencyResponse::find($id);
        if ($data){
            $data->delete();
            return response()->json([
                'message'=>'Data has been deleted'
            ]);
        } else{
            return response()->json([
                'message' => 'Data not found!',
            ]);
        }
    }

}
