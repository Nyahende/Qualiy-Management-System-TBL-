<?php

namespace App\Http\Controllers;
use App\Models\MeetingTable;
use App\Models\Conclusions;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class managementController extends Controller
{
    public function management(){
        //Retrieving Meetings
        $meeting=DB::table('meeting_tables')
        ->orderBy('id','desc')->get();

        //Retrieving Conclusions
        $conclusions=DB::table('conclusions')
        ->orderBy('id','desc')->get();

        $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();

        return view('qms.management',['meeting'=>$meeting,'conclusions'=>$conclusions,'announce'=>$announce]);
    }
    public function addmeeting(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new MeetingTable;
         $raw->Date=$request->date;
         $raw->Agenda=$request->agenda;
         $raw->Chairperson=$request->chairperson;
         $raw->Status=$request->status;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('management')->with('addmeeting','You have added a new Meeting row');
      }
      public function addconclusion(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new Conclusions;
         $raw->Date=$request->date;
         $raw->Agenda=$request->agenda;
         $raw->Conclusions=$request->conclusion;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('management')->with('addconclusions','You have added Conclusions into the Database');
      }
}