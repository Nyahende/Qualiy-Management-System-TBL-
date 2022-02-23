<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Releasedkili;
use PDF;

class pdfController extends Controller
{
   public function getallreleasedkili(){
       $kili = ReleasedKili::all();
       return view('qms.kili',compact('kili'));
   }
   public function downloadreport(){
       $kili = ReleasedKili::all();
       $pdf = PDF::loadView('qms.kili',compact('kili'));
       return $pdf->download('kili.pdf');
   }
}
