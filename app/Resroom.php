<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Customer;
use App\Reservation;
use App\Room;

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
