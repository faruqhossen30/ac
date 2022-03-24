<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
use App\Models\Admin\Product\SubCategory;

class Category extends Model
{
    use HasFactory, Sluggable;
    protected $fillable =[
        'name',
        'slug',
        'description',
        'photo',
        'author_id',
    ];
    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name',
            ]
        ];
    }

    public function subcategories()
    {
        return $this->hasMany(SubCategory::class, 'category_id');
    }

}
