<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Brand;
use App\Models\Admin\Product\Category;
use App\Models\User\Bid;
use App\Models\User\Product;
use Carbon\Carbon;
use Illuminate\Http\Request;

class AuctionController extends Controller
{
    public function auctionPage()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();
        // Filter Request
        $filter_location = [];
        $filter_category = [];
        $filter_brand = [];

        // $today = [Carbon::now()->startOfWeek(), Carbon::now()->endOfWeek()];
        // $today = '';

        if (isset($_GET['location'])) {
            $filter_location = $_GET['location'];
        }

        if (isset($_GET['category'])) {
            $filter_category = $_GET['category'];
        }

        if (isset($_GET['brand'])) {
            $filter_brand = $_GET['brand'];
        }




        $products = Product::with('medias', 'district', 'category', 'subcategory', 'brand')
            ->when($filter_location, function ($query, $filter_location) {
                return $query->whereIn('district_id', $filter_location);
            })
            ->when($filter_category, function ($query, $filter_category) {
                return $query->whereIn('category_id', $filter_category);
            })
            ->when($filter_brand, function ($query, $filter_brand) {
                return $query->whereIn('brand_id', $filter_brand);
            })
            ->latest()->get();
        //    return $products->count();



        return view('frontend.auction.productpage', compact('products', 'categories', 'brands'));
    }

    public function singleProduct(Request $request, $slug)
    {
        $product = Product::where('slug', $slug)->first();

        $last_bid_price = Bid::where('product_id', $product->id)->max('bid_price');
        $increment = $product->increment('total_view');
        // return $product->minimum_bid_price;

        return view('frontend.auction.singleproduct', compact('product', 'last_bid_price'));
    }

    public function checkMinimumBidPrice(Request $request)
    {
       if($request->ajax()){
           // $some = $price->minimum_bid_price;

            $product_price = Product::where('id', $request->id)->first();
            $bid_price = Bid::where('product_id', $request->id)->max('bid_price');

            $price = $bid_price ?? $product_price->minimum_bid_price;




           return $request->bid_price > $price ? true : false;
        // return $request->id;
       }
    }
}
