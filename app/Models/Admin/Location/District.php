<?php

namespace App\Models\Admin\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'slug', 'division_id'];
    
    public function getDivision()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }
}
