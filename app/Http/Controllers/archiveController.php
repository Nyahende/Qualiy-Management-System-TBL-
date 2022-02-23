<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Archives;

class archiveController extends Controller
{
    public function archive(){

        $announce = DB::table('announcements')
        ->orderBy('id','desc')->get();

        $archive = DB::table('archives')
        ->orderBy('id','desc')->get();

        return view('qms.archive',['announce'=>$announce,'archive'=>$archive]);
    }

    public function uploadarchive(Request $request){
        
        $data=new Archives;
        $file=$request->file;
        $filename=time().'.'.$file->getClientOriginalExtension();
        $request->file->move('assets',$filename);
        $data->file=$filename;  
        $data->Name=$request->name;
        $data->Date=$request->date;
        $query=$data->save();
        return redirect()->back()->with('addarchive','You have added a new document in Archive');
    }
    public function downladarchive(Request $request,$file){
             return response()->download(public_path('assets/'.$file));
    }
    public function viewarchive(Request $request,$file){
        return response()->file(public_path('assets/'.$file));
    }
}
