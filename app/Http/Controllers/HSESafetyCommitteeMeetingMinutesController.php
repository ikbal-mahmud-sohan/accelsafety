<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHSESafetyCommitteeMeetingMinutesRequest;
use App\Http\Requests\UpdateHSESafetyCommitteeMeetingMinutesRequest;
use App\Http\Resources\HSESafetyCommitteeMeetingMinutesResource;
use App\Models\HSESafetyCommitteeMeetingMinutes;
use Illuminate\Http\Request;

class HSESafetyCommitteeMeetingMinutesController extends Controller
{
    public function index()
    {

        $safetyCommitteeMeetingMinutesDocs = HSESafetyCommitteeMeetingMinutes::with(['approvedBy', 'createdBy', 'updatedBy'])->get();

        return HSESafetyCommitteeMeetingMinutesResource::collection($safetyCommitteeMeetingMinutesDocs);
    }

    public function store(StoreHSESafetyCommitteeMeetingMinutesRequest $request)
    {
        $hseSafetyCommitteeMeetingMinutes = HSESafetyCommitteeMeetingMinutes::create($request->validated());
        return new HSESafetyCommitteeMeetingMinutesResource($hseSafetyCommitteeMeetingMinutes);
    }

    public function show(HSESafetyCommitteeMeetingMinutes $hseSafetyCommitteeMeetingMinutes)
    {
        return HSESafetyCommitteeMeetingMinutesResource::make($hseSafetyCommitteeMeetingMinutes);
    }

    public function update(UpdateHSESafetyCommitteeMeetingMinutesRequest $request, HSESafetyCommitteeMeetingMinutes $hseSafetyCommitteeMeetingMinutes)
    {
        $hseSafetyCommitteeMeetingMinutes->update($request->validated());
        return new HSESafetyCommitteeMeetingMinutesResource($hseSafetyCommitteeMeetingMinutes);

    }

    public function destroy(HSESafetyCommitteeMeetingMinutes $hseSafetyCommitteeMeetingMinutes)
    {
        $hseSafetyCommitteeMeetingMinutes->delete();
        $hseSafetyCommitteeMeetingMinutes = HSESafetyCommitteeMeetingMinutesResource::collection(HSESafetyCommitteeMeetingMinutes::all());
        $totalCount = $hseSafetyCommitteeMeetingMinutes->count();

        return response()->json([
            'data' => $hseSafetyCommitteeMeetingMinutes,
            'total_count' => $totalCount,
        ]);
    }
}
