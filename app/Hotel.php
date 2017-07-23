<?php

namespace App;

//declare out dependencies

use App\Group;
use Illuminate\Database\Eloquent\Model;
use App\RoomsAvailable;

class Hotel extends Model

//each hotel has one table of available rooms
{
       public function roomsAvailable() {
        $this->hasOne('App\RoomsAvailable');
    }

//each hotel belongs to many groups
       public function groups(){
        return $this->belongsToMany('App\Group');
    }
}
