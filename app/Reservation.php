<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

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
