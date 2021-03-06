<?php

namespace App;

//declare our depencies, add passport authentification
use Laravel\Passport\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;
use App\Group;

class Member extends Authenticatable {

    //implement our interface methods
    use HasApiTokens, Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'first_name', 'last_name', 'email', 'password',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'remember_token'
    ];

    /**
     * Password encrypt mutator
     *
     * @param String $value
     * @return void
     */
    public function setPasswordAttribute($value){
        $this->attributes['password'] = bcrypt($value);
    }

    // members can belong to many groups
    public function groups() {
        return $this->morphToMany('App\Group', 'groupable');
    }

    // members roles in each groups
    public function roles() {
        return $this->belongsToMany('App\Role');
    }

    // Check the role of the Memeber
    public function isMember(){
        return $this->roles()->slug === 'member';
    }
}
