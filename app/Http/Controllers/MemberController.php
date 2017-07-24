<?php

namespace App\Http\Controllers;

use App;

use Illuminate\Http\Request;
use App\Member;
use App\Group;
use App\TourGuide;

class MemberController extends Controller {

    public function getMembers(){
        $members = Member::all();
        return response()->json($members);
    }

    public function getMember($id){
        $member = Member::find($id);
        return response()->json($member);
    }

    public function test() {

        $group= App\TourGuide::find(1);
        foreach ($group->groups as $tour_guide) {
            echo $tour_guide;
        }
          }

    }


