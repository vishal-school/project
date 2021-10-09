<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
class Dataupload extends Controller
{
 
     public function adddataupload()
     {
     	return view('dataupload');
     }



      public function createfirst(Request $request)
    {
     DB::table('data')->INSERT([
    'email'=>$request->email,        
    'po'=>$request->po
   
    ]);
    return "Your Message Sent Successfully ";
    }

    public function getdatabyid($id)
        {
        	$data = DB::table('data')->where('id',$id)->first();
        	return view('singledata',compact('data'));
    }
}

