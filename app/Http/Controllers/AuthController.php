<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use \App\Member;
use DB;
use Route;

class AuthController extends Controller {
    /**
     * Register a new member
     *
     * @param Request $request
     * @return json
     */ 
    public function register(Request $request){

        $this->validate($request, [
            'first_name' => 'required',
            'last_name'  => 'required',
            'email'      => 'required|email|unique:members',
            'password'   => 'required',
        ]);

        $member = new Member([
            'first_name' => $request->first_name,
            'last_name' => $request->last_name,
            'email' => $request->email,
            'password' => $request->password,
        ]);

        $member->save();

        return response()->json(['message' => 'Created Member Successfully.'], 201); // 201 == Created Status
    }
    
    /**
     * Authenticate the members
     * send a request to oauth/toekn to requesting access token  
     * 
     * @param Request $request
     * @return json
     */
    public function authenticate(Request $request) {
        // prepend the client_id, client_secret, grant_type, scope to the request
        $request->request->add([
            'username'      => $request->username,
            'password'      => $request->password,
            'client_id'     => env('PASSWORD_GRANT_CLIENT_ID'),
            'client_secret' => env('PASSWORD_GRANT_CLIENT_SECRET'),
            'grant_type'    => 'password',
            'scope'         => '*',
        ]);

        $proxy = Request::create('oauth/token', 'POST');

        return Route::dispatch($proxy);
    }

    /**
     * refreshing access token
     * 
     * @param Request $request
     * @return json
     */
    protected function refreshToken(Request $request){
        $request->request->add([
            'client_id'     => env('PASSWORD_GRANT_CLIENT_ID'),
            'client_secret' => env('PASSWORD_GRANT_CLIENT_SECRET'),
            'grant_type'    => 'refresh_token',
            'refresh_token' => $request->refresh_token,
        ]);

        $proxy = Request::create('/oauth/token', 'POST');

        return Route::dispatch($proxy);
    }

}
