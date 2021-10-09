<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\PrincipalMessage;
class principalmessages extends Controller
{
    public function principalcreatefirst(Request $request)
    {
    DB::table('p_message_s')->INSERT([
    'email'=>$request->email,        
    'r_id'=>$request->r_id,
    'princi_message'=>$request->princi_message,     
    'school_option'=>$request->school_option,
    'school_option1'=>$request->school_option1,
    'school_option2'=>$request->school_option2

    ]);
    return "Your Message Sent Successfully ";
    }
}
