<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class imageuploads extends Model
{
   
      protected $table="gallery";
      protected $primaryKey = 'gallery_id';
      public $timestamps = false;
}
