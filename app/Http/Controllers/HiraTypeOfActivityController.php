<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraTypeOfActivityRequest;
use App\Http\Resources\HiraTypeOfActivityResource;
use App\Models\HiraTypeOfActivity;
use Illuminate\Http\Request;

class HiraTypeOfActivityController extends Controller
{
   
    public function index()
    {
        $hiraTypeOfActivity = HiraTypeOfActivityResource::collection(HiraTypeOfActivity::all());
        $totacount = $hiraTypeOfActivity->count();
        return response()->json([
            'data' => $hiraTypeOfActivity,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraTypeOfActivityRequest $request)
    {
        $hiraTypeOfActivity = HiraTypeOfActivity::create($request->validated());
        return HiraTypeOfActivityResource::make($hiraTypeOfActivity);
    }

    
    public function destroy(HiraTypeOfActivity $hiraTypeOfActivity)
    {
        $hiraTypeOfActivity->delete();
        $hiraTypeOfActivity = HiraTypeOfActivityResource::collection(HiraTypeOfActivity::all());
        $totacount = $hiraTypeOfActivity->count();
        return response()->json([
            'data' => $hiraTypeOfActivity,
            'total' => $totacount,
        ]);
    }
}
