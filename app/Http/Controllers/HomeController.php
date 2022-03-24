<?php

namespace App\Http\Controllers;

use App\Models\Admin\Product\Category;
use App\Models\Admin\Setting\SiteSetting;
use App\Models\User\Product;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $products = Product::with('medias')->latest()->get();
        $feturedproducts = Product::with('medias')->limit(4)->get();

        $setting = SiteSetting::get()->first();

        // return $setting;

        return view('homepage', compact('products', 'feturedproducts','categories', 'setting'));
    }
}
