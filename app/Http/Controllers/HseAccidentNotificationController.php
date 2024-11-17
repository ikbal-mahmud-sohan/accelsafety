<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseAccidentNotificationRequest;
use App\Http\Resources\HseAccidentNotificationResource;
use App\Models\HseAccidentNotification;
use Illuminate\Http\Request;

class HseAccidentNotificationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $hseAccidentNotification = HseAccidentNotificationResource::collection(HseAccidentNotification::all());
        $total = $hseAccidentNotification->count();
        return response()->json([
            'data' => $hseAccidentNotification,
            'total' => $total
        ]);
    }

    public function store(StoreHseAccidentNotificationRequest $request)
    {
        $hseAccidentNotification = HseAccidentNotification::create($request->validated());
        return new HseAccidentNotificationResource($hseAccidentNotification);
    }

    /**
     * Display the specified resource.
     */
    public function show(HseAccidentNotification $hseAccidentNotification)
    {
        return HseAccidentNotificationResource::make($hseAccidentNotification);
        
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(HseAccidentNotification $hseAccidentNotification)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, HseAccidentNotification $hseAccidentNotification)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseAccidentNotification $hseAccidentNotification)
    {
        $hseAccidentNotification->delete();
        $hseAccidentNotification = HseAccidentNotificationResource::collection(HseAccidentNotification::all());
        $total = $hseAccidentNotification->count();
        return response()->json([
            'data' => $hseAccidentNotification,
            'total' => $total
        ]);
    }
}
