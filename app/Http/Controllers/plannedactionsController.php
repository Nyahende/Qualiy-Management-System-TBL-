<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\plannedAction;
class plannedactionsController extends Controller
{
   public function plannedactions(){
       $actions=DB::table('planned_actions')
       ->orderBy('id','desc')->get();

       $announce = DB::table('announcements')
       ->orderBy('id','desc')->get();

       return view('qms.plannedactions',['actions'=>$actions,'announce'=>$announce]);
   }
   public function uploadfile(Request $request){
        
    $data=new plannedAction;
    $file=$request->file;
    $filename=time().'.'.$file->getClientOriginalExtension();
    $request->file->move('assets',$filename);
    $data->file=$filename;
    $data->Name=$request->name;
    $data->Date=$request->date;
    $query=$data->save();
    return redirect()->back()->with('addaction','You have added a Planned Action(s)');
}
public function downloadaction(Request $request,$file){
         return response()->download(public_path('assets/'.$file));
}
public function viewaction(Request $request,$file){
    return response()->file(public_path('assets/'.$file));
}
}
