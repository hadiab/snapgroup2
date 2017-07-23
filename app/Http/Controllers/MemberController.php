<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Member;

class MemberController extends Controller {

    public function getMembers(){
        $members = Member::all();
        return response()->json($members);
    }

    public function getMember($id){
        $member = Member::find($id);
        return response()->json($member);
    }

}
