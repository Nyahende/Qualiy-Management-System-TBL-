<?php

namespace App\Http\Controllers;
use App\Models\AuditHistory;
use App\Models\NonConformity;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;

class auditController extends Controller
{
    public function audit(){
        //Retrieving Audit History
        $data=DB::table('audit_histories')
        ->orderBy('id','desc')->get();

        //Retrieving NonConformities
        $nonC=DB::table('non_conformities')
        ->orderBy('id','desc')->get();

        $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();
      
        return view('qms.audit',['data'=>$data,'nonC'=>$nonC,'announce'=>$announce]);
    }
    public function addaudithistory(Request $request){
        // INSERTING AUDIT HISTORY INTO THE DATABASE
         $raw = new AuditHistory;
         $raw->Date=$request->date;
         $raw->Audit_Type=$request->type;
         $raw->Status=$request->status;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('audit')->with('addaudit',"You have added Audit record into the Database");
      }
      public function addnonconformity(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new NonConformity;
         $raw->Non_Conformity=$request->name;
         $raw->Preventive_Action=$request->prevent;
         $raw->date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('audit')->with('addnon','You have added a Non-Conformity into the Database');
      }
}
