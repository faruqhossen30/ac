<?php

namespace App\Http\Controllers\User\Location;

use App\Http\Controllers\Controller;
use App\Models\Admin\Location\District;
use App\Models\Admin\Location\Upazila;
use Illuminate\Http\Request;

class LoactionAjaxController extends Controller
{
    public function districtFromDivision(Request $request, $id)
    {
        if($request->ajax()){
            $district = District::where('division_id', $id)->orderBy('name', 'asc')->get();

            return response()->json($district);
            // return $id;
        }
    }
    public function upazilaFromDistrict(Request $request, $id)
    {
        if($request->ajax()){
            $upazilas = Upazila::where('district_id', $id)->orderBy('name', 'asc')->get();

            return response()->json($upazilas);
            return $id;
        }
    }
}
