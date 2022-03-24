<?php

namespace App\Models\User;

use App\Models\Admin\Location\District;
use App\Models\Admin\Location\Division;
use App\Models\Admin\Location\Upazila;
use App\Models\Admin\Product\Brand;
use App\Models\Admin\Product\Category;
use App\Models\Admin\Product\SubCategory;
use App\Models\ProductMedia;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use Laravelista\Comments\Commentable;

class Product extends Model
{
    use HasFactory, Sluggable, Commentable;

    protected $fillable = ['id', 'title', 'slug', 'description', 'short_description', 'category_id', 'subcategory_id', 'brand_id', 'user_id', 'start_date', 'end_date', 'minimum_bid_price', 'photo', 'item_number', 'division_id', 'district_id', 'upazila_id'];

    protected $dates = ['start_date', 'end_date'];


    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'title'
            ]
        ];
    }

    public function medias()
    {
        return $this->hasMany(ProductMedia::class,'product_id');
    }

    public function division()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }
    public function district()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }
    public function upazila()
    {
        return $this->hasOne(Upazila::class, 'id', 'upazila_id');
    }

    public function user()
    {
        return $this->hasOne(User::class, 'id', 'user_id');
    }



    public function category()
    {
        return $this->hasOne(Category::class, 'id', 'category_id');
    }
    public function subcategory()
    {
        return $this->hasOne(subcategory::class, 'id', 'subcategory_id');
    }
    public function brand()
    {
        return $this->hasOne(Brand::class, 'id', 'brand_id');
    }

}
