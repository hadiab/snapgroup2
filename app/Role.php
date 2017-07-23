<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Relationship with Permission Model
     *
     * @return permissions
     */
    public function Permissions() {
        return $this->belongsToMany('App\Permission');
    }

    public function Members(){
        return $this->belongsToMany('App\Member');
    }

    // members roles in each groups
    public function groups() {
        return $this->morphToMany('App\Group', 'grouproleable');
    }
    
}
