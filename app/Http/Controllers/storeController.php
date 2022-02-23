<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\StoreDepWorkers;
use App\Models\StoreDepMachines;
use App\Models\StoreDepSafety;
use App\Models\StoreDepDefects;
use App\Models\sopModel;
use App\Models\StoreDepTraining;
use Illuminate\Http\Request;

class storeController extends Controller
{
    public function store(){
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

       //Retrieving SOPs 
       $sop=DB::table('sop_models')
       ->orderBy('id','desc')->get();

       $audit=DB::table('audit_histories')
       ->orderBy('id','desc')->get();

       $nonC=DB::table('non_conformities')
       ->orderBy('id','desc')->get();

       $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();
 
      return view('qms.store',['machine'=>$machine,'nonC'=>$nonC,'audit'=>$audit,'announce'=>$announce,'storetrain'=> $storetrain,'data'=>$data,'safety'=>$safety,'defects'=>$defects,'sop'=>$sop]);
    }
    public function storeaddworker(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $worker = new StoreDepWorkers;
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
         return redirect('store')->with('addworker','You have added a worker into the Database');
      } 
      public function addstoremachines(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $Machine = new StoreDepMachines;
         $Machine->Name=$request->name;
         $Machine->For=$request->for;
         $Machine->Operator=$request->operator;
         $Machine->Status=$request->status;
         $query=$Machine->save();
         return redirect('store')->with('addmachine','You have added a machine\tool\equipment into the Database');
      }  
      public function addstoresafety(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $Safety = new StoreDepSafety;
         $Safety->Name=$request->name;
         $Safety->Size=$request->size;
         $Safety->Quantity=$request->quantity;
         $query=$Safety->save();
         return redirect('store')->with('addsafety','You have added a safety equipment into the Database');
      } 
      public function edittrainstore($id){
        $updatetrain=StoreDepTraining::find($id);
        return view('qms.edittrainstore',['updatetrain'=> $updatetrain]);
      }
      public function updatestoretrain(Request $request){
        // UPDATE A TRAIN INTO THE DATABASE
        $updatetrain=StoreDepTraining::find($request->id);
        $updatetrain->Title=$request->title;
        $updatetrain->Participants=$request->participants;
        $updatetrain->Starts=$request->starts;
        $updatetrain->Ends=$request->ends;
        $updatetrain->Approval=$request->approval;
        $updatetrain->save();
         return redirect('store')->with('updatetrain','You have updated a training record');
      } 
      public function addstoretrain(Request $request){
        // INSERTING A TRAIN INTO THE DATABASE
         $Train = new StoreDepTraining;
         $Train->Title=$request->title;
         $Train->Participants=$request->participants;
         $Train->Starts=$request->starts;
         $Train->Ends=$request->ends;
         $Train->Approval=$request->approval;
         $query=$Train->save();
         return redirect('store')->with('addtrain','You have added a training record into the Database');
      } 
      public function addstoredefects(Request $request){
        // INSERTING DEFECTS INTO THE DATABASE
         $Defects = new StoreDepDefects;
         $Defects->Name=$request->name;
         $Defects->For=$request->for;
         $Defects->Operator=$request->operator;
         $Defects->Approve=$request->approve;
         $query=$Defects->save();
         return redirect('store')->with('adddefects','You have added a defect into the Database');
      } 
         //Delete Worker
         public function delete($id){
          $worker=StoreDepWorkers::find($id);
          $worker->delete($id);
          return redirect('store')->with('deleteworker','You have deleted a worker from the Database');
      }
       //Delete Machine
       public function deletestoremachine($id){
        $worker=StoreDepMachines::find($id);
        $worker->delete($id);
        return redirect('store')->with('deletemachine','You have deleted a machine\tool\equipment record');
    }
    //Delete SOP
public function deletestoresop($id){
  $sop=sopModel::find($id);
  $sop->delete($id);
  return redirect()->back()->with('deletesop','You have deleted an SOP document from the Database');
}
    //Delete  Training
     public function deletestoretrain($id){
      $worker=StoreDepTraining::find($id);
     $worker->delete($id);
     return redirect('store')->with('deletetrain','You have deleted a training record');
     }
     //Delete Safety
     public function deletestoresafety($id){
      $worker=StoreDepSafety::find($id);
      $worker->delete($id);
      return redirect('store')->with('deletesafety','You have deleted a safety equipment from the Database');
  }
  //Delete Defects
public function deletestoredefects($id){
  $worker=StoreDepDefects::find($id);
  $worker->delete($id);
  return redirect('store')->with('deletedefects','You have deleted a defect from the Database');
}
  public function editstoreworker($id){
    $updateworker=StoreDepWorkers::find($id);
    return view('qms.editworkstore',['updateworker'=>$updateworker]);
  }
  
  public function storeupdateworker(Request $request){
  $updateworker=StoreDepWorkers::find($request->id);
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
  return redirect('store')->with('updateworker',"You have updated a worker's record");
  }
  public function editstoremachine($id){
    $updatemachine=StoreDepMachines::find($id);
    return view('qms.editmachinestore',['updatemachine'=>$updatemachine]);
  }
  
  public function storeupdatmachine(Request $request){
  $updatemachine=StoreDepMachines::find($request->id);
  $updatemachine->Name=$request->name;
  $updatemachine->For=$request->for;
  $updatemachine->Operator=$request->operator;
  $updatemachine->Status=$request->status;
  $updatemachine->save();
  return redirect('store')->with('updatemachine','You have updated a machine\tool\equipment record');
  }
  public function editstoresafety($id){
    $updatesafety=StoreDepSafety::find($id);
    return view('qms.editsafetystore',['updatesafety'=>$updatesafety]);
  }
  public function storeupdatsafety(Request $request){
  $updatesafety=StoreDepSafety::find($request->id);
  $updatesafety->Name=$request->name;
  $updatesafety->Size=$request->size;
  $updatesafety->Quantity=$request->quantity;
  $updatesafety->save();
  return redirect('store')->with('updatesafety','You have updated a safety equipment record');
  }
  public function editstoredefects($id){
    $updatedefects=StoreDepDefects::find($id);
    return view('qms.editdefectsstore',['updatedefects'=>$updatedefects]);
  }
  
  public function storeupdatdefects(Request $request){
  $updatedefects=StoreDepDefects::find($request->id);
  $updatedefects->Name=$request->name;
  $updatedefects->For=$request->for;
  $updatedefects->Operator=$request->operator;
  $updatedefects->Approve=$request->approve;
  $updatedefects->save();
  return redirect('store')->with('updatedefects','You have updated a defect record');
  }
}

