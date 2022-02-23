<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class trainingController extends Controller
{
    public function training(){
        return view('qms.training');
    }
}
