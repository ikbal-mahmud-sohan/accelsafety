<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseIncidentNotificationRequest;
use App\Http\Resources\HseIncidentNotificationResource;
use App\Models\HseIncidentNotification;
use Illuminate\Http\Request;

class HseIncidentNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseIncidentNotification = HseIncidentNotificationResource::collection(HseIncidentNotification::all());
        $total = $hseIncidentNotification->count();
        return response()->json([
            'data' => $hseIncidentNotification,
            'total' => $total
        ]);
    }

    public function store(StoreHseIncidentNotificationRequest $request)
    {
        $hseIncidentNotification = HseIncidentNotification::create($request->validated());
        return new HseIncidentNotificationResource($hseIncidentNotification);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseIncidentNotification $hseIncidentNotification)
    {
        return HseIncidentNotificationResource::make($hseIncidentNotification);
        
    }

    public function update(Request $request, HseIncidentNotification $hseIncidentNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseIncidentNotification $hseIncidentNotification)
    {
        $hseIncidentNotification->delete();
        $hseIncidentNotification = HseIncidentNotificationResource::collection(HseIncidentNotification::all());
        $total = $hseIncidentNotification->count();
        return response()->json([
            'data' => $hseIncidentNotification,
            'total' => $total
        ]);
    }
}
