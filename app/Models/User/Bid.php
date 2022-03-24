<?php

namespace App\Models\User;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Bid extends Model
{
    use HasFactory;
    protected $fillable = ['user_id', 'product_id', 'bid_price', 'status'];


    public function product()
    {
        return $this->hasOne(Product::class, 'id', 'product_id');
    }
}
