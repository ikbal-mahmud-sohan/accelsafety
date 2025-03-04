<?php

namespace App\Http\Controllers;

use App\Models\SiteInfoPermit;
use Illuminate\Http\Request;

class SiteInfoPermitController extends Controller
{
    //
    public function index(Request $request){

        $data=SiteInfoPermit::where('key',$request->key)->get();
        if($request->key == 'sitecountry'){
            $countries=getAllCountries();
            return response([
                'key'=>$request->key,
                'countries'=>$countries,
                'data'=>$data
            ]);
        }else{
            return response([
                'key'=>$request->key,
                'data'=>$data
            ]);
        }

    }
}
