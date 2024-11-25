<?php

namespace App\Http\Controllers;

use App\Http\Requests\StorePowerDistributionPanelRequest;
use App\Http\Resources\PowerDistributionPanelResource;
use App\Models\PowerDistributionPanel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;


class PowerDistributionPanelController extends Controller
{
    public function index()
    {
        $powerDistributionPanel = PowerDistributionPanelResource::collection(PowerDistributionPanel::all());
        $total = $powerDistributionPanel->count();
        return response()->json([
            'data' => $powerDistributionPanel,
            'total' => $total
        ]);
    }

    public function store(StorePowerDistributionPanelRequest $request)
    {
        $checkedBySignature = [];
        if ($request->hasFile('checked_by_signature')) {
            foreach ($request->file('checked_by_signature') as $image) {
                $path = $image->store('checked_by_signature', 'public');
                $checkedBySignature[] = Storage::url($path);
            }
        }
        $reviewedSignatureUrls = [];
        if ($request->hasFile('reviewed_by_signature')) {
            foreach ($request->file('reviewed_by_signature') as $image) {
                $path = $image->store('reviewed_by_signature', 'public');
                $reviewedSignatureUrls[] = Storage::url($path);
            }
        }

        $validatedData = $request->validated();
        $validatedData['checked_by_signature'] = $checkedBySignature; 
        $validatedData['reviewed_by_signature'] = $reviewedSignatureUrls;

        $powerDistributionPanel = PowerDistributionPanel::create($validatedData);
        return new PowerDistributionPanelResource($powerDistributionPanel);
    }

    public function show(PowerDistributionPanel $powerDistributionPanel)
    {
        return PowerDistributionPanelResource::make($powerDistributionPanel);
        
    }

    public function destroy(PowerDistributionPanel $powerDistributionPanel)
    {
        $powerDistributionPanel->delete();
        $powerDistributionPanel = PowerDistributionPanelResource::collection(PowerDistributionPanel::all());
        $total = $powerDistributionPanel->count();
        return response()->json([
            'data' => $powerDistributionPanel,
            'total' => $total
        ]);
    }
}
