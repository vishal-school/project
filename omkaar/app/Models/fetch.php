<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class fetch extends Model
{
    protected $table="schools";
      protected $primaryKey = 's_id';
      public $timestamps = false;
}
