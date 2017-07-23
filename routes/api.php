<?php

use Illuminate\Http\Request;
use App\Member;
use App\Role;
use App\Permissions;

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
Route::get('/attach_premission_to_role', function(){
    $role = Role::find(1);

    return $member;
});
