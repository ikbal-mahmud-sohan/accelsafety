<?php

namespace App\Http\Controllers;

use App\Models\NonHazardousWasteInventory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;


class NonHazardousWasteInventoryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
{
    // Fetch the records from the NonHazardousWasteInventory table
    $inventoryRecords = DB::table('non_hazardous_waste_inventories')
        ->selectRaw('month, 
                    SUM(cutting_jhute) as total_cutting_jhute,
                    SUM(sewing_jhut) as total_sewing_jhut,
                    SUM(dying_jhut) as total_dying_jhut,
                    SUM(cut_piece) as total_cut_piece,
                    SUM(short_piece) as total_short_piece,
                    SUM(left_over_fabrics) as total_left_over_fabrics,
                    SUM(cartoon) as total_cartoon,
                    SUM(cone) as total_cone,
                    SUM(ply) as total_ply,
                    SUM(plastic) as total_plastic,
                    SUM(left_over_garments) as total_left_over_garments,
                    SUM(metalic_scrap) as total_metalic_scrap,
                    SUM(loose_sewing_thread) as total_loose_sewing_thread,
                    SUM(wood_material) as total_wood_material,
                    SUM(broken_niddle) as total_broken_niddle,
                    SUM(food_waste) as total_food_waste,
                    SUM(paper) as total_paper')
        ->groupBy('month')
        ->orderByRaw("FIELD(month, 'January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September', 'October', 'November', 'December')")
        ->get();

    // Initialize an empty array to store the final data
    $result = [];

    // Populate data by month
    foreach ($inventoryRecords as $record) {
        $month = $record->month;

        // Ensure the month exists in the result
        if (!isset($result[$month])) {
            $result[$month] = [
                'Month' => $month,
                'Cutting Jhute' => 0,
                'Sewing Jhut' => 0,
                'Dying Jhut' => 0,
                'Cut Piece' => 0,
                'Short Piece' => 0,
                'Left Over Fabrics' => 0,
                'Cartoon' => 0,
                'Cone' => 0,
                'Ply' => 0,
                'Plastic' => 0,
                'Left Over Garments' => 0,
                'Metallic Scrap' => 0,
                'Loose Sewing Thread' => 0,
                'Wood Material' => 0,
                'Broken Niddle' => 0,
                'Food Waste' => 0,
                'Paper' => 0,
            ];
        }

        // Assign the totals to the correct type
        $result[$month]['Cutting Jhute'] = $record->total_cutting_jhute;
        $result[$month]['Sewing Jhut'] = $record->total_sewing_jhut;
        $result[$month]['Dying Jhut'] = $record->total_dying_jhut;
        $result[$month]['Cut Piece'] = $record->total_cut_piece;
        $result[$month]['Short Piece'] = $record->total_short_piece;
        $result[$month]['Left Over Fabrics'] = $record->total_left_over_fabrics;
        $result[$month]['Cartoon'] = $record->total_cartoon;
        $result[$month]['Cone'] = $record->total_cone;
        $result[$month]['Ply'] = $record->total_ply;
        $result[$month]['Plastic'] = $record->total_plastic;
        $result[$month]['Left Over Garments'] = $record->total_left_over_garments;
        $result[$month]['Metallic Scrap'] = $record->total_metalic_scrap;
        $result[$month]['Loose Sewing Thread'] = $record->total_loose_sewing_thread;
        $result[$month]['Wood Material'] = $record->total_wood_material;
        $result[$month]['Broken Niddle'] = $record->total_broken_niddle;
        $result[$month]['Food Waste'] = $record->total_food_waste;
        $result[$month]['Paper'] = $record->total_paper;
    }

    // Return the final result as a JSON response
    return response()->json(array_values($result));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // Not necessary for API-based resources, can be omitted or return a view for frontend usage
        return response()->json(['message' => 'Form for creating a new resource.']);
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Validate the request data
        $validated = $request->validate([
            'month' => 'required|string',
            'cutting_jhute' => 'nullable|numeric',
            'sewing_jhut' => 'nullable|numeric',
            'dying_jhut' => 'nullable|numeric',
            'cut_piece' => 'nullable|numeric',
            'short_piece' => 'nullable|numeric',
            'left_over_fabrics' => 'nullable|numeric',
            'cartoon' => 'nullable|numeric',
            'cone' => 'nullable|numeric',
            'ply' => 'nullable|numeric',
            'plastic' => 'nullable|numeric',
            'left_over_garments' => 'nullable|numeric',
            'metalic_scrap' => 'nullable|numeric',
            'loose_sewing_thread' => 'nullable|numeric',
            'wood_material' => 'nullable|numeric',
            'broken_niddle' => 'nullable|numeric',
            'food_waste' => 'nullable|numeric',
            'paper' => 'nullable|numeric',
        ]);

        // Create a new record in the NonHazardousWasteInventory table
        $inventory = NonHazardousWasteInventory::create($validated);
        
        // Return the newly created resource
        return response()->json($inventory, 201);
    }

    /**
     * Display the specified resource.
     */
    public function show(NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Return the specific NonHazardousWasteInventory record
        return response()->json($nonHazardousWasteInventory);
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Not necessary for API-based resources, can be omitted or return a view for frontend usage
        return response()->json(['message' => 'Form for editing the resource.']);
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Validate the request data
        $validated = $request->validate([
            'month' => 'required|string',
            'cutting_jhute' => 'nullable|numeric',
            'sewing_jhut' => 'nullable|numeric',
            'dying_jhut' => 'nullable|numeric',
            'cut_piece' => 'nullable|numeric',
            'short_piece' => 'nullable|numeric',
            'left_over_fabrics' => 'nullable|numeric',
            'cartoon' => 'nullable|numeric',
            'cone' => 'nullable|numeric',
            'ply' => 'nullable|numeric',
            'plastic' => 'nullable|numeric',
            'left_over_garments' => 'nullable|numeric',
            'metalic_scrap' => 'nullable|numeric',
            'loose_sewing_thread' => 'nullable|numeric',
            'wood_material' => 'nullable|numeric',
            'broken_niddle' => 'nullable|numeric',
            'food_waste' => 'nullable|numeric',
            'paper' => 'nullable|numeric',
        ]);

        // Update the record
        $nonHazardousWasteInventory->update($validated);

        // Return the updated record
        return response()->json($nonHazardousWasteInventory);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(NonHazardousWasteInventory $nonHazardousWasteInventory)
    {
        // Delete the specific record
        $nonHazardousWasteInventory->delete();

        // Return a success message
        return response()->json(['message' => 'Resource deleted successfully.'], 200);
    }
}
