<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Restaurant extends Model
{
    protected $fillable = [
        'name',
        'address',
        'phone',
        'email',
        'website',
        'description',
        'opening_hours',
    ];

    public function provinceRestaurants()
    {
        return $this->hasMany(ProvinceRestaurant::class);
    }

}
