<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Restaurant extends Model
{
    //every restaurant belongs to many groups
    public function groups(){
    return $this->morphToMany('App\Group', 'groupable');
    }
}
