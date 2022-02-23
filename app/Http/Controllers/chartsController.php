<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\DB;
use App\Models\Releasedkili;
use Illuminate\Http\Request;

class chartsController extends Controller
{
    public function index()
    {
  /* get recievings data of this year */
  $dataRec= [];
  for ($i=1; $i<=12; $i++) {
        $data = Releasedkili::whereYear('created_at', 2021);
        $out = $data->whereMonth('created_at', $i)->count();
        array_push($dataRec,$out);
    }
    $tatalRec = Releasedkili::whereYear('created_at', 2021)->count();

//     /* get recievings data of this Last year */
//   $dataRecLast= [];
//   for ($i=1; $i<=12; $i++) {
//         $dataL = Releasedkili::whereYear('created_at', 2020);
//         $outL = $dataL->whereMonth('created_at', $i)->count();
//         array_push($dataRecLast,$outL);
//     }
    return view('charts.charts',compact('dataRec','tatalRec'));

    }
}