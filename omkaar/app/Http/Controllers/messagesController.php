<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PrincipalMessage;
class messagesController extends Controller
{
     public function messagecreatefirst(Request $request)
    {
     DB::table('message_note')->INSERT([
    'email'=>$request->email,        
    'r_id'=>$request->r_id,
    'heading'=>$request->heading,  
    'date'=>$request->date,  
    'messages_notes'=>$request->messages_notes,  
    'last_date'=>$request->last_date,     
    'school_option'=>$request->school_option,
    'school_option1'=>$request->school_option1,
    'school_option2'=>$request->school_option2

    ]);
    return "Your Message Sent Successfully ";
    }

}


 