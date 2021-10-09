<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AboutSchool extends Model
{
    //use HasFactory;
     protected $table = "a_school";
      protected $primaryKey = 'about_id';
      public $timestamps = true;


       protected $fillable = [
         'email', 'r_id', 'about_message', 'school_option' , 'school_option1', 'school_option2'
    ];
}
