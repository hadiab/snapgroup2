<?php

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::post('oauth/token', [
    'middleware' => 'password-grant',
    'uses' => '\Laravel\Passport\Http\Controllers\AccessTokenController@issueToken'
]);

Route::post('oauth/token/refresh', [
    'middleware' => ['web', 'auth', 'password-grant'],
    'uses' => '\Laravel\Passport\Http\Controllers\TransientTokenController@refresh'
]);