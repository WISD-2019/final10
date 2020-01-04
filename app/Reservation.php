<?php

namespace App;


use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Customer;
use App\Resroom;
use App\Room;

class Reservation extends Model
{
    //
    public function customer()
    {
        return $this->belongsTo(Customer::class);
    }
    public function resroom()
    {
        return $this->hasMany(Resroom::class);
    }
}
