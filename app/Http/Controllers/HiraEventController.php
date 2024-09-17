<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHiraEventRequest;
use App\Http\Resources\HiraEventResource;
use App\Models\HiraEvent;
use Illuminate\Http\Request;

class HiraEventController extends Controller
{
    public function index()
    {
        $hiraEvent = HiraEventResource::collection(HiraEvent::all());
        $totacount = $hiraEvent->count();
        return response()->json([
            'data' => $hiraEvent,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraEventRequest $request)
    {
        $hiraLocation = HiraEvent::create($request->validated());
        return HiraEventResource::make($hiraLocation);
    }

    public function destroy(HiraEvent $hiraEvent)
    {
        $hiraEvent->delete();
        $hiraEvent = HiraEventResource::collection(HiraEvent::all());
        $totacount = $hiraEvent->count();
        return response()->json([
            'data' => $hiraEvent,
            'total' => $totacount,
        ]);
    }
}
