<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Releasedkili;

class statisticsCotroller extends Controller
{
    public function statistics(Request $request){
        {

// GETTING DATA FOR RELEASED KILI

          $dataRec= [];
            for ($i=1; $i<=12; $i++) {
          
              $year = $request->year;
              $data = DB::table('released_kilis')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $i)
                              ->sum('Quantity');
                $intdata = (int)$data;
              array_push($dataRec,$intdata);
              $maximum = max($dataRec);
              $min = min($dataRec);

              $total = DB::table('released_kilis')->whereYear('created_at', $year)->sum('Quantity');
                $avg = $total/12;
              }         
          $KiliRej= [];
          for ($i=1; $i<=12; $i++) {
            
            $kilirejdata = DB::table('kili_rejects')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
              $intkilirejdata = (int)$kilirejdata;
            array_push($KiliRej,$intkilirejdata);
            $maximumrej = max($KiliRej);
            $minrej = min($KiliRej);
            $rejtotal = DB::table('kili_rejects')->whereYear('created_at', $year)->sum('Quantity');
                $rejavg = $rejtotal/12;
            }
                
            //Get Kili Raw
            $KiliRaw= [];
          for ($i=1; $i<=12; $i++) {
            
            $kilirawdata = DB::table('kili_raws')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
              $intkilirawdata = (int)$kilirawdata;
            array_push($KiliRaw,$intkilirawdata);
            $maxraw = max($KiliRaw);
            $minraw = min($KiliRaw);

           $totalrawkili = DB::table('Kili_raws')->whereYear('created_at', $year)->sum('Quantity');
            $avgrawkili = $totalrawkili/12;
            }
          
          // DAILY CHART RECORDS
          $dailydataRec= [];
  for ($i=1; $i<=31; $i++) {

    $year = $request->year;
    $month = $request->month;
    $dailydata = DB::table('released_kilis')
                    ->whereYear('created_at', $year)                  
                    ->whereMonth('created_at', $month)
                    ->whereDay('created_at', $i)
                    ->sum('Quantity');
      $dailyintdata = (int)$dailydata;
    array_push($dailydataRec,$dailyintdata);
    $dailymaximum = max($dailydataRec);
    $dailymin = min($dailydataRec);

    $dailytotal = DB::table('released_kilis')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
      $dailyavg = $dailytotal/30;
    }

$dailyKiliRej= [];
for ($i=1; $i<=31; $i++) {
  
  $dailykilirejdata = DB::table('kili_rejects')
  ->whereYear('created_at', $year)                  
  ->whereMonth('created_at', $month)
  ->whereDay('created_at', $i)
  ->sum('Quantity');
    $dailyintkilirejdata = (int)$dailykilirejdata;
  // $out = $data->whereMonth('created_at', $i)->count();
  array_push($dailyKiliRej,$dailyintkilirejdata);
  $dailymaxrej = max($dailyKiliRej);
  $dailyminrej = min($dailyKiliRej);

 $dailytotalrejkili = DB::table('kili_rejects')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
  $dailyavgrejkili = $dailytotalrejkili/30;
  }
      
  //Get Kili Raw
  $dailyKiliRaw= [];
for ($i=1; $i<=31; $i++) {
  
  $dailykilirawdata = DB::table('kili_raws')
  ->whereYear('created_at', $year)                  
  ->whereMonth('created_at', $month)
  ->whereDay('created_at', $i)
  ->sum('Quantity');
    $dailyintkilirawdata = (int)$dailykilirawdata;
  // $out = $data->whereMonth('created_at', $i)->count();
  array_push($dailyKiliRaw,$dailyintkilirawdata);
  $dailymaxraw = max($dailyKiliRaw);
  $dailyminraw = min($dailyKiliRaw);

 $dailytotalrawkili = DB::table('kili_raws')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
  $dailyavgrawkili = $dailytotalrawkili/30;
  }
    
  
  // GETTING DATA FOR SAFARI

       // MONTHLY SAFARI RECORDS
            
          //RELEASED

           $safaridataRec= [];
            for ($i=1; $i<=12; $i++) {
              $year = $request->year;
              $safaridata = DB::table('released_safaris')
                              ->whereYear('created_at', $year)                  
                              ->whereMonth('created_at', $i)
                              ->sum('Quantity');
                $safariintdata = (int)$safaridata;
              array_push($safaridataRec,$safariintdata);
              $safarimaximum = max($safaridataRec);
              $safarimin = min($safaridataRec);
              $safaritotal = DB::table('released_safaris')->whereYear('created_at', $year)->sum('Quantity');
                $safariavg = $safaritotal/12;
              }    
              
              //REJECTS

          $SafariRej= [];
          for ($i=1; $i<=12; $i++) {
            
            $safarirejdata = DB::table('safari_rejects')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
              $intsafarirejdata = (int)$safarirejdata;
            array_push($SafariRej,$intsafarirejdata);
            $safarimaximumrej = max($SafariRej);
            $safariminrej = min($SafariRej);
            $safarirejtotal = DB::table('safari_rejects')->whereYear('created_at', $year)->sum('Quantity');
                $safarirejavg = $safarirejtotal/12;
            }   
            
          
          // SAFARI DAILY CHART RECORDS

             //RELEASED 

          $safaridailydataRec= [];
         for ($i=1; $i<=31; $i++) {

         $year = $request->year;
         $month = $request->month;
         $safridailydata = DB::table('released_safaris')
                    ->whereYear('created_at', $year)                  
                    ->whereMonth('created_at', $month)
                    ->whereDay('created_at', $i)
                    ->sum('Quantity');
         $safaridailyintdata = (int)$safridailydata;
         array_push($safaridailydataRec,$safaridailyintdata);
         $safaridailymaximum = max($safaridailydataRec);
         $safaridailymin = min($safaridailydataRec);

         $safaridailytotal = DB::table('released_safaris')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
         $safaridailyavg = $safaridailytotal/30;
       }

           //REJECTS

        $dailySafariRej= [];
        for ($i=1; $i<=31; $i++) {
  
        $dailysafarirejdata = DB::table('safari_rejects')
        ->whereYear('created_at', $year)                  
        ->whereMonth('created_at', $month)
        ->whereDay('created_at', $i)
        ->sum('Quantity');
        $dailyintsafarirejdata = (int)$dailysafarirejdata;

        array_push($dailySafariRej,$dailyintsafarirejdata);
        $safaridailymaxrej = max($dailySafariRej);
        $safaridailyminrej = min($dailySafariRej);

        $dailytotalrejsafari = DB::table('safari_rejects')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
        $dailyavgrejsafari = $dailytotalrejsafari/30;
  }

  // GETTING DATA FOR CASTLE LAGER

       // MONTHLY CASTLE LAGER RECORDS
            
          //RELEASED

          $clagerdataRec= [];
          for ($i=1; $i<=12; $i++) {
            $year = $request->year;
            $clagerdata = DB::table('released_castle_lagers')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
              $clagerintdata = (int)$clagerdata;
            array_push($clagerdataRec, $clagerintdata);
            $clagermaximum = max($clagerdataRec);
            $clagermin = min($clagerdataRec);
            $calagertotal = DB::table('released_castle_lagers')->whereYear('created_at', $year)->sum('Quantity');
              $clageravg = $calagertotal/12;
            }    
            
            //REJECTS

        $ClagerRej= [];
        for ($i=1; $i<=12; $i++) {
          
          $clagerrejdata = DB::table('castle_lager_rejects')
                          ->whereYear('created_at', $year)                  
                          ->whereMonth('created_at', $i)
                          ->sum('Quantity');
            $intclagerrejdata = (int)$clagerrejdata;
          array_push($ClagerRej,$intclagerrejdata);
          $clagermaximumrej = max($ClagerRej);
          $clagerminrej = min($ClagerRej);
          $clagerrejtotal = DB::table('castle_lager_rejects')->whereYear('created_at', $year)->sum('Quantity');
              $clagerrejavg = $clagerrejtotal/12;
          }   
          
        
        // CASTLE LAGER DAILY CHART RECORDS

           //RELEASED 

        $clagerdailydataRec= [];
       for ($i=1; $i<=31; $i++) {

       $year = $request->year;
       $month = $request->month;
       $clagerdailydata = DB::table('released_castle_lagers')
                  ->whereYear('created_at', $year)                  
                  ->whereMonth('created_at', $month)
                  ->whereDay('created_at', $i)
                  ->sum('Quantity');
       $clagerdailyintdata = (int)$clagerdailydata;
       array_push($clagerdailydataRec,$clagerdailyintdata);
       $clagerdailymaximum = max($clagerdailydataRec);
       $clagerdailymin = min($clagerdailydataRec);

       $clagerdailytotal = DB::table('released_safaris')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
       $clagerdailyavg = $clagerdailytotal/30;
     }

         //REJECTS

      $dailyClagerRej= [];
      for ($i=1; $i<=31; $i++) {

      $dailycalgerrejdata = DB::table('castle_lager_rejects')
      ->whereYear('created_at', $year)                  
      ->whereMonth('created_at', $month)
      ->whereDay('created_at', $i)
      ->sum('Quantity');
      $dailyintclagerrejdata = (int)$dailycalgerrejdata;

      array_push($dailyClagerRej,$dailyintclagerrejdata);
      $clagerdailymaxrej = max($dailyClagerRej);
      $clagerdailyminrej = min($dailyClagerRej);

      $dailytotalrejclager = DB::table('safari_rejects')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
      $dailyavgrejclager = $dailytotalrejclager/30;
}

    // GETTING CASTLE LITE RECORDS

       // MONTHLY CASTLE LITE RECORDS
            
          //RELEASED

          $clitedataRec= [];
          for ($i=1; $i<=12; $i++) {
            $year = $request->year;
            $clitedata = DB::table('released_castle_lites')
                            ->whereYear('created_at', $year)                  
                            ->whereMonth('created_at', $i)
                            ->sum('Quantity');
              $cliteintdata = (int)$clitedata;
            array_push($clitedataRec, $cliteintdata);
            $clitemaximum = max($clitedataRec);
            $clitemin = min($clitedataRec);
            $clitetotal = DB::table('released_castle_lites')->whereYear('created_at', $year)->sum('Quantity');
              $cliteavg = $clitetotal/12;
            }    
            
            //REJECTS

        $CliteRej= [];
        for ($i=1; $i<=12; $i++) {
          
          $cliterejdata = DB::table('castle_lite_rejects')
                          ->whereYear('created_at', $year)                  
                          ->whereMonth('created_at', $i)
                          ->sum('Quantity');
            $intcliterejdata = (int)$cliterejdata;
          array_push($CliteRej,$intcliterejdata);
          $clitemaximumrej = max($CliteRej);
          $cliteminrej = min($CliteRej);
          $cliterejtotal = DB::table('castle_lite_rejects')->whereYear('created_at', $year)->sum('Quantity');
              $cliterejavg = $cliterejtotal/12;
          }   
          
        
        // CASTLE LAGER DAILY CHART RECORDS

           //RELEASED 

        $clitedailydataRec= [];
       for ($i=1; $i<=31; $i++) {

       $year = $request->year;
       $month = $request->month;
       $clitedailydata = DB::table('released_castle_lites')
                  ->whereYear('created_at', $year)                  
                  ->whereMonth('created_at', $month)
                  ->whereDay('created_at', $i)
                  ->sum('Quantity');
       $clitedailyintdata = (int)$clitedailydata;
       array_push($clitedailydataRec,$clitedailyintdata);
       $clitedailymaximum = max($clitedailydataRec);
       $clitedailymin = min($clitedailydataRec);

       $clitedailytotal = DB::table('released_castle_lites')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
       $clitedailyavg = $clitedailytotal/30;
     }

         //REJECTS

      $dailyCliteRej= [];
      for ($i=1; $i<=31; $i++) {

      $dailycliterejdata = DB::table('castle_lite_rejects')
      ->whereYear('created_at', $year)                  
      ->whereMonth('created_at', $month)
      ->whereDay('created_at', $i)
      ->sum('Quantity');
      $dailyintcliterejdata = (int)$dailycliterejdata;

      array_push($dailyCliteRej,$dailyintcliterejdata);
      $clitedailymaxrej = max($dailyCliteRej);
      $clitedailyminrej = min($dailyCliteRej);

      $dailytotalrejclite = DB::table('castle_lite_rejects')->whereYear('created_at', $year)->whereMonth('created_at', $month)->sum('Quantity');
      $dailyavgrejclite = $dailytotalrejclite/30;
}
            
              return view('qms.statistics',compact('dataRec','dailyavgrejclite','clitedailyminrej',
              'dailytotalrejclite','clitedailymaxrej','dailyCliteRej','clitemin','clitedailyavg',
              'clitedailytotal','clitedailymaximum','clitedailymin','clitedailydataRec','cliterejtotal',
              'cliterejavg','cliteminrej','clitemaximumrej','CliteRej','cliteavg','clitetotal',
              'clitemaximum','clitedataRec','dailyavgrejclager','dailytotalrejclager',
              'clagerdailyminrej','clagerdailymaxrej','dailyClagerRej','clagerdailyavg','clagerdailymin',
              'clagerdailytotal','clagerdailymaximum','clagerdailydataRec','clagerrejavg',
              'clagerrejtotal','clagerminrej','clagermaximumrej','clageravg','ClagerRej','calagertotal',
              'clagermin','clagermaximum','clagerdataRec','dailyavgrejsafari','dailytotalrejsafari',
              'safaridailyminrej','safaridailymaxrej','dailySafariRej','safaridailymaximum',
              'safaridailyavg','safaridailytotal','safaridailymin','safaridailydataRec','safarirejavg',
              'safarirejtotal','safarimaximumrej','safariminrej','SafariRej','safaridataRec','safariavg',
              'safaritotal','safarimin','safarimaximum','totalrawkili','rejtotal','total',
              'dailytotalrawkili','dailytotal','dailytotalrejkili','dailytotal','avgrawkili',
              'month','dailydataRec','dailyKiliRaw','dailyKiliRej','avg','dailyavg','dailyavgrawkili',
              'rejavg','min','dailymin','dailymaximum','minrej','dailyminrej','dailyavgrejkili','minraw',
              'dailyminraw','maxraw','dailymaxraw','year','KiliRej','KiliRaw','maximum','maximumrej',
              'dailymaxrej'));
        }
    }
}
