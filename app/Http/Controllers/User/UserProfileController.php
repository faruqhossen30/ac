<?php

namespace App\Http\Controllers\User;

use App\Http\Controllers\Controller;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class UserProfileController extends Controller
{
    public function userProfileDashboard(){

        $user = Auth::user();
        return view('user.user-profile', compact('user'));
    }
    public function profileEdit()
    {
        $user = Auth::user();
        return view('user.user-profile-edit', compact('user'));
    }

    public function profileUpdate(Request $request)
    {
        $user = Auth::user();

        User::where('id', $user->id)->update([
            'name'          => $request->name,
            'mobile'        => $request->mobile,
            'gender'        => $request->gender,
            'nid'           => $request->nid,
            'date_of_birth' => $request->date_of_birth,
            'address'       => $request->address
        ]);

        if($request->avatar){
            if($user->avatar){
                Storage::disk('public')->delete('avatar/'.$user->avatar);
            }
            $avatar = $request->avatar->getClientOriginalName();
            $request->file('avatar')->storeAs('avatar', $avatar, 'public');
            User::where('id', $user->id)->update(['avatar' => $avatar]);
        }

        return redirect()->back();
    }
}
