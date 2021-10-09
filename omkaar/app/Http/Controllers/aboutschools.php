<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\AboutSchool;
class aboutschools extends Controller
{
   
  public function aboutcreatefirst(Request $request)
    {
     DB::table('a_school')->INSERT([
    'email'=>$request->email,        
    'r_id'=>$request->r_id,
    'about_message'=>$request->about_message,     
    'school_option'=>$request->school_option,
    'school_option1'=>$request->school_option1,
    'school_option2'=>$request->school_option2

    ]);
    return "Your Message Sent Successfully ";
    }

   
}
