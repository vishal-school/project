<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Schools;
use App\imageuploads;
class PhotoController extends Controller
{
    

public function index()
    {
        $school = Schools::all();
     return view('slider')->with('school',$school);
    }


public function updateimage(Request $request)
    {
          $gall = imageuploads::all();
     return view('update-image')->with('gall',$gall);
    }


}
