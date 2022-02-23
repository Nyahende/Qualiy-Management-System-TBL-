<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\TransDepWorkers;
use App\Models\TransDepDefects;
use App\Models\sopModel;
use App\Models\TransDepSafety;
use App\Models\TransDepTraining;
use App\Models\TransDepMachines;

class transportController extends Controller
{
    public function transport(){
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

       //Retrieving SOPs 
       $sop=DB::table('sop_models')
      ->orderBy('id','desc')->get();

      $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();

      $audit=DB::table('audit_histories')
       ->orderBy('id','desc')->get();

       $nonC=DB::table('non_conformities')
       ->orderBy('id','desc')->get();


      return view('qms.transport',['machine'=>$machine,'audit'=>$audit,'nonC'=>$nonC,'announce'=>$announce,'transporttrain'=>$transporttrain,'data'=>$data,'safety'=>$safety,'defects'=>$defects,'sop'=>$sop]);

    }
    public function transportaddworker(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $worker = new TransDepWorkers;
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
         return redirect('transport')->with('addworker','You have added a worker into the Database');
      }  
      public function addtransmachines(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $Machine = new TransDepMachines;
         $Machine->Name=$request->name;
         $Machine->For=$request->for;
         $Machine->Operator=$request->operator;
         $Machine->Status=$request->status;
         $query=$Machine->save();
         return redirect('transport')->with('addmachine','You have added a machine/tool/equipment record');
      } 
       public function edittraintrans($id){
        $updatetrain=TransDepTraining::find($id);
        return view('qms.edittraintrans',['updatetrain'=> $updatetrain]);
      }
      public function deletetranssop($id){
        $sop=sopModel::find($id);
        $sop->delete($id);
        return redirect()->back()->with('deletesop','You have deleted an SOP document from the Database');
      }
      public function updatetranstrain(Request $request){
        // UPDATE A TRAIN INTO THE DATABASE
        $updatetrain=TransDepTraining::find($request->id);
        $updatetrain->Title=$request->title;
        $updatetrain->Participants=$request->participants;
        $updatetrain->Starts=$request->starts;
        $updatetrain->Ends=$request->ends;
        $updatetrain->Approval=$request->approval;
        $updatetrain->save();
         return redirect('transport')->with('updatetrain','You have updated training records');
      } 
      public function addtranstrain(Request $request){
        // INSERTING A TRAIN INTO THE DATABASE
         $Train = new TransDepTraining;
         $Train->Title=$request->title;
         $Train->Participants=$request->participants;
         $Train->Starts=$request->starts;
         $Train->Ends=$request->ends;
         $Train->Approval=$request->approval;
         $query=$Train->save();
         return redirect('transport')->with('addtrain','You have added a training record');
      }  
      public function addtranssafety(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $Safety = new TransDepSafety;
         $Safety->Name=$request->name;
         $Safety->Size=$request->size;
         $Safety->Quantity=$request->quantity;
         $query=$Safety->save();
         return redirect('transport')->with('addsafety','You have added a Safety equipment into the Database');
       } 
       public function addtransdefects(Request $request){
        // INSERTING A DEFECTS INTO THE DATABASE
         $Defects = new TransDepDefects;
         $Defects->Name=$request->name;
         $Defects->For=$request->for;
         $Defects->Operator=$request->operator;
         $Defects->Approve=$request->approve;
         $query=$Defects->save();
         return redirect('transport')->with('adddefects','You have added a defect into a Database');
       } 
       //Delete Worker
       public function delete($id){
        $worker=TransDepWorkers::find($id);
        $worker->delete($id);
        return redirect('transport')->with('deleteworker',"You have deleted a worker's record");
       }
      //Delete  Training
      public function deletetranstrain($id){
      $worker=TransDepTraining::find($id);
      $worker->delete($id);
      return redirect('transport')->with('deletetrain','You have deleted a training record');
      }
      //Delete Machine
      public function deletetransmachines($id){
      $worker=TransDepMachines::find($id);
      $worker->delete($id);
      return redirect('transport')->with('deletemachine','You have deleted a machine/tool/equipment record');
  }
   //Delete Safety
   public function deletetranssafety($id){
    $worker=TransDepSafety::find($id);
    $worker->delete($id);
    return redirect('transport')->with('deletesafety','You have deleted safety equipment record');
}
  //Delete Defects
  public function deletetransportdefects($id){
    $worker=TransDepDefects::find($id);
    $worker->delete($id);
    return redirect('transport')->with('deletedefects','You have deleted a defect record');
  }
public function edittransportworker($id){
  $updateworker=TransDepWorkers::find($id);
  return view('qms.editworktransport',['updateworker'=>$updateworker]);
}

public function transportupdateworker(Request $request){
$updateworker=TransDepWorkers::find($request->id);
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
return redirect('transport')->with('updateworker',"You have updated a worker's record");
}
public function edittransportmachine($id){
  $updatemachine=TransDepMachines::find($id);
  return view('qms.editmachinetransport',['updatemachine'=>$updatemachine]);
}

public function transportupdatemachine(Request $request){
$updatemachine=TransDepMachines::find($request->id);
$updatemachine->Name=$request->name;
$updatemachine->For=$request->for;
$updatemachine->Operator=$request->operator;
$updatemachine->Status=$request->status;
$updatemachine->save();
return redirect('transport')->with('updatemachine','You have updated a machine/tool/equipment record');
}
public function editsafetytransport($id){
  $updatesafety=TransDepSafety::find($id);
  return view('qms.editsafetytransport',['updatesafety'=>$updatesafety]);
}
public function transportupdatesafety(Request $request){
$updatesafety=TransDepSafety::find($request->id);
$updatesafety->Name=$request->name;
$updatesafety->Size=$request->size;
$updatesafety->Quantity=$request->quantity;
$updatesafety->save();
return redirect('transport')->with('updatesafety','You have updated a safety equipment record');
}
public function edittransdefects($id){
  $updatedefects=TransDepDefects::find($id);
  return view('qms.editdefectstransport',['updatedefects'=>$updatedefects]);
}

public function transportupdatdefects(Request $request){
$updatedefects=TransDepDefects::find($request->id);
$updatedefects->Name=$request->name;
$updatedefects->For=$request->for;
$updatedefects->Operator=$request->operator;
$updatedefects->Approve=$request->approve;
$updatedefects->save();
return redirect('transport')->with('updatedefects','You have updated a defect record');
}
}
