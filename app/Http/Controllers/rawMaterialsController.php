<?php

namespace App\Http\Controllers;
use App\Models\SafariRaw;
use App\Models\KiliRaw;
use Illuminate\Support\Facades\DB;
use App\Models\CastleLagerRaw;
use App\Models\CastleLiteRaw;
use Illuminate\Http\Request;

class rawMaterialsController extends Controller
{
    public function rawmaterials(){
      //Retrieve Raw Kili
      $kili=DB::table('kili_raws')
      ->orderBy('id','desc')->get();

      //Retrieve Raw Safari
      $safari=DB::table('safari_raws')
      ->orderBy('id','desc')->get();

      //Retrieve Raw Castle Lager
      $castle_lager=DB::table('castle_lager_raws')
      ->orderBy('id','desc')->get();

      //Retrieve Raw Castle Lite
      $castle_lite=DB::table('castle_lite_raws')
      ->orderBy('id','desc')->get();

      $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();

        return view('qms.rawmaterials',['kili'=>$kili,'announce'=>$announce,'safari'=>$safari,'castle_lager'=>$castle_lager,'castle_lite'=>$castle_lite]);
    }
    public function addkiliraw(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new KiliRaw;
         $raw->Name=$request->name;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rawmaterials');
      } 
      public function addsafariraw(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new SafariRaw;
         $raw->Name=$request->name;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rawmaterials');
      } 
      public function addclagerraw(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new CastleLagerRaw;
         $raw->Name=$request->name;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rawmaterials');
      }
      public function addcliteraw(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new CastleLiteRaw;
         $raw->Name=$request->name;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rawmaterials');
      }
}
