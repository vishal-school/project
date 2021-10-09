<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\TextModel;
use App\Models\CommentModel;
use App\Models\Recordmodel;
use App\Models\PostModel;

class TextController extends Controller
{
    public function getCandidates() {
        $categories = TextModel::with('comments')->get();
    $products = CommentModel::get(); 
        return View::make('home', array(
            'categories' => $categories,
            'products' => $products
            ));

       //$lines = $data->line1; // Returns a Laravel Collection
      //foreach($lines as $lines) {
      //return $this->$data();
      //return view('relaionship')->with('data',$data);
       
//$id = 1;
//$text = TextModel::find($id);
//$all_comments = $text->line1;
//dd($all_comments);
 //return view('relationship')->with($all_cmments);
      }

}
