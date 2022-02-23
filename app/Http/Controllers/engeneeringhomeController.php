<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\EngDepWorkers;
use App\Models\EngDepMachines;
use App\Models\sopModel;
use Illuminate\Support\Facades\Storage;
use Illuminate\Http\Request;
use App\Models\EngDepSafety;
use App\Models\EngDepDefects;
use App\Models\EngDepTraining;

class engeneeringhomeController extends Controller
{
    public function engeneers(){
      // Retrieving Workers Data
      $data=DB::table('eng_dep_workers')
      ->orderBy('id', 'desc')->get();
       
      // Retrieving Machines Data
      $machine=DB::table('eng_dep_machines')
      ->orderBy('id','desc')->get();

      $audit=DB::table('audit_histories')
        ->orderBy('id','desc')->get();
      
      //Retrieving Defects Data
      $defects=DB::table('eng_dep_defects')
      ->orderBy('id','desc')->get();

      //Retrieving SOPs 
      $sop=DB::table('sop_models')
      ->orderBy('id','desc')->get();

      //Rerieving Trainings
      $engtrain=DB::table('eng_dep_trainings')
      ->orderBy('id','desc')->get();

      //Retrieving Safety Data
      $safety=DB::table('eng_dep_safeties')
      ->orderBy('id','desc')->get();

      $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();

      $nonC=DB::table('non_conformities')
        ->orderBy('id','desc')->get();

      return view('qms.engeneers',['machine'=>$machine,'nonC'=>$nonC,'audit'=>$audit,'announce'=>$announce,'data'=>$data,'engtrain'=>$engtrain,'safety'=>$safety,'defects'=>$defects,'sop'=>$sop]);
    }

    public function addworker(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $worker = new EngDepWorkers;
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
         return redirect('engeneers')->with('addworker','You have added a worker into the Department');
      }  

      
     //Delete Worker
     public function delete($id){
      $worker=EngDepWorkers::find($id);
      $worker->delete($id);
      return redirect('engeneers')->with('deleteworker','You have deleted a worker from the Database');
  }
    
      //Delete Machine
      public function deleteenginemachine($id){
        $worker=EngDepMachines::find($id);
        $worker->delete($id);
        return redirect('engeneers')->with('deletemachine','You have deleted a machine\equipment\tool from the Database');
    }
    public function deleteenginetrain($id){
      $worker=EngDepTraining::find($id);
      $worker->delete($id);
      return redirect('engeneers')->with('deletetrain','You have deleted a Training Record from the Database');
  }
     //Delete Safety
     public function deleteenginesafety($id){
      $worker=EngDepSafety::find($id);
      $worker->delete($id);
      return redirect('engeneers')->with('deletesafety','You have deleted a Safety Equipment from the Database');
  }
  //Delete Defects
  public function deleteenginedefects($id){
    $worker=EngDepDefects::find($id);
    $worker->delete($id);
    return redirect('engeneers')->with('deletedefects','You have deleted a Defect from the Database');
}
//Delete SOP
public function deleteengsop($id){
  $sop=sopModel::find($id);
  $sop->delete($id);
  return redirect()->back()->with('deletesop','You have deleted an SOP document from the Database');
}
      public function addengmachines(Request $request){
        // INSERTING A MACHINE INTO THE DATABASE
         $Machine = new EngDepMachines;
         $Machine->Name=$request->name;
         $Machine->For=$request->for;
         $Machine->Operator=$request->operator;
         $Machine->Status=$request->status;
         $query=$Machine->save();
         return redirect('engeneers')->with('addmachine','You have added a new machine\tool\equipment into the Database');
      }  
      public function addengtrain(Request $request){
        // INSERTING A TRAIN INTO THE DATABASE
         $Train = new EngDepTraining;
         $Train->Title=$request->title;
         $Train->Participants=$request->participants;
         $Train->Starts=$request->starts;
         $Train->Ends=$request->ends;
         $Train->Approval=$request->approval;
         $query=$Train->save();
         return redirect('engeneers')->with('addtrain','You have added a Training Record into the Database');
      } 
      public function updateengtrain(Request $request){
        // UPDATE A TRAIN INTO THE DATABASE
        $updatetrain=EngDepTraining::find($request->id);
        $updatetrain->Title=$request->title;
        $updatetrain->Participants=$request->participants;
        $updatetrain->Starts=$request->starts;
        $updatetrain->Ends=$request->ends;
        $updatetrain->Approval=$request->approval;
        $updatetrain->save();
         return redirect('engeneers')->with('updatetrain','You have updated Training records');
      } 
      public function addengsafety(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $Safety = new EngDepSafety;
         $Safety->Name=$request->name;
         $Safety->Size=$request->size;
         $Safety->Quantity=$request->quantity;
         $query=$Safety->save();
         return redirect('engeneers')->with('addsafety','You have added a Safety Equipemnt into the Database');
      } 
      public function addengdefects(Request $request){
        // INSERTING DEFECTS INTO THE DATABASE
         $Defects = new EngDepDefects;
         $Defects->Name=$request->name;
         $Defects->For=$request->for;
         $Defects->Operator=$request->operator;
         $Defects->Approve=$request->approve;
         $query=$Defects->save();
         return redirect('engeneers')->with('adddefects','You have added a Defect into the Database');
      }
      public function editengineeworker($id){
        $updateworker=EngDepWorkers::find($id);
        return view('qms.editworkengine',['updateworker'=>$updateworker]);
    }
    public function edittrainengine($id){
      $updatetrain=EngDepTraining::find($id);
      return view('qms.edittrainengine',['updatetrain'=> $updatetrain]);
  }

    public function engineupdateworker(Request $request){
      $updateworker=EngDepWorkers::find($request->id);
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
      return redirect('engeneers')->with('updateworker',"You have updated a worker's record..");
  }
  public function editenginemachine($id){
    $updatemachine=EngDepMachines::find($id);
    return view('qms.editmachineengine',['updatemachine'=>$updatemachine]);
}

public function engineupdatemachine(Request $request){
  $updatemachine=EngDepMachines::find($request->id);
  $updatemachine->Name=$request->name;
  $updatemachine->For=$request->for;
  $updatemachine->Operator=$request->operator;
  $updatemachine->Status=$request->status;
  $updatemachine->save();
  return redirect('engeneers')->with('updatemachine','You have updated machine\tool\equipment record');
}
public function editsafetyengine($id){
  $updatesafety=EngDepSafety::find($id);
  return view('qms.editsafetyengine',['updatesafety'=>$updatesafety]);
}

public function engineupdatesafety(Request $request){
$updatesafety=EngDepSafety::find($request->id);
$updatesafety->Name=$request->name;
$updatesafety->Size=$request->size;
$updatesafety->Quantity=$request->quantity;
$updatesafety->save();
return redirect('engeneers')->with('updatesafety',"You have updated Safety Equipment's record");
}
public function editdefectsengine($id){
  $updatedefects=EngDepDefects::find($id);
  return view('qms.editdefectsengine',['updatedefects'=>$updatedefects]);
}

public function engineupdatedefects(Request $request){
$updatedefects=EngDepDefects::find($request->id);
$updatedefects->Name=$request->name;
$updatedefects->For=$request->for;
$updatedefects->Operator=$request->operator;
$updatedefects->Approve=$request->approve;
$updatedefects->save();
return redirect('engeneers')->with('updatedefects','You have updated defects records');
}
}
