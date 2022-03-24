<?php

namespace App\Http\Controllers\Frontend\Ajax;

use App\Http\Controllers\Controller;
use App\Models\Admin\Location\Division;
use Illuminate\Http\Request;

class LocationAjaxController extends Controller
{
    public function getLocation(Request $request)
    {
        $divisions = Division::with('districts')->orderBy('name', 'asc')->get();

        $data =  view('frontend.inc.locationmodalbody', compact('divisions'))->render();
        return $data;
    }
}
