<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class TextModel extends Model
{
    use HasFactory;

      protected $table="text";
      protected $primaryKey = 'text_id';
      public $timestamps = true;



     public function comments()
    {
         return $this->hasMany('App\CommentModel',  'text_id');
       
    }
     
     public function Record(){
        return $this->hasMany('App\Recordmodel',  'text_id');
    }
     
     public function post(){
        return $this->hasMany('App\Postmodel',  'text_id');
    }


}
