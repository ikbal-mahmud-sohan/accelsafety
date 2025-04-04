<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedAccidentInvestigationRequest;
use App\Http\Requests\StoreAccidentInvestigationRequest;
use App\Http\Requests\UpdateAccidentInvestigationRequest;
use App\Http\Resources\AccidentInvestigationResource;
use App\Mail\AccidentInvestigationNotification;
use App\Models\Accident;
use App\Models\AccidentInvestigation;
use App\Models\EmployeeInfo;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Schema;

class AccidentInvestigationController extends Controller
{
    /**
     * Display a listing of the resource.
     */


    public function index(Request $request)
    {
        $perPage = $request->get('per_page', 10);
        $currentPage = $request->get('current_page', 1);
        $search = $request->get('search', '');
        $sortBy = $request->get('order_by', 'id'); // Default sort by 'id'
        $sortOrder = $request->get('sort_by', 'asc'); // Default ascending

        // Base query with eager loading
        $query = AccidentInvestigation::query()->with('employee');

        // 🔍 Apply search to all columns dynamically
        if (!empty($search)) {
            // Get all column names from the table
            $columns = Schema::getColumnListing((new AccidentInvestigation())->getTable());

            $query->where(function ($q) use ($columns, $search) {
                foreach ($columns as $column) {
                    $q->orWhere($column, 'LIKE', "%$search%");
                }
            });

            // Search in related `employee` model's `name` field
            $query->orWhereHas('employee', fn($q) => $q->where('name', 'LIKE', "%$search%"));
        }

        // ✅ Sorting (only for valid columns)
        $validSortFields = Schema::getColumnListing((new AccidentInvestigation())->getTable());
        if (in_array($sortBy, $validSortFields)) {
            $query->orderBy($sortBy, $sortOrder);
        }

        // 📄 Pagination
        $total = $query->count();
        $investigations = $query->skip(($currentPage - 1) * $perPage)->take($perPage)->get();

        return response()->json([
            'total' => $total,
            'current_page' => $currentPage,
            'per_page' => $perPage,
            'last_page' => ceil($total / $perPage),
            'data' => $investigations,
        ]);
    }



    public function store(StoreAccidentInvestigationRequest $request)
    {
        $investigationSignPaths = [];

        // Handle file uploads
        for ($i = 1; $i <= 4; $i++) {
            $fieldName = "investigation_sign_$i";
            if ($request->hasFile($fieldName)) {
                $investigationSignPaths[$fieldName] = [];
                foreach ($request->file($fieldName) as $image) {
                    $path = $image->store($fieldName, 'public');
                    $investigationSignPaths[$fieldName][] = Storage::url($path);
                }
            }
        }

        $validatedData = $request->validated();

        // Add file paths to validated data
        for ($i = 1; $i <= 4; $i++) {
            $fieldName = "investigation_sign_$i";
            $validatedData[$fieldName] = $investigationSignPaths[$fieldName] ?? null;
        }

        // Fetch employee emails in bulk
        $names = [];
        for ($i = 1; $i <= 4; $i++) {
            $nameField = "investigation_name_$i";
            if (!empty($validatedData[$nameField])) {
                $names[] = $validatedData[$nameField];
            }
        }

        $employees = EmployeeInfo::whereIn('id', $names)->get()->keyBy('id');
        $emails = [];
        foreach ($names as $name) {
            if (isset($employees[$name]) && $employees[$name]->emp_email) {
                $emails[] = $employees[$name]->emp_email;
            }
        }

        // Create Accident Investigation record
        $accidentInvestigation = AccidentInvestigation::create([
            'accident_id' => $validatedData['accident_id'],
            'investigation_name_1' => $validatedData['investigation_name_1'] ?? null,
            'investigation_designation_1' => $validatedData['investigation_designation_1'] ?? null,
            'investigation_sign_1' => $validatedData['investigation_sign_1'] ?? null,
            'investigation_name_2' => $validatedData['investigation_name_2'] ?? null,
            'investigation_designation_2' => $validatedData['investigation_designation_2'] ?? null,
            'investigation_sign_2' => $validatedData['investigation_sign_2'] ?? null,
            'investigation_name_3' => $validatedData['investigation_name_3'] ?? null,
            'investigation_designation_3' => $validatedData['investigation_designation_3'] ?? null,
            'investigation_sign_3' => $validatedData['investigation_sign_3'] ?? null,
            'investigation_name_4' => $validatedData['investigation_name_4'] ?? null,
            'investigation_designation_4' => $validatedData['investigation_designation_4'] ?? null,
            'investigation_sign_4' => $validatedData['investigation_sign_4'] ?? null,
            'status' => AccidentInvestigation::STATUS_ASSIGNED,
        ]);

        // Add the investigation ID to the validated data for the email
        $validatedData['investigation_id'] = $accidentInvestigation->id;

        $frontendUrl = env('FRONTEND_URL');
        $url = "{$frontendUrl}/accident-investigation/{$accidentInvestigation->id}/update";

        // Send emails with the investigation ID

        foreach ($emails as $email) {
            Mail::to($email)->send(new AccidentInvestigationNotification(['url' => $url]));
        }

        return new AccidentInvestigationResource($accidentInvestigation);
    }

