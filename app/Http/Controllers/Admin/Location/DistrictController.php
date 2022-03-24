<?php

namespace App\Http\Controllers\Admin\Location;

use App\Http\Controllers\Controller;
use App\Models\Admin\Location\District;
use App\Models\Admin\Location\Division;
use Illuminate\Http\Request;

class DistrictController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $all_district = District::all();
        // return $all_district;
       return view('admin.location.District.view_division',compact('all_district'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_division = Division::all();
        return view('admin.location.District.create_district',compact('all_division'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate(
            [
                'name'=> 'required',

            ],[
                'name.required'=> 'Please enter your district name',
            ]
        );
        District::create([
            'name' => $request->name,
            'division_id' => $request->division_id,

        ]);
        return redirect()->route('district.index')->with('success', 'successfully data added');
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
        $all_division = Division::all();
        $district = District::findOrFail($id);

        return view('admin.location.District.edit_district', compact('district','all_division'));
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
        District::where('id',$id)->update([
            'name'=> $request->name,
        ]);
        return redirect()->route('district.index')->with('update', 'Successfully Data Updated');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        District::findOrFail($id)->delete();
        return redirect()->route('district.index')->with('delete', 'Successfully Data delete');
    }
}
