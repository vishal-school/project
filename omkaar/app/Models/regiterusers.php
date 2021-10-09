<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class regiterusers extends Model
{
      protected $table="registration";
      protected $primaryKey = 'r_id';
      public $timestamps = false;

}
