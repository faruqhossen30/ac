<?php

namespace App\Http\Controllers\Admin\Deposit;

use App\Http\Controllers\Controller;
use App\Models\User\Product;
use Illuminate\Http\Request;

class DepositController extends Controller
{
  public function index(){
         $products = Product::with('user')->latest()->get();
        //  return  $products;
      return view('admin.deposit.alldeposit.deposit_view',compact('products'));
  }
}
