<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreHseLottoFormRequest;
use App\Http\Resources\HseLottoFormResource;
use App\Models\HseLottoForm;
use Illuminate\Http\Request;

class HseLottoFormController extends Controller
{
    public function index()
    {
        $hseLottoForm = HseLottoFormResource::collection(HseLottoForm::all());
        $total = $hseLottoForm->count();
        return response()->json([
            'data' => $hseLottoForm,
            'total' => $total
        ]);
    }

    public function store(StoreHseLottoFormRequest $request)
    {
        $data = $request->validated();
        
        if (isset($data['energy'])) {
            $data['energy'] = json_encode($data['energy']);
        }
    
        $hseLottoForm = HseLottoForm::create($data);
    
        return HseLottoFormResource::make($hseLottoForm);
    }

    public function show(HseLottoForm $hseLottoForm)
    {
        return HseLottoFormResource::make($hseLottoForm);
        
    }

    public function update(Request $request, HseLottoForm $hseLottoForm)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(HseLottoForm $hseLottoForm)
    {
        $hseLottoForm->delete();
        $hseLottoForm = HseLottoFormResource::collection(HseLottoForm::all());
        $total = $hseLottoForm->count();
        return response()->json([
            'data' => $hseLottoForm,
            'total' => $total
        ]);
    }
}
