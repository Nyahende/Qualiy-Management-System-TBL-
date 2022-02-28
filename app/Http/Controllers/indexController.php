<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\User;
use App\Providers\RouteServiceProvider;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Session;


class indexController extends Controller
{
   public function index(){
       return view('qms.index');
   }
   public function check(Request $request){
    $request->validate([
        "Email" => 'required',
        "Password" => 'required',
    ]);
   
    $user = User::where('email','=',$request->Email)->first();

    if($user->Department =="Quality Management"){
        if(Hash::check($request->Password, $user->password)){
                    $request->session()->put('LoggedWorker',$user->id);
                    Session::put('First_Name',$user->First_Name);
                    Session::put('Last_Name',$user->Last_Name);

                    return redirect('quality');

               }
        else{
               return back()->with('fail','Sorry..wrong Passwod');
            }
    }

    // ENGINEERS AUTH

    elseif($user->Department =="Engeneering Department"){
        if(Hash::check($request->Password, $user->password)){
                    $request->session()->put('LoggedEng',$user->id);
                    Session::put('First_Name',$user->First_Name);
                    Session::put('Last_Name',$user->Last_Name);
                    return redirect('engeneers');
               }
        else{
               return back()->with('fail','Sorry..wrong Passwod');
            }
    }
    

    //   MARKETING AUTH

    elseif($user->Department =="Sales/Marketing Department"){
        if(Hash::check($request->Password, $user->password)){
                    $request->session()->put('LoggedMark',$user->id);
                    Session::put('First_Name',$user->First_Name);
                    Session::put('Last_Name',$user->Last_Name);
                    return redirect('marketing');
               }
        else{
               return back()->with('fail','Sorry..wrong Passwod');
            }
    }

    //  STORE AUTH

    elseif($user->Department =="Store/Wharehouse Department"){
        if(Hash::check($request->Password, $user->password)){
                    $request->session()->put('LoggedStore',$user->id);
                    Session::put('First_Name',$user->First_Name);
                    Session::put('Last_Name',$user->Last_Name);
                    return redirect('store');
               }
        else{
               return back()->with('fail','Sorry..wrong Passwod');
            }
    }

    // TRANSPORT AUTH

    elseif($user->Department =="Transport Department"){
        if(Hash::check($request->Password, $user->password)){
                    $request->session()->put('LoggedTrans',$user->id);
                    Session::put('First_Name',$user->First_Name);
                    Session::put('Last_Name',$user->Last_Name);
                   
                    return redirect('transport');
               }
        else{
               return back()->with('fail','Sorry..wrong Passwod');
            }
    }
    // FINANCE AUTH

    elseif($user->Department =="Finance Department"){
        if(Hash::check($request->Password, $user->password)){
                    $request->session()->put('LoggedFinance',$user->id);
                    Session::put('First_Name',$user->First_Name);
                    Session::put('Last_Name',$user->Last_Name);
                    return redirect('finance');
               }
        else{
               return back()->with('fail','Sorry..wrong Passwod');
            }
    }
    else{
          return back()->with('nouser','Sorry..user was not found');
      }
   } 
   public function logout(){
   
       if(session()->has('LoggedWorker')){
              session()->pull('LoggedWorker');
              return redirect('/');
       } 
       if(session()->has('LoggedFinance')){
              session()->pull('LoggedFinance');
              return redirect('/');
       
       }
       elseif(session()->has('LoggedTrans')){
           session()->pull('LoggedTrans');
           return redirect('/');
       }
       elseif(session()->has('LoggedStore')){
           session()->pull('LoggedStore');
           return redirect('/');
       }
       elseif(session()->has('LoggedMark')){
           session()->pull('LoggedMark');
           return redirect('/');
       }
       elseif(session()->has('LoggedEng')){
           session()->pull('LoggedEng');
           return redirect('/');
       }
   }
}

