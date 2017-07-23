<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\RoomsAvailable;

class Hotel extends Model
{
    public function roomsAvailable() {
        $this->hasOne('App\RoomsAvailable');
    }
}
