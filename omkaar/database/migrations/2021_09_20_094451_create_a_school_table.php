<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateASchoolTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('a_school', function (Blueprint $table) {
           

            $table->increments('about_id');
            $table->string('email')->nullable();
            $table->string('r_id')->nullable();
            $table->string('about_message')->nullable();
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
        Schema::dropIfExists('a_school');
    }
}
