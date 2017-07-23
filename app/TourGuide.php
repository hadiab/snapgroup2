<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class TourGuide extends Model
{
        //every guide belongs to many groups
        public function groups(){
        return $this->belongsToMany('App\Group');
    }
}
