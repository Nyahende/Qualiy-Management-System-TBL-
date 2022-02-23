<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Releasedkili;
use Illuminate\Http\Request;

class chartjsController extends Controller
{
    public function chartjs(Request $request)
    {
  /* get released kili data of year 2022 */
  $dataRec= [];
  for ($i=1; $i<=12; $i++) {

    $year = $request->year;
    $data = DB::table('released_kilis')
                    ->whereYear('created_at', $year)                  
                    ->whereMonth('created_at', $i)
                    ->sum('Quantity');
      $intdata = (int)$data;
    array_push($dataRec,$intdata);
    }
    $tatalRec = Releasedkili::whereYear('created_at', 2021)->count();

$KiliRej= [];
for ($i=1; $i<=12; $i++) {
  
  $kilirejdata = DB::table('kili_rejects')
                  ->whereYear('created_at', $year)                  
                  ->whereMonth('created_at', $i)
                  ->sum('Quantity');
    $intkilirejdata = (int)$kilirejdata;
  // $out = $data->whereMonth('created_at', $i)->count();
  array_push($KiliRej,$intkilirejdata);
  }
      
  //Get Kili Raw
  $KiliRaw= [];
for ($i=1; $i<=12; $i++) {
  
  $kilirawdata = DB::table('kili_raws')
                  ->whereYear('created_at', $year)                  
                  ->whereMonth('created_at', $i)
                  ->sum('Quantity');
    $intkilirawdata = (int)$kilirawdata;
  // $out = $data->whereMonth('created_at', $i)->count();
  array_push($KiliRaw,$intkilirawdata);
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
    }
    $tatalRec = Releasedkili::whereYear('created_at', 2021)->count();

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
  }

    
    return view('chartjs',compact('dataRec','year','month','tatalRec','KiliRej','KiliRaw','dailydataRec','dailyKiliRej','dailyKiliRaw'));

    }
}