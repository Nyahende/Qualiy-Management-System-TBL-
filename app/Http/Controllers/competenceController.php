<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class competenceController extends Controller
{
    public function competence(){
        return view('qms.competence');
    }
}
