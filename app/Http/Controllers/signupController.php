<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;

class signupController extends Controller
{
   public function signup(){
       return view('qms.signup');
   }

   public function create(Request $request){
       $request->validate([
           "FirstName" => 'required',
           "LastName" => 'required',
           "department" => 'required',
           'Email' => 'required|email|unique:users',
           'password' => 'required|min:5|max:12|confirmed',
       ]);
       $user = new User;
       $user -> First_Name = $request->FirstName;
       $user -> Last_Name = $request->LastName;
       $user -> Department = $request->department;
       $user -> email = $request->Email;
       $user -> password =  Hash::make($request->password);
       $query = $user->save();

    if($query){
        return back()->with('success','Congratulatins..You have been registered, you may now login');
    }
    else{
        return back()->with('fail','Sorry..Something went wrong');
      }      
    }
   
}
