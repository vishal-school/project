<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePMessageSTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('p_message_s', function (Blueprint $table) {
            $table->increments('p_m_s_id');
            $table->string('email')->nullable();
            $table->string('r_id')->nullable();
            $table->string('princi_message')->nullable();
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
        Schema::dropIfExists('p_message_s');
    }
}
