<?php

namespace App\Http\Controllers\FrontEnd\Filter;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Brand;
use App\Models\Admin\Product\Category;
use App\Models\User\Product;
use Illuminate\Http\Request;

class SearchWiseFilterController extends Controller
{
    public function index(Request $request)
    {

        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();

        // Filter Request
        $keyword = '';
        $filter_location = [];
        $filter_category = [];
        $filter_brand = [];

        if (isset($_GET['location'])) {
            $filter_location = $_GET['location'];
        }

        if (isset($_GET['category'])) {
            $filter_category = $_GET['category'];
        }
        if (isset($_GET['keyword'])) {
            $keyword = trim($_GET['keyword']);
        }

        if (isset($_GET['brand'])) {
            $filter_brand = $_GET['brand'];
        }

        $products = Product::with('medias', 'district', 'category', 'subcategory', 'brand')
            ->when($filter_location, function ($query, $filter_location) {
                return $query->whereIn('district_id', $filter_location);
            })
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

        return view('frontend.filter.searchwiseproduct', compact('products', 'categories', 'brands'));
    }
}
