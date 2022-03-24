<?php

namespace App\Models\Admin\Product;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Cviebrock\EloquentSluggable\Sluggable;
class SubCategory extends Model
{
    use HasFactory, Sluggable;
    protected $fillable =[
        'name',
        'slug',
        'description',
        'photo',
        'category_id',
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

    public function category()
    {
        return $this->hasOne(category::class, 'id', 'category_id');
    }
}
