<?php

namespace App;

//declare dependencies

use App\Group;
use Illuminate\Database\Eloquent\Model;

//flights can belong to many groups
class Flight extends Model
{
    public function groups(){
        return $this->belongsToMany('App\Group');
    }
}
