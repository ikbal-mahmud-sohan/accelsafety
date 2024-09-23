<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraActivityRequest;
use App\Http\Resources\HiraActivityResource;
use App\Models\HiraActivity;
use Illuminate\Http\Request;

class HiraActivityController extends Controller
{
    
    public function index()
    {
        $hiraActivity = HiraActivityResource::collection(HiraActivity::orderBy('id', 'desc')->get());
        $totacount = $hiraActivity->count();
        return response()->json([
            'data' => $hiraActivity,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraActivityRequest $request)
    {
        $hiraActivity = HiraActivity::create($request->validated());
        HiraActivityResource::make($hiraActivity);
        $hiraActivity = HiraActivityResource::collection(HiraActivity::orderBy('id', 'desc')->get());
        $totacount = $hiraActivity->count();
        return response()->json([
            'data' => $hiraActivity,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraActivity $hiraActivity)
    {
        $hiraActivity->delete();
        $hiraActivity = HiraActivityResource::collection(HiraActivity::orderBy('id', 'desc')->get());
        $totacount = $hiraActivity->count();
        return response()->json([
            'data' => $hiraActivity,
            'total' => $totacount,
        ]);
    }
}
