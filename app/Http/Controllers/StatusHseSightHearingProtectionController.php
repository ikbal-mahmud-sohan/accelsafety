<?php

namespace App\Http\Controllers;

use App\Http\Requests\ApprovedHseSightHearingProtectionRequest;
use App\Http\Resources\HseSightHearingProtectionResource;
use App\Models\HseSightHearingProtection;
use Illuminate\Http\Request;

class StatusHseSightHearingProtectionController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(ApprovedHseSightHearingProtectionRequest $request, HseSightHearingProtection $hseSightHearingProtection)
    {
        $hseSightHearingProtection->approved_by = $request->approved_by;
        $hseSightHearingProtection->approved_change_history = $request->approved_change_history;
        $hseSightHearingProtection->approved_date = now();
        $hseSightHearingProtection->save(); 

        return new HseSightHearingProtectionResource($hseSightHearingProtection);
    }
}
