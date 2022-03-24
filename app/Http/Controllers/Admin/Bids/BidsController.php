<?php

namespace App\Http\Controllers\Admin\Bids;

use App\Http\Controllers\Controller;
use App\Models\User;
use App\Models\User\Bid;
use App\Models\User\Product;
use Illuminate\Http\Request;

class BidsController extends Controller
{
    public function bids(){

        $totalBids = Product::count('total_submit');
        // return   $totalBids;
        $products = Product::with('user')->latest()->get();

        // return  $products;
        return view('admin.Bids.bids',compact('products','totalBids'));
    }


}
