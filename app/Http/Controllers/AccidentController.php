<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentRequest;
use App\Http\Requests\UpdateAccidentRequest;
use App\Http\Resources\Accident as ResourcesAccident;
use App\Models\Accident;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;

class AccidentController extends Controller
{
  
    public function index()
    {
        $accident = ResourcesAccident::collection(Accident::all());
        $totalCount = $accident->count();
        return response()->json([
            'data' => $accident,
            'total_count' => $totalCount,
        ]);

    }

    public function store(StoreAccidentRequest $request)
    {
        
        $accident = Accident::create($request->validated());
        return ResourcesAccident::make($accident);
    }

    public function show(Accident $accident)
    {
        return ResourcesAccident::make($accident);
    }

    
    public function update(UpdateAccidentRequest $request, Accident $accident)
    {
        $accident->update($request->validated());
       return  ResourcesAccident::make($accident);
    }

   
    public function destroy(Accident $accident)
    {
        $accident->delete();
        return response()->noContent();
    }
}
