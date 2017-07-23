<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Group;

class Place extends Model
{
      //places can belong to many groups
      public function groups(){
        return $this->morphToMany('App\Group', 'groupable');
    }
}
