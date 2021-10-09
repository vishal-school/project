<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMessageNoteTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('message_note', function (Blueprint $table) {
           $table->increments('messa_id');
            $table->string('email')->nullable();
            $table->string('r_id')->nullable();
            $table->string('heading')->nullable();
            $table->string('date')->nullable();
            $table->string('messages_notes')->nullable();
            $table->string('last_date')->nullable();
            $table->string('school_option')->nullable();
            $table->string('school_option1')->nullable();
            $table->string('school_option2')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('message_note');
    }
}
