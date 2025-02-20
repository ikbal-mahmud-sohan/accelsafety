<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreAccidentRequest;
use App\Http\Requests\UpdateAccidentRequest;
use App\Http\Resources\Accident as ResourcesAccident;
use App\Models\Accident;
use Illuminate\Http\JsonResponse;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Illuminate\Support\Facades\Storage;


class AccidentController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');

        $query = Accident::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($query) use ($search) {
                    $query->where('date', 'like', "%{$search}%")
                        ->orWhere('name', 'like', "%{$search}%")
                        ->orWhere('designation', 'like', "%{$search}%")
                        ->orWhere('supervisor', 'like', "%{$search}%")
                        ->orWhere('department', 'like', "%{$search}%")
                        ->orWhere('type_of_accident', 'like', "%{$search}%")
                        ->orWhere('precise_location', 'like', "%{$search}%")
                        ->orWhere('injury_type', 'like', "%{$search}%")
                        ->orWhere('affected_body_parts', 'like', "%{$search}%")
                        ->orWhere('root_cause', 'like', "%{$search}%")
                        ->orWhere('action', 'like', "%{$search}%")
                        ->orWhere('days_lost', 'like', "%{$search}%")
                        ->orWhere('type_of_victim_employee', 'like', "%{$search}%")
                        ->orWhere('responsible_name', 'like', "%{$search}%")
                        ->orWhere('status', 'like', "%{$search}%")
                        ->orWhere('site_name', 'like', "%{$search}%")
                        ->orWhere('immidiate_cause', 'like', "%{$search}%")
                        ->orWhere('incident_location', 'like', "%{$search}%")
                        ->orWhere('investigation_lead', 'like', "%{$search}%");
                });
            });

        $totalCount = $query->count(); // Count after applying search
        $accidents = $query->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        $accidentCollection = ResourcesAccident::collection($accidents);

        return response()->json([
            'data' => $accidentCollection,
            'total_count' => $totalCount,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'last_page' => ceil($totalCount / $perPage),
        ]);
    }


    public function store(StoreAccidentRequest $request)
    {
        $validatedData = $request->validated();
        $validatedData['property_damaged'] = filter_var($validatedData['property_damaged'], FILTER_VALIDATE_BOOLEAN);
        $validatedData['is_required'] = filter_var($validatedData['is_required'], FILTER_VALIDATE_BOOLEAN);
        $imageUrls = [];
        if ($request->hasFile('attachment')) {
            foreach ($request->file('attachment') as $image) {
                $path = $image->store('attachment', 'public');
                $imageUrls[] = Storage::url($path);
            }

            // Assign the uploaded image URLs to validatedData
            $validatedData['attachment'] = $imageUrls;
        }

        $validatedData['status'] = $validatedData['is_required'] ? Accident::STATUS_OPEN : Accident::STATUS_CLOSED;

        $accident = Accident::create($validatedData);
        return ResourcesAccident::make($accident);
    }

    public function show(Accident $accident)
    {
        return ResourcesAccident::make($accident);
    }


    public function update(UpdateAccidentRequest $request, Accident $accident)
    {
    $validatedData = $request->validated();
    $imageUrls = [];
    if ($request->hasFile('verified_image')) {
        foreach ($request->file('verified_image') as $image) {
            $path = $image->store('verified_image', 'public');
            $imageUrls[] = Storage::url($path);
        }

        // Assign the uploaded image URLs to validatedData
        $validatedData['verified_image'] = $imageUrls;
    }

    if ($accident->update($validatedData)) {
        $accident->status = Accident::STATUS_CLOSED;
        $accident->save();
    }

    return ResourcesAccident::make($accident);


    }


    public function destroy(Accident $accident)
    {
        $accident->delete();
        $accident = ResourcesAccident::collection(accident::all());
        $totalCount = $accident->count();

        return response()->json([
            'data' => $accident,
            'total_count' => $totalCount,
        ]);
    }
}

