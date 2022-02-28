<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use PDF;

class demoReportController extends Controller
{
   public function downloadreport(Request $request){


    $highlights =$request->highlight;
    $reportyear =$request->reportyear;
    $challenge =$request->challenge;
    $risk =$request->risk;
    $nextplans =$request->nextplans;
    $by =$request->by;
    $date =$request->date;
      
     
  $pdf = PDF::loadView('qms.demoreportdownload',compact('highlights','reportyear','date','by','risk','challenge'));

  return response()->download($pdf);

   }
}
