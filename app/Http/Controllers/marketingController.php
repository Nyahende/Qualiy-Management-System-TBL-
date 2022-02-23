<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\MarketingDepWorkers;
use App\Models\sopModel;
use App\Models\MarketingDepSafety;
use App\Models\MarketingDepDefects;
use App\Models\MarketingDepMachines;
use App\Models\MarketingDepTraining;

class marketingController extends Controller
{
   public function marketing(){
          // Retrieving Workers Data
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

           //Retrieving SOPs 
           $sop=DB::table('sop_models')
          ->orderBy('id','desc')->get();

          $nonC=DB::table('non_conformities')
          ->orderBy('id','desc')->get();

          $announce=DB::table('announcements')
          ->orderBy('id','desc')->get();

          $audit=DB::table('audit_histories')
        ->orderBy('id','desc')->get();

           return view('qms.marketing',['machine'=>$machine,'audit'=>$audit,'nonC'=>$nonC,'announce'=>$announce,'marketingtrain'=>$marketingtrain,'data'=>$data,'safety'=>$safety,'defects'=>$defects,'sop'=>$sop]);
   }
   public function marketingaddworker(Request $request){
    // INSERTING A WORKER INTO THE DATABASE
     $worker = new MarketingDepWorkers;
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
     return redirect('marketing')->with('addworker','You have added a worker into the Database');
  }  
  public function addmarketingtrain(Request $request){
    // INSERTING A TRAIN INTO THE DATABASE
     $Train = new MarketingDepTraining;
     $Train->Title=$request->title;
     $Train->Participants=$request->participants;
     $Train->Starts=$request->starts;
     $Train->Ends=$request->ends;
     $Train->Approval=$request->approval;
     $query=$Train->save();
     return redirect('marketing')->with('addtrain','You have added a Training record');
  } 
  public function addmarketingmachines(Request $request){
    // INSERTING A WORKER INTO THE DATABASE
     $Machine = new MarketingDepMachines;
     $Machine->Name=$request->name;
     $Machine->For=$request->for;
     $Machine->Operator=$request->operator;
     $Machine->Status=$request->status;
     $query=$Machine->save();
     return redirect('marketing')->with('addmachine','You have added a machine\tool\equipment into the Database');
  } 
  public function addmarketingsafety(Request $request){
   // INSERTING A SAFETY INTO THE DATABASE
    $Safety = new MarketingDepSafety;
    $Safety->Name=$request->name;
    $Safety->Size=$request->size;
    $Safety->Quantity=$request->quantity;
    $query=$Safety->save();
    return redirect('marketing')->with('addsafety','You have added a safety equipment into the Database');
 } 
 public function addmarketingdefects(Request $request){
   // INSERTING DEFECTS INTO THE DATABASE
    $Defects = new MarketingDepDefects;
    $Defects->Name=$request->name;
    $Defects->For=$request->for;
    $Defects->Operator=$request->operator;
    $Defects->Approve=$request->approve;
    $query=$Defects->save();
    return redirect('marketing')->with('adddefects','You have added a defect into the Database');
 } 
    //Delete Worker
    public function delete($id){
      $worker=MarketingDepWorkers::find($id);
      $worker->delete($id);
      return redirect('marketing')->with('deleteworker','You have deleted a worker from the Database');
  }
   //Delete Machine
   public function deletemarketingmachines($id){
      $worker=MarketingDepMachines::find($id);
      $worker->delete($id);
      return redirect('marketing')->with('deletemachine','You have deleted a machine\tool\equipment from the Database');
  }
   //Delete Safety
   public function deletemarketingsafety($id){
      $worker=MarketingDepSafety::find($id);
      $worker->delete($id);
      return redirect('marketing')->with('deletesafety','You have deleted a safety equipment from the Database');
  }
  // Delete SOP
  public function deletemarketingsop($id){
    $sop=sopModel::find($id);
    $sop->delete($id);
    return redirect()->back()->with('deletesop','You have deleted an SOP document from the Database');
  }
  //Delete Defects
public function deletemarketingdefects($id){
  $worker=MarketingDepDefects::find($id);
  $worker->delete($id);
  return redirect('marketing')->with('deletedefects','You have delete a defect from the Database');
}
  //Delete Trainings
  public function deletemarketingtrain($id){
    $worker=MarketingDepTraining::find($id);
    $worker->delete($id);
    return redirect('marketing')->with('deletetrain','You have deleted a training record from the Database');
}
  public function editmarketingworker($id){
   $updateworker=MarketingDepWorkers::find($id);
   return view('qms.editworkmarketing',['updateworker'=>$updateworker]);
 }
 public function edittrainmarketing($id){
  $updatetrain=MarketingDepTraining::find($id);
  return view('qms.edittrainmarketing',['updatetrain'=> $updatetrain]);
}
public function updatemarketingtrain(Request $request){
  // UPDATE A TRAIN INTO THE DATABASE
  $updatetrain=MarketingDepTraining::find($request->id);
  $updatetrain->Title=$request->title;
  $updatetrain->Participants=$request->participants;
  $updatetrain->Starts=$request->starts;
  $updatetrain->Ends=$request->ends;
  $updatetrain->Approval=$request->approval;
  $updatetrain->save();
   return redirect('marketing')->with('updatetrain','You have updataed training record');
} 
 public function marketingupdateworker(Request $request){
 $updateworker=MarketingDepWorkers::find($request->id);
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
 return redirect('marketing')->with('updateworker',"You have updated worker's records");
 }
 public function editmachinemarketing($id){
   $updatemachine=marketingDepMachines::find($id);
   return view('qms.editmachinemarketing',['updatemachine'=>$updatemachine]);
 }
 
 public function marketingupdatemachine(Request $request){
 $updatemachine=MarketingDepMachines::find($request->id);
 $updatemachine->Name=$request->name;
 $updatemachine->For=$request->for;
 $updatemachine->Operator=$request->operator;
 $updatemachine->Status=$request->status;
 $updatemachine->save();
 return redirect('marketing')->with('updatemachine','You have updated a machine\tool\equipment records');
 }
 public function editsafetymarketing($id){
   $updatesafety=MarketingDepSafety::find($id);
   return view('qms.editsafetymarketing',['updatesafety'=>$updatesafety]);
 }
 public function marketingupdatesafety(Request $request){
 $updatesafety=MarketingDepSafety::find($request->id);
 $updatesafety->Name=$request->name;
 $updatesafety->Size=$request->size;
 $updatesafety->Quantity=$request->quantity;
 $updatesafety->save();
 return redirect('marketing')->with('updatesafety','You have updated safety equipment records');
 }
 public function editmarketingdefects($id){
   $updatedefects=MarketingDepDefects::find($id);
   return view('qms.editdefectsmarketing',['updatedefects'=>$updatedefects]);
 }
 
 public function marketingupdatedefects(Request $request){
 $updatedefects=MarketingDepDefects::find($request->id);
 $updatedefects->Name=$request->name;
 $updatedefects->For=$request->for;
 $updatedefects->Operator=$request->operator;
 $updatedefects->Approve=$request->approve;
 $updatedefects->save();
 return redirect('marketing')->with('updatedefects','You have updated defects records');
 }
 
}
