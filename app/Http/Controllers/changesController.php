<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class changesController extends Controller
{
    public function changes(){
        return view('qms.changes');
    }
}
