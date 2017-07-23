<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Plan;

class Group extends Model
{
    public function plan(){
        return $this->hasMany('App\Plan');
    }
 }
