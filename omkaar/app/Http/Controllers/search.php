<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Schools;
class search extends Controller
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
    public function autocomplete(Request $request)
    {
        $datas = Schools::select("city")
        ->where("city","LIKE","%{$request->input('query')}%")
        ->get();
    $dataModified = array();
     foreach ($datas as $data)
     {
       $dataModified[] = $data->city;
     }

    return response()->json($dataModified);
    }
}