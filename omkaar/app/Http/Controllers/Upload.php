<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Schools;

class Upload extends Controller
{
     public function createfirst(Request $request)
    {
     DB::table('schools')->INSERT([
    'email'=>$request->email,        
    'r_id'=>$request->r_id,
    'school_name'=>$request->school_name,        
    'address'=>$request->address,
    'mobile'=>$request->mobile,        
    'mobile1'=>$request->mobile1,
    'tagline'=>$request->tagline,        
    'city'=>$request->city,
    'state'=>$request->state,        
    'country'=>$request->country,
    's_email'=>$request->s_email,        
    's_rank'=>$request->s_rank,
    'recognised'=>$request->recognised,        
    'school_title'=>$request->school_title
          
   
    ]);
    return "Your Message Sent Successfully ";
    }

    public function index()
    {
        $school = Schools::all();
     return view('school-view-detail')->with('school',$school);
    }
    
  
    public function delete($id)
    {
         Schools::where('S_id',$id)->delete();
          return "Your Message delete Successfully ";
    }
 
 public function update($id)
    {
    $school = Schools::find( $id);
   // return view('update-school')->with('school',$school);
      return View('update-school',compact('school' , 'id'));
       }


 public function updatedata(Request $request )
    {
    $school = Schools::find( $request->s_id    );
   $school->school_name = $request->school_name;
    $school->mobile = $request->mobile;
       $school->city = $request->city;
       $school ->save();
       return  "Your Message updated ";
    }
}
