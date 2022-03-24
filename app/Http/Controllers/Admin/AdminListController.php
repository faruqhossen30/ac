<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdminListController extends Controller
{
    public function index()
    {
        $adminlist = Admin::get();
        return view('admin.Admin.adminlist', compact('adminlist'));
    }
    //admin profile create
    public function create()
    {
        return view('admin.Admin.create');
    }

    //admin profile

    public function adminprofile()
    {
        $adminprofile = Auth::guard('admin')->user();
        // return $adminprofile;
        return view('admin.Admin.adminprofile', compact('adminprofile'));
    }

    //admin profile  update
    public function adminprofileupdate(Request $request)
    {
        // return $request->all();
        if ($request->hasFile('photo')) {
            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('profileimage', $name, 'public');

            $adminid = Auth::guard('admin')->user()->id;

            Admin::findOrFail($adminid)->update([
                'name'        => $request->name,
                'email'       => $request->email,
                'phone'       => $request->phone,
                'designation' => $request->designation,
                'content'     => $request->content,
                
                'photo'       => $name,

            ]);
            return redirect()->route('admin.adminprofile')->with('success', 'successfully data added');
        } else {
            $adminid = Auth::guard('admin')->user()->id;
            Admin::findOrFail($adminid)->update([
                'name'        => $request->name,
                'email'       => $request->email,
                'designation' => $request->designation,
                'phone'       => $request->phone,
                'content'     => $request->content,


            ]);
            return redirect()->route('admin.adminprofile')->with('success', 'successfully data added');
        }
    }
}
