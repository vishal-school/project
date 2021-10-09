<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\regiterusers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\session;

use Illuminate\Support\Facades\Hash;

use App\User;


class regiteruser extends Controller
{
     public function registerfirst(Request $request)
    {
     DB::table('users')->INSERT([
           
  
     'name'=>$request->name,    
    'email'=>$request->email,        
    'password'=>Hash::make($request->password),
    'remember_token'=>$request->mobile        
    
          
   
    ]);
    return "Your Message Sent Successfully ";
    }


function checklogin(Request $request)
    	  //Validate requests{}
    {
        $request->validate([
             'email'=>'required|email',
             'password'=>'required|min:3|max:12'
        ]);
  
          $credentials = $request->only('email', 'password');

        if (Auth::attempt($credentials)) {
            return redirect()->intended('home');
        }

 return redirect('login-page')->with('error', 'Oppes! You have entered invalid credentials');

    }




  
}
   