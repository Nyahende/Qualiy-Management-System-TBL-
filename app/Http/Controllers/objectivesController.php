<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use Illuminate\Http\Request;
use App\Models\objectives;

class objectivesController extends Controller
{
    public function objectives(){
        $objective =DB::table('objectives')
        ->orderBy('id','desc')->get();

        $announce = DB::table('announcements')
        ->orderBy('id','desc')->get();
        return view('qms.objectives',['objective'=>$objective,'announce'=>$announce]);
    }
    public function uploadobjective(Request $request){
        
        $data=new objectives;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;
    
        $data->Name=$request->name;
        $data->Date=$request->date;
        $query=$data->save();
        return redirect()->back()->with('addobjective','You have added Objective(s) into the Database');
    }
    public function downloadobjective(Request $request,$file){
             return response()->download(public_path('assets/'.$file));
    }
    public function viewobjective(Request $request,$file){
        return response()->file(public_path('assets/'.$file));
    }
}
