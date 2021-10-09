<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommentModel extends Model
{
    use HasFactory;
    
      protected $table="comment";
      protected $primaryKey = 'comment_id';
      public $timestamps = true;

      public function text(){
            return $this->belongsTo('App\TextModel', 'text_id');
        }
}
