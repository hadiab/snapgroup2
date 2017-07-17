<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class PagesController extends Controller
{
    public function index(){
        return view('welcome');
    }
    public function getaccount(){
        return view('account');
    }
  
}
