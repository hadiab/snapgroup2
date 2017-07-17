<?php
namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;
use Auth;

class UserController extends Controller {
    
    public function postSignUp(Request $request)
    {
        $this->validate($request, [
            'email' => 'required|email|unique:users',
            'full_name' => 'required|max:120',
            'password' => 'required|max:24'
        ]);
        $email = $request['email'];
        $hotel_name = $request['hotel_name'];
        $full_name = $request['full_name'];
        $password = bcrypt($request['password']);
        
        $user = new User();
        $user->email = $email;
        $user->hotel_name = $hotel_name;
        $user->full_name = $full_name;
        $user->password = $password;
        
        $user->save();
        
        Auth::login($user);
        
        return redirect()->route('dashboard');
        
    }
    
    public function postSignIn(Request $request) {
          $this->validate($request, [
            'email' => 'required',
            'password' => 'required'
        ]);
        if (Auth::attempt(['email'=> $request['email'], 'password' => $request['password']])) { 
            return redirect()->route('dashboard');
        }
        return redirect()->back();
    }
  
        public function getLogout()
        {
            Auth::logout();
            return redirect()->route('dashboard');
        }
        
        public function getAccount(){
        return view('account', ['user' => Auth::user()]);
    }

        public function postSaveAccount()
        {

        }
  }
/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

