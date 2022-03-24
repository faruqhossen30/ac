<?php

namespace App\Http\Controllers\Admin\Setting;

use App\Http\Controllers\Controller;
use App\Models\Admin\Setting\SiteSetting;
use Illuminate\Http\Request;

class SettingController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $site = SiteSetting::first();

        // return  $site ;
        return view('admin.settings.setting', compact('site'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $site = SiteSetting::first();

        // return  $site ;
        return view('admin.settings.setting', compact('site'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return $request->all();
        SiteSetting::updateOrInsert([
            'id'        => 1
        ], [
            'site_title'          => $request->site_title,
            'email'               => $request->email,
            'telephone_no'        => $request->telephone_no,
            'working_time'        => $request->working_time,
            'working_day'         => $request->working_day,
            'address'             => $request->address,
            'mobile_no'           => $request->mobile_no,
            'facebook_page_link'  => $request->facebook_page_link,
            'facebook_group_link' => $request->facebook_group_link,
            'facebook_link'       => $request->facebook_link,
            'twitter_link'        => $request->twitter_link,
            'instagram_link'      => $request->instagram_link,
            'linkedin_link'       => $request->linkedin_link,
            'youtube_link'        => $request->youtube_link,
            'intro_video_link'    => $request->intro_video_link,

        ]);

        return redirect()->back();
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
