<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Announcements;
use Illuminate\Support\Facades\DB;

class announcementsController extends Controller
{
    public function announce(){

        $announce = DB::table('announcements')
        ->orderBy('id','desc')->get();

      return view('qms.announcements',['announce'=>$announce]);
    }
}
