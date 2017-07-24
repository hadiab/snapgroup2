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

    // Get the member associate with the role
    public function Members(){
        return $this->belongsToMany('App\Member');
    }
    
}
