<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Customer;
use App\Resroom;
use App\Reservation;

class Room extends Model
{
    //
    public function resroom()
    {
        return $this->hasMany(Resroom::class);
    }
}
