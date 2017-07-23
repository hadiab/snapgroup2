<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Hotel;

class RoomsAvailable extends Model
{
    protected $table = 'rooms_available';

    public function hotel() {
        $this->belongsTo('App\Hotel');
    }
}
