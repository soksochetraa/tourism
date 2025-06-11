<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProvinceDestination extends Model
{
    protected $fillable = [
        'province_id',
        'destination_id',
    ];

    public function province()
    {
        return $this->belongsTo(Province::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