    /**
     * Display the specified resource.
     */
    public function show(AccidentInvestigation $accidentInvestigation)
    {
        return AccidentInvestigationResource::make($accidentInvestigation);

    }

    /**
     * Show the form for editing the specified resource.
     */
    public function approved(ApprovedAccidentInvestigationRequest $request, AccidentInvestigation $accidentInvestigation)
    {
        // Update the status in the Accident Investigation table
        $accidentInvestigation->update([
            'status' => $request->status, // Update to the status provided in the request
        ]);

        // Retrieve the associated accident ID
        $accidentId = $accidentInvestigation->accident_id;

        // Conditionally update the Accident table status based on Accident Investigation status
        if ($request->status === AccidentInvestigation::STATUS_APPROVED) {
            Accident::where('id', $accidentId)->update([
                'status' => Accident::STATUS_CLOSED,
            ]);
        }

        // Return the updated Accident Investigation data
        return new AccidentInvestigationResource($accidentInvestigation);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateAccidentInvestigationRequest $request, AccidentInvestigation $accidentInvestigation)
    {
        $validatedData = $request->validated();

        if ($request->hasFile('reviewed_by_department_signature')) {
            $paths = [];
            foreach ($request->file('reviewed_by_department_signature') as $image) {
                $path = $image->store('reviewed_by_department_signature', 'public');
                $paths[] = Storage::url($path);
            }
            $validatedData['reviewed_by_department_signature'] = $paths;
        }

        if ($request->hasFile('reviewed_by_unit_signature')) {
            $paths = [];
            foreach ($request->file('reviewed_by_unit_signature') as $image) {
                $path = $image->store('reviewed_by_unit_signature', 'public');
                $paths[] = Storage::url($path);
            }
            $validatedData['reviewed_by_unit_signature'] = $paths;
        }

        if ($request->hasFile('approved_by_signature')) {
            $paths = [];
            foreach ($request->file('approved_by_signature') as $image) {
                $path = $image->store('approved_by_signature', 'public');
                $paths[] = Storage::url($path);
            }
            $validatedData['approved_by_signature'] = $paths;
        }

        $validatedData['status'] = AccidentInvestigation::STATUS_REVIEWED;

        $accidentInvestigation->update($validatedData);

        return new AccidentInvestigationResource($accidentInvestigation);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(AccidentInvestigation $accidentInvestigation)
    {
        $accidentInvestigation->delete();
        $accidentInvestigations = AccidentInvestigation::all();
        $accidentInvestigationData = $accidentInvestigations->map(function ($investigation) {
            // dd($investigation);

            $employee = EmployeeInfo::find($investigation->employee_id);
            $investigation_name_1 = EmployeeInfo::find($investigation->investigation_name_1);
            $investigation_name_2 = EmployeeInfo::find($investigation->investigation_name_2);
            $investigation_name_3 = EmployeeInfo::find($investigation->investigation_name_3);
            $investigation_name_4 = EmployeeInfo::find($investigation->investigation_name_4);

            $investigationData = new AccidentInvestigationResource($investigation);
            $investigationData['employee_name'] = $employee ? $employee->name : null;
            $investigationData['name_1'] = $investigation_name_1 ? $investigation_name_1->name : null;
            $investigationData['name_2'] = $investigation_name_2 ? $investigation_name_2->name : null;
            $investigationData['name_3'] = $investigation_name_3 ? $investigation_name_3->name : null;
            $investigationData['name_4'] = $investigation_name_4 ? $investigation_name_4->name : null;

            return $investigationData;
        });

        $totalCount = $accidentInvestigationData->count();

        return response()->json([
            'data' => $accidentInvestigationData,
            'total_count' => $totalCount,
        ]);
    }
}
