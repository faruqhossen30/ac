<?php

namespace App\Models\Admin\Location;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Upazila extends Model
{
    use HasFactory;
    protected $fillable = ['id', 'name', 'slug', 'district_id','division_id'];

    public function getDistrict()
    {
        return $this->hasOne(District::class, 'id', 'district_id');
    }

    public function getDivision()
    {
        return $this->hasOne(Division::class, 'id', 'division_id');
    }
}
