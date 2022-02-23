<?php

namespace App\Http\Controllers;
use App\Models\KiliRejects;
use App\Models\SafariRejects;
use App\Models\CastleLagerRejects;
use App\Models\CastleLiteRejects;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class rejectsController extends Controller
{
    public function rejects(){
      //Kili Rejects
      $kili=DB::table('kili_rejects')
      ->orderBy('id','desc')->get();

      //Safari Rejects
      $safari=DB::table('safari_rejects')
      ->orderBy('id','desc')->get();

      //Castle_lager
      $castle_lager=DB::table('castle_lager_rejects')
      ->orderBy('id','desc')->get();

      //Castle_lite
      $castle_lite=DB::table('castle_lite_rejects')
      ->orderBy('id','desc')->get();

      $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();

        return view('qms.rejects',['kili'=>$kili,'announce'=>$announce,'safari'=>$safari,'castle_lager'=>$castle_lager,'castle_lite'=>$castle_lite]);
    }
    public function addkilirejects(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new KiliRejects;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rejects')->with('addkilirej','Yuo have added Kilimanjaro rejects into the Database');
      }
      public function addsafarirejects(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new SafariRejects;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rejects')->with('addsafarirej','You have added Safari rejects into the Database');
      }
      public function addcastlelagerrejects(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new CastleLagerRejects;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rejects')->with('addclagerrej','You have added Castle Lager into the Database');
      }
      public function addcastleliterejects(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new CastleLiteRejects;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('rejects')->with('addcliterej','You have added Castle Lite into the Database');
      }
}
