<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseMasterListLiftingEquipmentsRequest;
use App\Http\Requests\UpdateHseMasterListLiftingEquipmentsRequest;
use App\Http\Resources\HseMasterListLiftingEquipmentsResource;
use App\Models\HseMasterListLiftingEquipments;
use Illuminate\Http\Request;

class HseMasterListLiftingEquipmentsController extends Controller
{
    
    public function index()
    {
        $hseMasterListLiftingEquipments = HseMasterListLiftingEquipmentsResource::collection(HseMasterListLiftingEquipments::all());
        $total = $hseMasterListLiftingEquipments->count();
        return response()->json([
            'data' => $hseMasterListLiftingEquipments,
            'total' => $total
        ]);
    }

    public function store(StoreHseMasterListLiftingEquipmentsRequest $request)
    {
        $hseMasterListLiftingEquipments = HseMasterListLiftingEquipments::create($request->validated());

        return HseMasterListLiftingEquipmentsResource::make($hseMasterListLiftingEquipments);
    }

    public function show(HseMasterListLiftingEquipments $hseMasterListLiftingEquipments)
    {
        return HseMasterListLiftingEquipmentsResource::make($hseMasterListLiftingEquipments);
    }

    public function update(UpdateHseMasterListLiftingEquipmentsRequest $request, HseMasterListLiftingEquipments $hseMasterListLiftingEquipments)
    {
        if ($hseMasterListLiftingEquipments->update($request->validated())) {
            $hseMasterListLiftingEquipments->updated_by = $request->updated_by;
            $hseMasterListLiftingEquipments->status = 1;
            $hseMasterListLiftingEquipments->save();
        }
    
        return HseMasterListLiftingEquipmentsResource::make($hseMasterListLiftingEquipments);
    }

    public function destroy(HseMasterListLiftingEquipments $hseMasterListLiftingEquipments)
    {
        $hseMasterListLiftingEquipments->delete();
        $hseMasterListLiftingEquipments = HseMasterListLiftingEquipmentsResource::collection(HseMasterListLiftingEquipments::all());
        $total = $hseMasterListLiftingEquipments->count();
        return response()->json([
            'data' => $hseMasterListLiftingEquipments,
            'total' => $total
        ]);
    }
}
