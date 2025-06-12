<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Province extends Model
{
    protected $fillable = [
        'name',
        'description',
        'region',
    ];

    public function provinceRestaurants()
    {
        return $this->hasMany(ProvinceRestaurant::class);
    }
}
