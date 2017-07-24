<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Update extends Model
{
        //many updates can belong to one group, same functionality as blog posts
        public function groups(){
        return $this->morphToMany('App\Group', 'groupable');
    }
}
