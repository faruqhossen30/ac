<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Admin\Product\SubCategory;

class ProductAjaxController extends Controller
{
    public function getSubcategoryByCatID(Request $request, $id)
    {
        if($request->ajax()){
            $subcategories = SubCategory::where('category_id', $request->id)->get();
            return response()->json($subcategories);
        }


    }
}
