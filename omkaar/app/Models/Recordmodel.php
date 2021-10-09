<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Recordmodel extends Model
{
    use HasFactory;
     protected $table="record";
      protected $primaryKey = 'record_id';
      public $timestamps = true;


       public function text(){
            return $this->belongsTo('App\TextModel', 'owner_id');
        }

        
}
