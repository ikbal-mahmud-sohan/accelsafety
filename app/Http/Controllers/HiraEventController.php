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
        $hiraEvent = HiraEventResource::collection(HiraEvent::orderBy('id', 'desc')->get());
        $totacount = $hiraEvent->count();
        return response()->json([
            'data' => $hiraEvent,
            'total' => $totacount,
        ]);
    }

    public function store(StoreHiraEventRequest $request)
    {
        $hiraEvent = HiraEvent::create($request->validated());
        HiraEventResource::make($hiraEvent);
        $hiraEvent = HiraEventResource::collection(HiraEvent::orderBy('id', 'desc')->get());
        $totacount = $hiraEvent->count();
        return response()->json([
            'data' => $hiraEvent,
            'total' => $totacount,
        ]);
    }

    public function destroy(HiraEvent $hiraEvent)
    {
        $hiraEvent->delete();
        $hiraEvent = HiraEventResource::collection(HiraEvent::orderBy('id', 'desc')->get());
        $totacount = $hiraEvent->count();
        return response()->json([
            'data' => $hiraEvent,
            'total' => $totacount,
        ]);
    }
}
