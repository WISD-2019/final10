<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Reservation;
use App\Resroom;
use App\Room;

class Customer extends Model
{
    //
    public function user()
    {
        return $this->belongsTo(User::class);
    }
    public function reservation()
    {
        return $this->hasMany(Reservation::class);
    }

    protected $fillable = [
        'user_id',
        'name',
        'phone',
        'idcard',
    ];

}
