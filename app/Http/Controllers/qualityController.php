<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\qmdepworkers;
use App\Models\Objectives;
use App\Models\PlannedAction;
use App\Models\qmdepsafety;
use App\Models\qmdeptrainings;
use App\Models\EngDepWoker;
use App\Models\EngDepMachine;
use App\Models\qmdepmachines;
use App\Models\qmdepdefects;
use App\Models\Announcements;
use App\Models\ReleasedKili;
use App\Models\MeetingTable;
use App\Models\Archives;
use App\Models\CastleLagerRejects;
use App\Models\CastleLiteRejects;
use App\Models\KiliRejects;
use App\Models\AuditHistory;
use App\Models\NonConformity;
use App\Models\SafariRejects;
use App\Models\ReleasedSafari;
use App\Models\Conclusions;
use App\Models\ReleasedCastleLager;
use App\Models\ReleasedCastleLite;
use App\Models\engineersannouncements;

class qualityController extends Controller
{
   public function quality(){ 

      $data=DB::table('eng_dep_workers')
      ->orderBy('id', 'desc')->get(); 

      $machine=DB::table('eng_dep_machines')
      ->orderBy('id','desc')->get();

       //Retrieving Defects Data
       $defects=DB::table('eng_dep_defects')
       ->orderBy('id','desc')->get();
 
       $safety=DB::table('eng_dep_safeties')
      ->orderBy('id','desc')->get();

      $engtrain=DB::table('eng_dep_trainings')
      ->orderBy('id','desc')->get();

       //Retrieving Workers Data
       $data=DB::table('finance_dep_workers')
       ->orderBy('id','desc')->get();
 
       //Retrieving Machines Data
       $machine=DB::table('finance_dep_machines')
       ->orderBy('id','desc')->get();
       
       //Retrieving Defects Data
       $defects=DB::table('finance_dep_defects')
       ->orderBy('id','desc')->get();
 
       //Retrieving TRAININGS 
       $financetrain=DB::table('finance_dep_trainings')
       ->orderBy('id','desc')->get();
 
       //Retrieving Safety
       $safety=DB::table('finance_dep_safeties')
       ->orderBy('id','desc')->get();

       $data=DB::table('marketing_dep_workers')
       ->orderBy('id', 'desc')->get();
        
       // Retrieving Machines Data
       $machine=DB::table('marketing_dep_machines')
       ->orderBy('id','desc')->get();
       
       //Retrieving Defects Data
       $defects=DB::table('marketing_dep_defects')
       ->orderBy('id','desc')->get();

      //Retrieving TRAININGS 
     $marketingtrain=DB::table('marketing_dep_trainings')
     ->orderBy('id','desc')->get();

       //Retrieving Safety Data
       $safety=DB::table('marketing_dep_safeties')
       ->orderBy('id','desc')->get();

        //Retrieving Workers Data
      $data=DB::table('store_dep_workers')
      ->orderBy('id','desc')->get();

      //Retrieving Machines Data
      $machine=DB::table('store_dep_machines')
      ->orderBy('id','desc')->get();

      //Retrieving Defects Data
      $defects=DB::table('store_dep_defects')
      ->orderBy('id','desc')->get();

      //Retrieving TRAININGS 
       $storetrain=DB::table('store_dep_trainings')
       ->orderBy('id','desc')->get();

      //Retrieving Safety Data
      $safety=DB::table('store_dep_safeties')
      ->orderBy('id','desc')->get();
      //Retrieving Workers Data
      $data=DB::table('trans_dep_workers')
      ->orderBy('id','desc')->get();

      //Retrieving Machines Data
      $machine=DB::table('trans_dep_machines')
      ->orderBy('id','desc')->get();

      //Retrieving Safety
      $safety=DB::table('trans_dep_safeties')
      ->orderBy('id','desc')->get();

     
        //Retrieving TRAININGS 
        $transporttrain=DB::table('trans_dep_trainings')
        ->orderBy('id','desc')->get();

      //Retrieving Defects
      $defects=DB::table('trans_dep_defects')
      ->orderBy('id','desc')->get();

     //Retrieving Announcements
      $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();
        
      $qmworker=DB::table('qmdepworkers')
      ->orderBy('id','desc')->get();

      $qmmachine=DB::table('qmdepmachines')
      ->orderBy('id','desc')->get();

      $qmsafety=DB::table('qmdepsafeties')
      ->orderBy('id','desc')->get();

      $qmtrainings=DB::table('qmdeptrainings')
      ->orderBy('id','desc')->get();

      $qmdefects=DB::table('qmdepdefects')
      ->orderBy('id','desc')->get();
      

      return view('qms.quality',['data'=>$data,'qmdefects'=>$qmdefects,'qmtrainings'=>$qmtrainings,'qmsafety'=>$qmsafety,'qmmachine'=>$qmmachine,'qmworker'=>$qmworker,'announce'=>$announce,'transporttrain'=>$transporttrain,'storetrain'=>$storetrain,'marketingtrain'=>$marketingtrain,'financetrain'=>$financetrain,'engtrain'=>$engtrain,'machine'=>$machine,'defects'=>$defects,'safety'=>$safety]);
   }
   //Delete Worker
   public function deleteqmworker($id){
    $worker=qmdepworkers::find($id);
    $worker->delete($id);
    return redirect()->back()->with('delete','You have removed a worker from the QM Department');
}
public function deletearchive($id){
  $archive=Archives::find($id);
  $archive->delete($id);
  return redirect()->back()->with('deletearchive','You have deleted a document from the archives');
}
public function deleteobjective($id){
  $objective=Objectives::find($id);
  $objective->delete($id);
  return redirect()->back()->with('deleteobjective',"You have deleted a row in Objectives' table");
}
public function deleteaction($id){
  $action=PlannedAction::find($id);
  $action->delete($id);
  return redirect()->back()->with('deleteaction','You have deleted a Planned Action(s)');
}
public function deletemeeting($id){
  $meeting=MeetingTable::find($id);
  $meeting->delete($id);
  return redirect()->back()->with('deletemeeting','You have deleted a meeting row');
}
public function deleteconclusion($id){
  $conclusion=Conclusions::find($id);
  $conclusion->delete($id);
  return redirect()->back()->with('deleteconclusions',"You have deleted Conclusions' row");
}
public function deleteaudit($id){
  $audit=AuditHistory::find($id);
  $audit->delete($id);
  return redirect()->back()->with('deleteaudit',"You have deleted Audit record's row");
}
public function deletenon($id){
  $audit=NonConformity::find($id);
  $audit->delete($id);
  return redirect()->back()->with('deletenon','You have deleted a Non-Conformity row');
}
   //Delete Machine
   public function deleteqmmachine($id){
    $worker=qmdepmachines::find($id);
    $worker->delete($id);
    return redirect()->back()->with('deletemachine','You have removed a machiine/Tool/Equipment from QM Department');
}
public function deletereleasedsafari($id){
  $safari=ReleasedSafari::find($id);
  $safari->delete($id);
  return redirect()->back()->with('deletesafari','You have deleted a Safari row');
}
public function deletereleasedclager($id){
  $clager=ReleasedCastleLager::find($id);
  $clager->delete($id);
  return redirect()->back()->with('deleteclager','You have deleted Castle Lager row');
}
public function deletereleasedclite($id){
  $clite=ReleasedCastleLite::find($id);
  $clite->delete($id);
  return redirect()->back()->with('deleteclite','You have deleted a Castle Lite row');
}
public function deletereleasedkili($id){
  $kili=ReleasedKili::find($id);
  $kili->delete($id);
  return redirect()->back()->with('deletekili','You have deleted a kilimanjaro row');
}
public function deleterejectskili($id){
  $kili=KiliRejects::find($id);
  $kili->delete($id);
  return redirect()->back()->with('deletekilirej',"You have deleted a Kilimanjaro rejects' row");
}
public function deleterejectssafari($id){
  $kili=SafariRejects::find($id);
  $kili->delete($id);
  return redirect()->back()->with('deletesafarirej','You have added Safari rejects into the Database');
}
public function deleterejectsclager($id){
  $kili=CastleLagerRejects::find($id);
  $kili->delete($id);
  return redirect()->back()->with('deleteclager',"You have deleted Castle Lager's row");
}
public function deleterejectsclite($id){
  $kili=CastleLiteRejects::find($id);
  $kili->delete($id);
  return redirect()->back()->with('deletecliterej',"You have deleted Castle Lite rejects' row");
}
//Delete Safety
public function deleteqmsafety($id){
  $worker=qmdepsafety::find($id);
  $worker->delete($id);
  return redirect()->back()->with('deletesafety','You have removed a Safety Equipement from QM Department');
}
//Delete Training
public function deleteqmtrain($id){
  $worker=qmdeptrainings::find($id);
  $worker->delete($id);
  return redirect()->back()->with('deletetrain','You have removed a Training Record from QM Department');
}
   public function editannounce($id){
    $updateannounce=Announcements::find($id);
    return view('qms.editannounce',['updateannounce'=>$updateannounce]);
   }
   public function updateannounce(Request $request){
    $updateannounce=Announcements::find($request->id);
    $updateannounce->Announce=$request->announce;
    $updateannounce->save();
    return redirect()->back();
  }
    //Delete Announcement
    public function deleteannounce($id){
      $worker=Announcements::find($id);
      $worker->delete($id);
      return redirect()->back()->with('deleteannounce','You have deleted an announcement');
  }
  //Delete Defects
  public function deleteqmdefects($id){
    $worker=qmdepdefects::find($id);
    $worker->delete($id);
    return redirect()->back()->with('deletedefects',"You have deleted defects' row");
}
   public function addannounce(Request $req){
     $announce=new Announcements;
     $announce->Announce=$req->announceinput;
     $query=$announce->save();
     return redirect()->back()->with('addannounce','You have added a new Announcement');
   }

