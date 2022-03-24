<?php
use Illuminate\Http\Request;
use App\Models\Admin\Product\Category;


function getCategories()
{
    return Category::with('subcategories')->get();
}
