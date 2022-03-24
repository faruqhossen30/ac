<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserWinningBidsController extends Controller
{
    public function userWinningBidsDashboard(){

        return view('user.winnning-bids');
    }
}
