<?php

namespace App\Http\Controllers\Admin\Product;

use App\Http\Controllers\Controller;
use App\Models\Admin\Product\Category;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

use \Cviebrock\EloquentSluggable\Services\SlugService;
use Illuminate\Support\Facades\Storage;

class CategoryController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $categories = Category::latest()->get();

        // return $category;
        return view('admin.Category.all-category', compact('categories'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $category = Category::all();
        // return $categories;
        return view('admin.inc.category.create', compact('category'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        // return  Auth::guard('admin')->user()->id;
        $request->validate([
            'name' => 'required',
        ], [
            'name.required' => 'please enter your Category name',
        ]);


        if ($request->hasFile('photo')) {

            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('images', $name, 'public');

            Category::Create([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Category::class, 'slug', $request->name),
                'description' => $request->description,
                'photo' => $name,
                'author_id' =>  Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('category.index')->with('success', 'successfully data added');
        } else {
            Category::Create([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Category::class, 'slug', $request->name),
                'description' => $request->description,
                'author_id' =>  Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('category.index')->with('success', 'successfully data added');
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
        $category = Category::Where('id', $id)->first();
        // return $category;
        return view('admin.inc.category.show', compact('category'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $category = Category::findOrFail($id);
        // return   $category;
        return view('admin.inc.category.edit', compact('category'));
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
    //    return $request->all();

        if ($request->hasFile('photo')) {
            $name = $request->photo->getClientOriginalName();
            $request->photo->storeAs('subcategory', $name, 'public');

            Category::findOrFail($id)->update([
                'name'        => $request->name,
                'slug'        => SlugService::createSlug(Category::class, 'slug', $request->name),
                'description' => $request->description,
                'photo'       => $name,
                'author_id'   => Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('category.index')->with('success', 'successfully data added');
        } else {
            Category::findOrFail($id)->update([
                'name' => $request->name,
                'slug' => SlugService::createSlug(Category::class, 'slug', $request->name),
                'description' => $request->description,
                'author_id' => Auth::guard('admin')->user()->id,

            ]);
            return redirect()->route('category.index')->with('success', 'successfully data added');
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
        Category::findOrFail($id)->delete();
        return redirect()->route('category.index')->with('delete', 'Successfully Data delete');
    }

    public function getCategorySingleData(Request $request)
    {
        if($request->ajax()){
            $category = Category::where('id', $request->id)->first();
            return response()->json($category);
        };

    }


}
