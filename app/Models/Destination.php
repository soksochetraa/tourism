<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Destination extends Model
{

    protected $fillable = [
        'name',
        'description',
        'address',
        'lat',
        'lng',
    ];


    public function events()
    {
        return $this->belongsToMany(Event::class, 'event_destinations');
    }


}
