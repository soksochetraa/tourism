<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceRestaurant extends Model
{
    public $timestamps = false;

    protected $fillable = ['province_id', 'restaurant_id'];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function restaurant()
    {
        return $this->belongsTo(Restaurant::class);
    }
}
