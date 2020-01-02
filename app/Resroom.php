<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Resroom extends Model
{
    //
    public function reservation()
    {
        return $this->belongsTo(Reservation::class);
    }
    public function room()
    {
        return $this->belongsTo(Room::class);
    }
}
