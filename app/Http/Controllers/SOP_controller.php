<?php

namespace App\Http\Controllers;
use App\Models\sopModel;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;

class SOP_controller extends Controller
{
    public function SOP(){
        $sop=DB::table('sop_models')
        ->orderBy('id','desc')->get();

        $announce=DB::table('announcements')
        ->orderBy('id','desc')->get();
            
        return view('qms.SOP',['sop'=>$sop,'announce'=>$announce]);
    }

    //UPLOADING QC SOP
    public function uploadsop(Request $request){
        
        $data=new sopModel;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;
 
        $data->Name=$request->name;
        $data->Department=$request->department;
        $data->Date=$request->date;
        $query=$data->save();
        return redirect()->back()->with('addsop','You have added an SOP document');
    }
    public function download(Request $request,$file){
             return response()->download(public_path('assets/'.$file));
    }
    public function view(Request $request,$file){
        return response()->file(public_path('assets/'.$file));
    }
    public function deletesop($id){
        $sop=sopModel::find($id);
        $sop->delete($id);
        return redirect()->back()->with('deletesop','You have deleted an SOP document');
      }
}
