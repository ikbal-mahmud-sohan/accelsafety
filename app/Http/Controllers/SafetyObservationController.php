<?php

namespace App\Http\Controllers;

use App\Http\Requests\SafetyObservationRequest;
use App\Http\Requests\UpdateSafetyObservationRequest;
use App\Http\Resources\SafetyObservation as ResourcesSafetyObservation;
use App\Models\SafetyObservation;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;
use PhpParser\Node\Stmt\Return_;
use Illuminate\Support\Facades\Log;

class SafetyObservationController extends Controller
{

    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10); // Default 10 items per page
        $currentPage = $request->get('current_page', 1); // Default page 1
        $search = $request->get('search', ''); // Search query

        // Base query with optional search filters
        $query = SafetyObservation::query()
            ->when($search, function ($q) use ($search) {
                $q->where(function ($query) use ($search) {
                    $query->where('auditor', 'like', "%{$search}%")
                        ->orWhere('plant_name', 'like', "%{$search}%")
                        ->orWhere('location', 'like', "%{$search}%")
                        ->orWhere('audit_date', 'like', "%{$search}%")
                        ->orWhere('category', 'like', "%{$search}%")
                        ->orWhere('problem_description', 'like', "%{$search}%")
                        ->orWhere('root_cause', 'like', "%{$search}%")
                        ->orWhere('resp_department', 'like', "%{$search}%")
                        ->orWhere('owner_department', 'like', "%{$search}%")
                        ->orWhere('improvement_actions', 'like', "%{$search}%")
                        ->orWhere('due_date', 'like', "%{$search}%")
                        ->orWhere('status', 'like', "%{$search}%")
                        ->orWhere('priority_type', 'like', "%{$search}%")
                        ->orWhere('remarks', 'like', "%{$search}%")
                        ->orWhere('importance_level', 'like', "%{$search}%")
                        ->orWhere('work_accomplished_by', 'like', "%{$search}%");
                });
            });

        // Get total records after search
        $totalCount = $query->count();

        // Paginate results
        $observations = $query->skip(($currentPage - 1) * $perPage)
            ->take($perPage)
            ->get();

        // Transform data with resource collection
        $safetyObservation = ResourcesSafetyObservation::collection($observations);

        return response()->json([
            'data' => $safetyObservation,
            'total_count' => $totalCount,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'last_page' => ceil($totalCount / $perPage),
        ]);
    }


    public function store(SafetyObservationRequest $request)
    {
    $imageUrls = [];
    if ($request->hasFile('problematic_progressive_images')) {
        foreach ($request->file('problematic_progressive_images') as $image) {
            $path = $image->store('problematic_progressive_images', 'public');
            $imageUrls[] = Storage::url($path);
        }
    }

    $validatedData = $request->validated();
    $validatedData['problematic_progressive_images'] = $imageUrls;

    // Create a new SafetyObservation record with the validated data
    $safetyObservation = SafetyObservation::create($validatedData);

    // Return the newly created record using a resource
    return ResourcesSafetyObservation::make($safetyObservation);

    }

    public function show(SafetyObservation $safetyObservation)
    {
        return ResourcesSafetyObservation::make($safetyObservation);
    }

    public function update( UpdateSafetyObservationRequest $request, SafetyObservation $safetyObservation)
    {
        $validatedData = $request->validated();

        $imageUrls = [];
        if ($request->hasFile('corrective_image')) {
            foreach ($request->file('corrective_image') as $image) {
                $path = $image->store('corrective_image', 'public');
                $imageUrls[] = Storage::url($path);
            }
            // Assign the uploaded image URLs to validatedData
            $validatedData['corrective_image'] = $imageUrls;
        }

        if ($safetyObservation->update($validatedData)) {
            $safetyObservation->status = 'pending';
            $safetyObservation->save();
        }

        return ResourcesSafetyObservation::make($safetyObservation);

    }

    public function destroy(SafetyObservation $safetyObservation)
    {
        $safetyObservation->delete();
        $safetyObservation = ResourcesSafetyObservation::collection(SafetyObservation::all());
        $totalCount = $safetyObservation->count();

        return response()->json([
            'data' => $safetyObservation,
            'total_count' => $totalCount,
        ]);

    }

        public function adminstore(Request $request, SafetyObservation $safetyObservation)
            {
                Log::info('Incoming request data:', $request->all());

                if ($safetyObservation->update($request->all())) {
                    $safetyObservation->status = 'closed';
                    $safetyObservation->save();
                }

                // Return the updated safety observation as a resource
                return new ResourcesSafetyObservation($safetyObservation);
            }
}


