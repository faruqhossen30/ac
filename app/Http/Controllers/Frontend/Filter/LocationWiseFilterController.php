<?php

namespace App\Http\Controllers\Frontend\Filter;

use App\Http\Controllers\Controller;
use App\Models\Admin\Location\District;
use App\Models\Admin\Product\Brand;
use App\Models\Admin\Product\Category;
use App\Models\User\Product;
use Illuminate\Http\Request;

class LocationWiseFilterController extends Controller
{
    public function index(Request $request, $slug)
    {
        // return $slug;
        $locationName = District::where('slug', $slug)->first()->name;
        $id = District::where('slug', $slug)->first()->id;

        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();

        // Filter Request
        $keyword = '';
        $filter_category = [];
        $filter_brand = [];

        if (isset($_GET['category'])) {
            $filter_category = $_GET['category'];
        }
        if (isset($_GET['keyword'])) {
            $keyword = $_GET['keyword'];
        }

        if (isset($_GET['brand'])) {
            $filter_brand = $_GET['brand'];
        }

        $products = Product::with('medias', 'district', 'category', 'subcategory', 'brand')
            ->where('district_id', $id)
            ->when($keyword, function ($query, $keyword) {
                return $query->where('title', 'like', '%' . $keyword . '%');
            })
            ->when($filter_category, function ($query, $filter_category) {
                return $query->whereIn('category_id', $filter_category);
            })
            ->when($filter_brand, function ($query, $filter_brand) {
                return $query->whereIn('brand_id', $filter_brand);
            })
            ->latest()->get();

            // return $products;

        return view('frontend.filter.locationwiseproduct', compact('products', 'categories', 'brands', 'locationName'));
    }
}
