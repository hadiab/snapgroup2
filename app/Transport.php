<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Transport extends Model
{
        //every transport can belong to many groups
        public function groups(){
        return $this->belongsToMany('App\Group');
    }
}
