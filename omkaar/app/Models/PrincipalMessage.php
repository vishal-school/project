<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrincipalMessage extends Model
{
    use HasFactory;
     //use HasFactory;
     protected $table = "p_message_s";
      protected $primaryKey = 'p_m_s_id';
      public $timestamps = true;


       protected $fillable = [
         'email', 'r_id', 'princi_message', 'school_option' , 'school_option1', 'school_option2'
    ];
}
