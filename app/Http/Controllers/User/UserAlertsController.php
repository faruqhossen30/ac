<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserAlertsController extends Controller
{
   public function userAlertDashboard(){
       return view('user.user-alert');
   }
}
