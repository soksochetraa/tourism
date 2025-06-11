<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class EventDestination extends Model
{
    protected $fillable = [
        'event_id',
        'destination_id',
    ];

    public function event()
    {
        return $this->belongsTo(Event::class);
    }

    public function destination()
    {
        return $this->belongsTo(Destination::class);
    }
}
