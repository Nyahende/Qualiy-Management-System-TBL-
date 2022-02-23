<?php

namespace App\Http\Controllers;
use App\Models\ReleasedKili;
use App\Models\ReleasedSafari;
use App\Models\ReleasedCastleLager;
use App\Models\ReleasedCastleLite;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class releasedProductsController extends Controller
{
    public function releasedproducts(){
      //Retrieving Released Safaris
      $safari=DB::table('released_safaris')
      ->orderBy('id','desc')->get();

      //Retrieving Castle Lager
      $castle_lager=DB::table('released_castle_lagers')
      ->orderBy('id','desc')->get();

      //Retrieving Castle Lite
      $castle_lites=DB::table('released_castle_lites')
      ->orderBy('id','desc')->get();

      //Retrieving Released Kilis
      $kili=DB::table('released_kilis')
      ->orderBy('id','desc')->get();

      $announce=DB::table('announcements')
      ->orderBy('id','desc')->get();

        return view('qms.releasedproducts',['safari'=>$safari,'announce'=>$announce,'castle_lager'=>$castle_lager,'castle_lites'=>$castle_lites,'kili'=>$kili]);
    }
    public function addreleasedkili(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new ReleasedKili;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('released')->with('addkili','You have added released kilimanjaro into the Database');
      }
      public function addreleasedsafari(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new ReleasedSafari;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('released')->with('addsafari','You have added Safari into the Database');
      }
      public function addreleasedclager(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new ReleasedCastleLager;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('released')->with('addclager','You have added Castle Lager into the Database');
      }
      public function addreleasedclite(Request $request){
        // INSERTING A SAFETY INTO THE DATABASE
         $raw = new ReleasedCastleLite;
         $raw->Quantity=$request->quantity;
         $raw->Date=$request->date;
         $raw->Approval=$request->approval;
         $query=$raw->save();
         return redirect('released')->with('addclite','You have added Castle Lite into the Database');
      }
}
