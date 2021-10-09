<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Schools;

class autocomplete extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('search');
    }
  
    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function auto(Request $request)
    {
        $data = Schools::select("city")
                ->where("city","LIKE","%{$request->query}%")
                ->get();
   
        return response()->json($data);
    }
}