   public function editdefectsquality($id){
    $updatedefects=qmdepdefects::find($id);
    return view('qms.editdefectsquality',['updatedefects'=>$updatedefects]);
  }
  public function qualityupdatdefects(Request $request){
    $updatedefects=qmdepdefects::find($request->id);
    $updatedefects->Name=$request->name;
    $updatedefects->For=$request->for;
    $updatedefects->Operator=$request->operator;
    $updatedefects->Approve=$request->approve;
    $updatedefects->save();
    return redirect()->back()->with('updatedefects','You have updated defects records, Click Home icon to go back');
    }
    
    public function updatereleasedkili(Request $request){
      $updatereleasedkili = ReleasedKili::find($request->id);
      $updatereleasedkili->Quantity=$request->quantity;
      $updatereleasedkili->Date=$request->date;
      $updatereleasedkili->Approval=$request->approval;
      $updatereleasedkili->save();
      return redirect('released')->with('updatereleasedkili','You have updated Kilimanjaro records..');
      }

    public function updatereleasedsafari(Request $request){
        $updatereleasedsafari = ReleasedSafari::find($request->id);
        $updatereleasedsafari->Quantity=$request->quantity;
        $updatereleasedsafari->Date=$request->date;
        $updatereleasedsafari->Approval=$request->approval;
        $updatereleasedsafari->save();
        return redirect('released')->with('updatereleasedsafari','You have updated Safari records..');
        }

