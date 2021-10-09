<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSchoolsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('schools', function (Blueprint $table) {


      
            $table->increments('s_id');
            $table->string('email')->nullable();
            $table->string('r_id')->nullable();
            $table->string('school_name')->nullable();
            $table->string('address')->nullable();
            $table->bigInteger('mobile')->nullable();
            $table->bigInteger('mobile1')->nullable();
            $table->string('tagline')->nullable();
            $table->string('city')->nullable();
            $table->string('state')->nullable();
            $table->string('country')->nullable();
            $table->string('s_email')->nullable();
            $table->string('s_rank')->nullable();
            $table->string('recognised')->nullable();
            $table->string('school_title')->nullable();
            $table->string('school_header')->nullable();
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
        Schema::dropIfExists('schools');
    }
}
