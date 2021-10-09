<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PostModel extends Model
{
    use HasFactory;
      protected $table="post";
      protected $primaryKey = 'post_id';
      public $timestamps = true;
     
    public function text(){
            return $this->belongsTo('App\TextModel', 'owner_id');
        }
}

