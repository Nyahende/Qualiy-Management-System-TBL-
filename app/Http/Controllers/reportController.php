<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\ReleasedKili;
use Illuminate\Support\Facades\DB;
use PDF;


class reportController extends Controller
{
    public function reportdownload(Request $request){

// GETTING MONTHLY DATA FOR RELEASED KILI

        $dataRec= [];
        for ($i=1; $i<=12; $i++) {
      
          $reportyear = $request->reportyear;
          $data = DB::table('released_kilis')
                          ->whereYear('created_at', $reportyear)                  
                          ->whereMonth('created_at', $i)
                          ->sum('Quantity');
            $intdata = (int)$data;
          array_push($dataRec,$intdata);
          $maximum = max($dataRec);
          $min = min($dataRec);

          $total = DB::table('released_kilis')->whereYear('created_at', $reportyear)->sum('Quantity');
            $avg = $total/12;
          }    
          
    // GETTING MONTHLY DATA FOR KILI REJECTS
          
      $KiliRej= [];
      for ($i=1; $i<=12; $i++) {
        
        $kilirejdata = DB::table('kili_rejects')
                        ->whereYear('created_at', $reportyear)                  
                        ->whereMonth('created_at', $i)
                        ->sum('Quantity');
          $intkilirejdata = (int)$kilirejdata;
        array_push($KiliRej,$intkilirejdata);
        $maximumrej = max($KiliRej);
        $minrej = min($KiliRej);
        $rejtotal = DB::table('kili_rejects')->whereYear('created_at', $reportyear)->sum('Quantity');
            $rejavg = $rejtotal/12;
        }
          
        // MONTHLY RELEASED SAFARI

        $safaridataRec= [];
        for ($i=1; $i<=12; $i++) {
          $reportyear = $request->reportyear;
          $safaridata = DB::table('released_safaris')
                          ->whereYear('created_at', $reportyear)                  
                          ->whereMonth('created_at', $i)
                          ->sum('Quantity');
            $safariintdata = (int)$safaridata;
          array_push($safaridataRec,$safariintdata);
          $safarimaximum = max($safaridataRec);
          $safarimin = min($safaridataRec);
          $safaritotal = DB::table('released_safaris')->whereYear('created_at', $reportyear)->sum('Quantity');
            $safariavg = $safaritotal/12;
          }    
          
          // MONTHLY SAFARI REJECTS

      $SafariRej= [];
      for ($i=1; $i<=12; $i++) {
        
        $safarirejdata = DB::table('safari_rejects')
                        ->whereYear('created_at', $reportyear)                  
                        ->whereMonth('created_at', $i)
                        ->sum('Quantity');
          $intsafarirejdata = (int)$safarirejdata;
        array_push($SafariRej,$intsafarirejdata);
        $safarimaximumrej = max($SafariRej);
        $safariminrej = min($SafariRej);
        $safarirejtotal = DB::table('safari_rejects')->whereYear('created_at', $reportyear)->sum('Quantity');
            $safarirejavg = $safarirejtotal/12;
        }  

         //MONTHLY RELEASED CASTLE LAGER

         $clagerdataRec= [];
         for ($i=1; $i<=12; $i++) {
           $reportyear = $request->reportyear;
           $clagerdata = DB::table('released_castle_lagers')
                           ->whereYear('created_at', $reportyear)                  
                           ->whereMonth('created_at', $i)
                           ->sum('Quantity');
             $clagerintdata = (int)$clagerdata;
           array_push($clagerdataRec, $clagerintdata);
           $clagermaximum = max($clagerdataRec);
           $clagermin = min($clagerdataRec);
           $clagertotal = DB::table('released_castle_lagers')->whereYear('created_at', $reportyear)->sum('Quantity');
             $clageravg = $clagertotal/12;
           }    
           
           //MONTHLY REJECTS CASTLE LAGER

       $ClagerRej= [];
       for ($i=1; $i<=12; $i++) {
         
         $clagerrejdata = DB::table('castle_lager_rejects')
                         ->whereYear('created_at', $reportyear)                  
                         ->whereMonth('created_at', $i)
                         ->sum('Quantity');
           $intclagerrejdata = (int)$clagerrejdata;
         array_push($ClagerRej,$intclagerrejdata);
         $clagermaximumrej = max($ClagerRej);
         $clagerminrej = min($ClagerRej);
         $clagerrejtotal = DB::table('castle_lager_rejects')->whereYear('created_at', $reportyear)->sum('Quantity');
             $clagerrejavg = $clagerrejtotal/12;
         } 

        //  MONTHLY RELEASED CASTLE LITE

         $clitedataRec= [];
          for ($i=1; $i<=12; $i++) {
            $reportyear = $request->reportyear;
            $clitedata = DB::table('released_castle_lites')
                            ->whereYear('created_at', $reportyear)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
              $cliteintdata = (int)$clitedata;
            array_push($clitedataRec, $cliteintdata);
            $clitemaximum = max($clitedataRec);
            $clitemin = min($clitedataRec);
            $clitetotal = DB::table('released_castle_lites')->whereYear('created_at', $reportyear)->sum('Quantity');
              $cliteavg = $clitetotal/12;
            }    
            
            //MONTHLY CATSLE LITE REJECTS

        $CliteRej= [];
        for ($i=1; $i<=12; $i++) {
          
          $cliterejdata = DB::table('castle_lite_rejects')
                          ->whereYear('created_at', $reportyear)                  
                          ->whereMonth('created_at', $i)
                          ->sum('Quantity');
            $intcliterejdata = (int)$cliterejdata;
          array_push($CliteRej,$intcliterejdata);
          $clitemaximumrej = max($CliteRej);
          $cliteminrej = min($CliteRej);
          $cliterejtotal = DB::table('castle_lite_rejects')->whereYear('created_at', $reportyear)->sum('Quantity');
              $cliterejavg = $cliterejtotal/12;
          }
          
   

         
         
          $pdf = PDF::loadView('qms.report',compact('cliterejavg','cliterejtotal','cliteminrej','clitemaximumrej',
      'CliteRej','cliteavg','clitetotal','clitemin','clitemaximum','clitedataRec','clagerrejavg',
    'clagerrejtotal','clagerminrej','clagermaximumrej','ClagerRej','clageravg','clagertotal',
     'clagermin','clagermaximum','clagerdataRec','safarirejavg','safarirejtotal','safariminrej',
      'safarimaximumrej','SafariRej','safariavg','safaritotal','safarimin','safarimaximum','safaridataRec',
      'rejavg','rejtotal','minrej','maximumrej','KiliRej','avg','total','min','maximum','dataRec'));

      return response()->download($pdf);

        }

   public function report(){

    $announce=DB::table('announcements')
    ->orderBy('id','desc')->get();
      
     return view('qms.demoreport',['announce'=>$announce]);
   }
     
}