    public function updatereleasedclager(Request $request){
          $updatereleasedclager = ReleasedCastleLager::find($request->id);
          $updatereleasedclager->Quantity=$request->quantity;
          $updatereleasedclager->Date=$request->date;
          $updatereleasedclager->Approval=$request->approval;
          $updatereleasedclager->save();
          return redirect('released')->with('updatereleasedclager','You have updated Castle Lager records..');
          }
    public function updatereleasedclite(Request $request){
            $updatereleasedclite = ReleasedCastleLite::find($request->id);
            $updatereleasedclite->Quantity=$request->quantity;
            $updatereleasedclite->Date=$request->date;
            $updatereleasedclite->Approval=$request->approval;
            $updatereleasedclite->save();
            return redirect('released')->with('updatereleasedclite','You have updated Castle Lite records..');
            }
    public function updaterejectskili(Request $request){
      $updaterejectskili = KiliRejects::find($request->id);
      $updaterejectskili->Quantity=$request->quantity;
      $updaterejectskili->Date=$request->date;
      $updaterejectskili->Approval=$request->approval;
      $updaterejectskili->save();
      return redirect('rejects')->with('updaterejectskili','You have updated Kilimanjaro Rejects records..');
      }
    public function updatesafarirejects(Request $request){
      $updaterejectssafari = SafariRejects::find($request->id);
      $updaterejectssafari->Quantity=$request->quantity;
      $updaterejectssafari->Date=$request->date;
      $updaterejectssafari->Approval=$request->approval;
      $updaterejectssafari->save();
      return redirect('rejects')->with('updaterejectssafari','You have updated Safari Rejects records..');
      }     
      public function updateclagerrejects(Request $request){
        $updaterejectsclager = CastleLagerRejects::find($request->id);
        $updaterejectsclager->Quantity=$request->quantity;
        $updaterejectsclager->Date=$request->date;
        $updaterejectsclager->Approval=$request->approval;
        $updaterejectsclager->save();
        return redirect('rejects')->with('updaterejectsclager','You have updated Castle Lager Rejects records..');
        }  
        public function updatecliterejects(Request $request){
          $updaterejectsclite = CastleLiteRejects::find($request->id);
          $updaterejectsclite->Quantity=$request->quantity;
          $updaterejectsclite->Date=$request->date;
          $updaterejectsclite->Approval=$request->approval;
          $updaterejectsclite->save();
          return redirect('rejects')->with('updaterejectsclite','You have updated Castle Lite Rejects records..');
          }  
          public function editupdate(Request $request){
            $auditupdate = AuditHistory::find($request->id);
            $auditupdate->Date=$request->date;
            $auditupdate->Audit_Type=$request->type;
            $auditupdate->Status=$request->status;
            $auditupdate->Approval=$request->approval;
            $auditupdate->save();
            return redirect('audit')->with('updateaudit','You have updated Audit Records..');
            }
            public function updatenon(Request $request){
              $updatenon = NonConformity::find($request->id);
              $updatenon->Non_Conformity=$request->name;
              $updatenon->Preventive_Action=$request->prevent;
              $updatenon->date=$request->date;
              $updatenon->Approval=$request->approval;
              $query=$updatenon->save();
              return redirect('audit')->with('updatenon','You have updated Non-Conformity Records..');
              } 
            
