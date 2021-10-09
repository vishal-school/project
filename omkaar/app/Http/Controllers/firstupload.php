<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class firstupload extends Controller
{
    public function firstpost()
    {
    	return view ("firstuploadview");
    }

   
    public function createfirst(Request $request)
    {
    DB::table('firsts')->INSERT([
    'school_name'=>$request->school_name,        
    'address'=>$request->address,
    'city'=>$request->city,
    'mobile'=>$request->mobile,
    'state'=>$request->state
    ]);
    return "Your Message Sent Successfully ";
    }
  
      public function insert(Request $request) {
      $sname = $request->input('school_name');
      $add = $request->input('address');
      $cit = $request->input('city');
      $mob = $request->input('mobile');
      $sta = $request->input('state');

     

      DB::insert('insert into firsts (school_name,address,city,mobile,state) values(?,?,?,?,?)',[$sname,
      	$add,$cit,$mob,$sta]  );
      echo "Record inserted successfully.<br/>";
     // echo '<a href = "/firstuploadview">Click Here</a> to go back.';
   }

public function viewpreared()
    {
    	return view ("prepared");
    }


} 