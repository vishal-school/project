<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MessageModel extends Model
{
    use HasFactory;
    protected $table = "message_note";
      protected $primaryKey = 'messa_id';
      public $timestamps = true;


       protected $fillable = [
         'email', 'r_id', 'heading', 'date', 'messages_notes', 'last_date',  'school_option' , 'school_option1', 'school_option2'
    ];
}
