<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Brand;
use Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class BrandController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $brands = Brand::latest()->get();
        return view('admin.brand.all-brand',compact('brands'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $brand = Brand::all();
        return view('admin.inc.brand.create',compact('brand'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

          $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'please enter your Category name',
        ]);


        if ($request->hasFile('photo')) {

            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $name, 'public');

            Brand::Create([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Brand::class, 'slug', $request->name),
                'description' => $request->description,
                'photo' => $name,
                'author_id' =>Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('brand.index')->with('success', 'successfully data added');
        } else {
            Brand::Create([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Brand::class, 'slug', $request->name),
                'description' => $request->description,
                'author_id' =>  Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('brand.index')->with('success', 'successfully data added');
        };
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
        $brand = Brand::findOrFail($id);
        // return   $category;
        return view('admin.inc.brand.edit', compact('brand'));
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
        if ($request->hasFile('photo')) {
            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $name, 'public');

            Brand::findOrFail($id)->update([
                'name'        => $request->name,
                'slug'        => SlugService::createSlug(Brand::class, 'slug', $request->name),
                'description' => $request->description,
                'photo'       => $name,
                'author_id'   => Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('brand.index')->with('success', 'successfully data added');
        } else {
            Brand::findOrFail($id)->update([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Brand::class, 'slug', $request->name),
                'description' => $request->description,
                'author_id' => Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('brand.index')->with('success', 'successfully data added');
        }
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Brand::findOrFail($id)->delete();
        return redirect()->route('brand.index')->with('delete', 'Successfully Data delete');
    }

    public function brandSingleData(Request $request)
    {
        if($request->ajax()){
            $brand = Brand::where('id', $request->id)->first();
            return response()->json($brand);
        };

    }
}
