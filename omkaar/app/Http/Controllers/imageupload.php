<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\imageuploads;
class imageupload extends Controller
{
      public function formview(Request $request)
    {
    
if( $request->hasFile('gallery')){ 
     
      $name = $request->file('gallery')->getClientOriginalName();
 
     
    $path = $request->gallery->move(public_path('gallery'), $name);
    $r_id = $request->r_id;
    $email=$request->email;
    $line1=$request->line1;
    $line2=$request->line2;        
    $line3=$request->line3;

    $gallery = new imageuploads();
 $gallery->r_id = $r_id;
 $gallery->email = $email;
  $gallery->gallery = $name;
 $gallery->line1 = $path ;
 $gallery->line2 = $line2;
 $gallery->line3 = $line3;


   $gallery ->save();
      
  
    return "Your Message Sent Successfully ";
        //dd($image); 
    } else {
        dd('No image was found');
}

  
    }



   public function updateimage(Request $request)
    {
          $gall = imageuploads::all();
     return view('update-image')->with('gall',$gall);
    }

public function imageupdate($id)
    {
   	$gall= imageuploads::find( $id);
   // return view('update-school')->with('school',$school);
      return View('image',compact('gall' , 'id'));
       }

public function updateimagedata(Request $request )
    {
    $school = imageuploads::find( $request->gallery_id    );
   $school->r_id = $request->r_id;
    $school->email = $request->email;
       $school->line1 = $request->line1;
        $school->line2 = $request->line2;
         $school->line3 = $request->line3;
       $school ->save();
       return  "Your Message updated ";
    }

}
