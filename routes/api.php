<?php

use Illuminate\Http\Request;
use App\Member;
use App\Role;
use App\Group;

/**
 * Secure API
 * 
 */
Route::group(['middleware' => 'auth:api'], function(){
    Route::get('/member/{id}', 'MemberController@getMember'); 
    Route::get('/members', 'MemberController@getMembers');
});

/**
 * Public API
 * 
 */
Route::post('/register', 'AuthController@register');
Route::post('/login', 'AuthController@authenticate');
Route::post('/login/refresh', 'AuthController@refreshToken');

/**
 * Test Routes
 * 
 */
Route::get('/attach_group_members', function(){
    $group = Group::find(1); // Group

    $group->members()->attach(1);

    return $group;
});

Route::get('/get_group_members', function(){
    $group = Group::with('members.roles')->get()->find(1); // Group

    return $group;
});
