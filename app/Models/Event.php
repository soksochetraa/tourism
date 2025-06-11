<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Event extends Model
{
    protected $fillable = [
        'name',
        'description',
        'location',
        'start_date',
        'end_date',
    ];

    public function destinations()
    {
        return $this->belongsToMany(Destination::class, 'event_destinations');
    }
}
