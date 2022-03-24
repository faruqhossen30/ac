<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\SubCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class SubCategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $subcategories = SubCategory::with('category')->get();
        $categories = Category::get();

        // return $subcategories ;
        return view('admin.Sub-Category.all-sub-category', compact('subcategories', 'categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $all_sub_category  = SubCategory::latest()->get();
        $categories = Category::all();

        return view('admin.inc.sub-category.create', compact('all_sub_category ', 'categories'));
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
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'please enter your Category name',
        ]);


        if ($request->hasFile('photo')) {

            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('subcategory', $name, 'public');

            SubCategory::Create([
                'name'        => $request->name,
                'slug'        => SlugService::createSlug(SubCategory::class, 'slug', $request->name),
                'description' => $request->description,
                'photo'       => $name,
                'category_id' => $request->category_id,
                'author_id'   => Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('sub-category.index')->with('success', 'successfully data added');
        } else {
            SubCategory::Create([
                'name'        => $request->name,
                'slug'        => SlugService::createSlug(SubCategory::class, 'slug', $request->name),
                'description' => $request->description,
                'author_id'   => Auth::guard('admin')->user()->id,
                'category_id' => $request->category_id,

            ]);
            return redirect()->route('sub-category.index')->with('success', 'successfully data added');
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
        $sub_category = SubCategory::Where('id', $id)->first();
        return $sub_category;
        return view('admin.inc.sub-category.show', compact('sub_category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $sub_category = SubCategory::findOrFail($id);

        return view('admin.inc.sub-category.edit', compact('sub_category'));
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
        // return $request->all();

        if ($request->hasFile('photo')) {
            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('subcategory', $name, 'public');

            SubCategory::findOrFail($id)->update([
                'name'        => $request->name,
                'slug'        => SlugService::createSlug(SubCategory::class, 'slug', $request->name),
                'description' => $request->description,
                'photo'       => $name,
                'author_id'   => Auth::guard('admin')->user()->id,
                'category_id' => $request->category_id,

            ]);
            return redirect()->route('sub-category.index')->with('success', 'successfully data added');
        } else {
            SubCategory::findOrFail($id)->update([
                'name'        => $request->name,
                'slug'        => SlugService::createSlug(SubCategory::class, 'slug', $request->name),
                'description' => $request->description,
                'author_id'   => Auth::guard('admin')->user()->id,
                'category_id' => $request->category_id,

            ]);
            return redirect()->route('sub-category.index')->with('success', 'successfully data added');
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
        SubCategory::findOrFail($id)->delete();
        return redirect()->route('sub-category.index')->with('delete', 'Successfully Data delete');
    }


    public function getSubCategorySingleData(Request $request)
    {
        if ($request->ajax()) {
            $categories = Category::orderBy('name', 'asc')->get();
            $subcategory = SubCategory::where('id', $request->id)->first();


            $modaview = view('admin.inc.sub-category.ajaxedit', compact('categories', 'subcategory'))->render();


            // return response()->json($modaview);
            return $modaview;
        };
    }
}
