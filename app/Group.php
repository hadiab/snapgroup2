<?php

namespace App;

//add depencies
use Illuminate\Database\Eloquent\Model;
use App\Plan;
use App\Flight;
use App\Place;
use App\Hotel;
use App\Restaurant;
use App\TourGuide;
use App\GuideExpertise;
use App\Transport;
use App\Member;

//create our group model
class Group extends Model
{
    //each group has one plan
    public function plan(){
        return $this->hasOne('App\Plan');
    }
    
    //each group has many updates
    public function updates() {
        return $this->hasMany('App\Update');
    }

    //each group belongs to many flights, which belong to many groups
    public function flights(){
        return $this->belongsToMany('App\Flight');
    }

    //each group has many hotels, which have more than one group
    public function hotels(){
        return $this->belongsToMany('App\Hotel');
    }

    //each group has many members who have more than one group
    public function members(){
        return $this->belongsToMany('App\Member');
    }

    //each group has many places that have more than one group
    public function places(){
        return $this->belongsToMany('App\Place');
    }

    //holds many restaurants that belong to many groups
    public function restaurants(){ 
        return $this->belongsToMany('App\Restaurant');
    }

    //holds many guides that belong to many groups
    public function guides(){
        return $this->belongsToMany('App\TourGuide');
    }

    //holds many transports that belong to many groups
    public function transports(){
        return $this->belongsToMany('App\Transport');
    }
 }
