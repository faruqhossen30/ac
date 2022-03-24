<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User\Bid;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class UserBidsController extends Controller
{
    public function userBidsDashboard(){
        $bids = Bid::with('product')->where('user_id', Auth::user()->id)->get();
        $proposals = $bids->count();

        return view('user.bids', compact('bids'));
    }

}
