<?php

namespace App;

use App\Permissions;
use App\Member;
use Illuminate\Database\Eloquent\Model;

class Role extends Model {

    /**
     * Relationship with Permission Model
     *
     * @return permissions
     */
    public function Permissions() {
        return $this->belongsToMany(Permissions::class);
    }

    public function Members(){
        return $this->belongsToMany(Member::class);
    }
    
}
