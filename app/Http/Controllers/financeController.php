<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\FinanceDepWorkers;
use App\Models\sopModel;
use App\Models\FinanceDepSafety;
use App\Models\FinanceDepMachines;
use App\Models\FinanceDepDefects;
use App\Models\FinanceDepTraining;
class financeController extends Controller
{
    public function finance(){
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

      $announce = DB::table('announcements')
        ->orderBy('id','desc')->get();

        $audit=DB::table('audit_histories')
        ->orderBy('id','desc')->get();

        $nonC=DB::table('non_conformities')
        ->orderBy('id','desc')->get();

      //Retrieving SOPs 
      $sop=DB::table('sop_models')
      ->orderBy('id','desc')->get();
      return view('qms.finance',['data'=>$data,'announce'=>$announce,'nonC'=> $nonC,'audit'=>$audit,'financetrain'=>$financetrain,'machine'=>$machine,'safety'=>$safety,'defects'=>$defects,'sop'=>$sop]);
    }
    public function financeaddworker(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $worker = new FinanceDepWorkers;
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
         return redirect('finance')->with('addworker','You have added a new worker into the Database');
      }  
      public function addfinancemachines(Request $request){
        // INSERTING A WORKER INTO THE DATABASE
         $Machine = new FinanceDepMachines;
         $Machine->Name=$request->name;
         $Machine->For=$request->for;
         $Machine->Operator=$request->operator;
         $Machine->Status=$request->status;
         $query=$Machine->save();
         return redirect('finance')->with('addmachine','You have added a new machine\tool\equipment into the Database');
      } 
      public function addfinancesafety(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $Safety = new FinanceDepSafety;
         $Safety->Name=$request->name;
         $Safety->Size=$request->size;
         $Safety->Quantity=$request->quantity;
         $query=$Safety->save();
         return redirect('finance')->with('addsafety','You have added a safety Equipment into the Database');
      } 
      public function addfinancedefects(Request $request){
        // INSERTING DEFECTS INTO THE DATABASE
         $Defects = new FinanceDepDefects;
         $Defects->Name=$request->name;
         $Defects->For=$request->for;
         $Defects->Operator=$request->operator;
         $Defects->Approve=$request->approve;
         $query=$Defects->save();
         return redirect('finance')->with('adddefects','You have added a defect into the Database');
      } 

      //Delete Worker
      public function delete($id){
        $worker=FinanceDepWorkers::find($id);
        $worker->delete($id);
        return redirect('finance')->with('deleteworker','Yuo have deleted a worker from the Database');
    }
    //Delete  Machine
    public function deletefinancemachine($id){
      $worker=FinanceDepMachines::find($id);
      $worker->delete($id);
      return redirect('finance')->with('deletemachine','You have deleted a machine\tool\equipment from the Database');
  }
   //Delete  Safety
   public function deletefinancesafety($id){
    $worker=FinanceDepSafety::find($id);
    $worker->delete($id);
    return redirect('finance')->with('deletesafety','You have deleted a safety equipment from the Database');
}

public function deletefinancesop($id){
  $sop=sopModel::find($id);
  $sop->delete($id);
  return redirect()->back()->with('deletesop','You have deleted an SOP document from the Database');
}
//Delete  Training
public function deletefinancetrain($id){
  $worker=FinanceDepTraining::find($id);
  $worker->delete($id);
  return redirect('finance')->with('deletetrain','You have deleted a Training record from the Database');
}
//Delete Defects
public function deletefinancedefects($id){
  $worker=FinanceDepDefects::find($id);
  $worker->delete($id);
  return redirect('finance')->with('deletedefects','You have deleted a defect from the Database');
}
public function deleteenginetrain($id){
  $worker=FinanceDepTraining::find($id);
  $worker->delete($id);
  return redirect('finance')->with('deletetrain','You have deleted a Training record from the Database');
}
public function editfinanceworker($id){
  $updateworker=FinanceDepWorkers::find($id);
  return view('qms.editworkfinance',['updateworker'=>$updateworker]);
}

public function financeupdateworker(Request $request){
$updateworker=FinanceDepWorkers::find($request->id);
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
return redirect('finance')->with('updateworker',"You have updated a worker's record");
}
public function addfinancetrain(Request $request){
  // INSERTING A TRAIN INTO THE DATABASE
   $Train = new FinanceDepTraining;
   $Train->Title=$request->title;
   $Train->Participants=$request->participants;
   $Train->Starts=$request->starts;
   $Train->Ends=$request->ends;
   $Train->Approval=$request->approval;
   $query=$Train->save();
   return redirect('finance')->with('addtrain','You have added a Training record from the Database');
} 
public function edittrainfinance($id){
  $updatetrain=FinanceDepTraining::find($id);
  return view('qms.edittrainfinance',['updatetrain'=> $updatetrain]);
}
public function updatefinancetrain(Request $request){
  // UPDATE A TRAIN INTO THE DATABASE
  $updatetrain=FinanceDepTraining::find($request->id);
  $updatetrain->Title=$request->title;
  $updatetrain->Participants=$request->participants;
  $updatetrain->Starts=$request->starts;
  $updatetrain->Ends=$request->ends;
  $updatetrain->Approval=$request->approval;
  $updatetrain->save();
   return redirect('finance')->with('updatetrain','You have updated a training record from the Database');
} 
public function editmachinefinance($id){
  $updatemachine=FinanceDepMachines::find($id);
  return view('qms.editmachinefinance',['updatemachine'=>$updatemachine]);
}

public function machineupdatfinance(Request $request){
$updatemachine=FinanceDepMachines::find($request->id);
$updatemachine->Name=$request->name;
$updatemachine->For=$request->for;
$updatemachine->Operator=$request->operator;
$updatemachine->Status=$request->status;
$updatemachine->save();
return redirect('finance')->with('updatemachine','You have updated a machine\too\equipment record');
}
public function editsafetyfinance($id){
  $updatesafety=FinanceDepSafety::find($id);
  return view('qms.editsafetyfinance',['updatesafety'=>$updatesafety]);
}
public function financeupdatesafety(Request $request){
$updatesafety=FinanceDepSafety::find($request->id);
$updatesafety->Name=$request->name;
$updatesafety->Size=$request->size;
$updatesafety->Quantity=$request->quantity;
$updatesafety->save();
return redirect('finance')->with('updatesafety','You have updated a safety equipment record');
}
public function editdefectsfinance($id){
  $updatedefects=FinanceDepDefects::find($id);
  return view('qms.editdefectsfinance',['updatedefects'=>$updatedefects]);
}

public function financeupdatedefects(Request $request){
$updatedefects=FinanceDepDefects::find($request->id);
$updatedefects->Name=$request->name;
$updatedefects->For=$request->for;
$updatedefects->Operator=$request->operator;
$updatedefects->Approve=$request->approve;
$updatedefects->save();
return redirect('finance')->with('updatedefects','You have updated defects records');
}
}
