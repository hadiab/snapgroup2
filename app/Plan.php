<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Plan extends Model
{
    public function groups() {
        $this->belongsTo('App\Group');
    }
}
