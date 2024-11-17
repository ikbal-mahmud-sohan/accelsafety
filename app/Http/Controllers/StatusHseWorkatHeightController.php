<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseWorkatHeightRequest;
use App\Http\Resources\HseWorkatHeightResource;
use App\Models\HseWorkatHeight;
use Illuminate\Http\Request;

class StatusHseWorkatHeightController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ApprovedHseWorkatHeightRequest $request, HseWorkatHeight $hseWorkatHeight)
    {
        $hseWorkatHeight->approved_by = $request->approved_by;
        $hseWorkatHeight->approved_change_history = $request->approved_change_history;
        $hseWorkatHeight->approved_date = now();
        $hseWorkatHeight->save(); 

        return new HseWorkatHeightResource($hseWorkatHeight);
    }
}
