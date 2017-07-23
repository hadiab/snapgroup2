<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Plan extends Model
{
    //every plan belongs to one specific group
    public function groups() {
        $this->belongsTo('App\Group');
    }
}
