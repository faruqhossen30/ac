<?php

namespace App\Http\Controllers\User\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Location\District;
use App\Models\Admin\Location\Division;
use App\Models\Admin\Location\Upazila;
use App\Models\Admin\Product\Brand;
use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\SubCategory;
use App\Models\User\Product;
use Illuminate\Http\Request;
use App\Models\ProductMedia;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Auth;

class ProductController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $products = Product::where('user_id', Auth::user()->id)->latest()->paginate(10);

        return view('user.product.myproduct', compact('products'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $subcategories = SubCategory::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();

        $divisions = Division::orderBy('name', 'asc')->get();

        // return $categories;
        return view('user.product.create', compact('categories', 'subcategories', 'divisions', 'brands'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {

        return $request->all();
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'category'       => 'required',
            'subcategory'    => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
            'minimum_bid_price' => 'required',
            'division_id'       => 'required',
            'district_id'       => 'required',
            'upazila_id'        => 'required'
        ]);

        $data = [
            'title'             => $request->title,
            'slug'              => SlugService::createSlug(Product::class, 'slug', $request->title, ['unique' => true]),
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'category_id'       => $request->category,
            'subcategory_id'    => $request->subcategory,
            'brand_id'          => $request->brand_id,
            'user_id'           => Auth::user()->id,
            'start_date'        => $request->start_date,
            'end_date'          => $request->end_date,
            'minimum_bid_price' => $request->minimum_bid_price,
            'item_number'       => itemNumber(),
            'division_id'       => $request->division_id,
            'district_id'       => $request->district_id,
            'upazila_id'        => $request->upazila_id
        ];

        $photos = $request->photos;

        $product = Product::create($data);

        if(!empty($photos)){
            foreach ($photos as $photo) {
                ProductMedia::create([
                    'product_id' => $product->id,
                    'url' => $photo
                ]);
            };
        };

        return redirect()->route('product.index');

    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $product = Product::with('medias','division','district','upazila')->Where('id', $id)->first();
        // return $expense;
        return view('user.product.showproduct',compact('product'));

    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $categories = Category::orderBy('name', 'asc')->get();
        $subcategories = SubCategory::orderBy('name', 'asc')->get();
        $brands = Brand::orderBy('name', 'asc')->get();

        $divisions = Division::orderBy('name', 'asc')->get();
        $districts = District::orderBy('name', 'asc')->get();
        $upazilas = Upazila::orderBy('name', 'asc')->get();

        $product = Product::where('id', $id)->first();
        $medias = ProductMedia::where('product_id', $id)->get();
        // return $product;
        return view('user.product.edit', compact('product','medias' ,'categories', 'subcategories', 'brands', 'divisions', 'districts', 'upazilas'));
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
        $request->validate([
            'title'             => 'required',
            'description'       => 'required',
            'category'          => 'required',
            'subcategory'       => 'required',
            'start_date'        => 'required',
            'end_date'          => 'required',
            'minimum_bid_price' => 'required',
            'division_id'       => 'required',
            'district_id'       => 'required',
            'upazila_id'        => 'required'
        ]);
        $photos = $request->photos;

        $data = [
            'title'             => $request->title,
            'slug'              => SlugService::createSlug(Product::class, 'slug', $request->title, ['unique' => true]),
            'description'       => $request->description,
            'short_description' => $request->short_description,
            'category_id'       => $request->category,
            'subcategory_id'    => $request->subcategory,
            'brand_id'          => $request->brand_id,
            'start_date'        => $request->start_date,
            'end_date'          => $request->end_date,
            'minimum_bid_price' => $request->minimum_bid_price,
            'division_id'       => $request->division_id,
            'district_id'       => $request->district_id,
            'upazila_id'        => $request->upazila_id
        ];

        Product::where('id', $id)->update($data);


        if(!empty($photos)){
            ProductMedia::where('product_id', $id)->delete();
            foreach ($photos as $photo) {
                ProductMedia::create([
                    'product_id' => $id,
                    'url' => $photo
                ]);
            };
        };

        return redirect()->route('product.index');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        Product::findOrFail($id)->delete();
        return redirect()->route('product.index')->with('delete', 'Successfully Data delete');
    }

}