            public function updatemeeting(Request $request){
              $updatemeeting = MeetingTable::find($request->id);
              $updatemeeting->Date=$request->date;
              $updatemeeting->Agenda=$request->agenda;
              $updatemeeting->Chairperson=$request->chairperson;
              $updatemeeting->Status=$request->status;
              $updatemeeting->Approval=$request->approval;
              $query=$updatemeeting->save();
              return redirect('management')->with('updatemeeting','You have updated Meeting Records..');
              }  
              public function updateconclusion(Request $request){
                $updateconclusion = Conclusions::find($request->id);
                $updateconclusion->Date=$request->date;
                $updateconclusion->Agenda=$request->agenda;
                $updateconclusion->Conclusions=$request->conclusion;
                $updateconclusion->Approval=$request->approval;
                $query=$updateconclusion->save();
                return redirect('management')->with('updateconclusions','You have updated Conclusions Records..');
                }                    
   public function addqmworker(Request $request){
    // INSERTING A WORKER INTO THE DATABASE
     $worker = new qmdepworkers;
     $worker->Full_Name=$request->name;
     $worker->Education=$request->education;
     $worker->Experience=$request->experience;
     $worker->Employment_Type=$request->employment_type;
     $worker->Position=$request->position;
     $worker->Since=$request->since;
     $worker->Until=$request->until;
     $worker->Disability=$request->disability;
     $worker->Extra=$request->extra;
     $query= $worker->save();
     return redirect()->back()->with('success','You have added a new Worker in QM Department!');
  }
  public function editqmworker($id){
    $updateworker = qmdepworkers::find($id);
    return view('qms.editworkqm',['updateworker'=>$updateworker]);
}

public function editaudit($id){
  $audit = AuditHistory::find($id);
  return view('qms.auditedit',['audit'=>$audit]);
}
public function editnon($id){
  $non = NonConformity::find($id);
  return view('qms.nonedit',['non'=>$non]);
}
public function editreleasedkili($id){
  $updatekilireleased = ReleasedKili::find($id);
  return view('qms.releasedkiliedit',['updatekilireleased'=>$updatekilireleased]);
}
public function editrejectskili($id){
  $updatekilirejects = KiliRejects::find($id);
  return view('qms.rejectskiliedit',['updatekilirejects'=>$updatekilirejects]);
}
public function editrejectssafari($id){
  $updatesafarirejects = SafariRejects::find($id);
  return view('qms.rejectssafariedit',['updatesafarirejects'=>$updatesafarirejects]);
}
public function editmeeting($id){
  $editmeeting = MeetingTable::find($id);
  return view('qms.editmeeting',['editmeeting'=>$editmeeting]);
}
public function editconclusion($id){
  $editconclusion = Conclusions::find($id);
  return view('qms.editconclusion',['editconclusion'=>$editconclusion]);
}
public function editrejectsclager($id){
  $updateclagerrejects = CastleLagerRejects::find($id);
  return view('qms.rejectsclageredit',['updateclagerrejects'=>$updateclagerrejects]);
}
public function editrejectsclite($id){
  $updatecliterejects = CastleLiteRejects::find($id);
  return view('qms.rejectscliteedit',['updatecliterejects'=>$updatecliterejects]);
}
public function editreleasedclager($id){
  $updateclagerreleased = ReleasedCastleLager::find($id);
  return view('qms.releasedclageredit',['updateclagerreleased'=>$updateclagerreleased]);
}
public function editreleasedclite($id){
  $updateclitereleased = ReleasedCastleLite::find($id);
  return view('qms.releasedcliteedit',['updateclitereleased'=>$updateclitereleased]);
}
public function editreleasedsafari($id){
  $updatesafarireleased = ReleasedSafari::find($id);
  return view('qms.releasedsafariedit',['updatesafarireleased'=>$updatesafarireleased]);
}
public function updateqmworker(Request $request){
  $updateworker=qmdepworkers::find($request->id);
  $updateworker->Full_Name=$request->name;
  $updateworker->Education=$request->education;
  $updateworker->Experience=$request->experience;
  $updateworker->Employment_Type=$request->employment_type;
  $updateworker->Position=$request->position;
  $updateworker->Since=$request->since;
  $updateworker->Until=$request->until;
  $updateworker->Disability=$request->disability;
  $updateworker->Extra=$request->extra;
  $updateworker->save();
  return redirect()->back()->with('updateworker',"You have updated a worker's record, Click Home icon to go back");
}
public function editqmmachine($id){
  $updatemachine=qmdepmachines::find($id);
  return view('qms.editmachineqm',['updatemachine'=>$updatemachine]);
}
public function qmupdatemachine(Request $request){
  $updatemachine=qmdepmachines::find($request->id);
  $updatemachine->Name=$request->name;
  $updatemachine->For=$request->for;
  $updatemachine->Operator=$request->operator;
  $updatemachine->Status=$request->status;
  $updatemachine->save();
  return redirect()->back()->with('updatemachine','You have updated a machine\tool\equipment records, Click the HOME icon to go back');
}
public function editqmsafety($id){
  $updatesafety=qmdepsafety::find($id);
  return view('qms.editsafetyqm',['updatesafety'=>$updatesafety]);
}
public function qmupdatesafety(Request $request){
  $updatesafety=qmdepsafety::find($request->id);
  $updatesafety->Name=$request->name;
  $updatesafety->Size=$request->size;
  $updatesafety->Quantity=$request->quantity;
  $updatesafety->save();
  return redirect()->back()->with('updatesafety','You have updated a safety equipment record, Click Home icon to go back');
  }
  public function edittrainqm($id){
    $updatetrain=qmdeptrainings::find($id);
    return view('qms.edittrainqm',['updatetrain'=> $updatetrain]);
}
public function addqualitydefects(Request $request){
  // INSERTING DEFECTS INTO THE DATABASE
   $Defects = new qmdepdefects;
   $Defects->Name=$request->name;
   $Defects->For=$request->for;
   $Defects->Operator=$request->operator;
   $Defects->Approve=$request->approve;
   $query=$Defects->save();
   return redirect()->back()->with('adddefects','You have added a defects into the Database');
} 
public function updateqmtrain(Request $request){
  // UPDATE A TRAIN INTO THE DATABASE
  $updatetrain=qmdeptrainings::find($request->id);
  $updatetrain->Title=$request->title;
  $updatetrain->Participants=$request->participants;
  $updatetrain->Starts=$request->starts;
  $updatetrain->Ends=$request->ends;
  $updatetrain->Approval=$request->approval;
  $updatetrain->save();
   return redirect()->back()->with('updatetrain','You have updated Training records, Click Home icon to go back');
} 
  public function addqmmachines(Request $request){
    // INSERTING A MACHINE INTO THE DATABASE
     $Machine = new qmdepmachines;
     $Machine->Name=$request->name;
     $Machine->For=$request->for;
     $Machine->Operator=$request->operator;
     $Machine->Status=$request->status;
     $query=$Machine->save();
     return redirect()->back()->with('addmachine','You have added a machine/tool/equipment in QM Department');
  }  
  public function addqmsafety(Request $request){
    // INSERTING A SAFETY INTO THE DATABASE
     $Safety = new qmdepsafety;
     $Safety->Name=$request->name;
     $Safety->Size=$request->size;
     $Safety->Quantity=$request->quantity;
     $query=$Safety->save();
     return redirect()->back()->with('addsafety','You have added a Safety Equipment in QM Department');
  } 
  public function addqmtrain(Request $request){
    // INSERTING A TRAIN INTO THE DATABASE
     $Train = new qmdeptrainings;
     $Train->Title=$request->title;
     $Train->Participants=$request->participants;
     $Train->Starts=$request->starts;
     $Train->Ends=$request->ends;
     $Train->Approval=$request->approval;
     $query=$Train->save();
     return redirect()->back()->with('addtrain','You have added a Training Record in QM Department');
  }   
}
