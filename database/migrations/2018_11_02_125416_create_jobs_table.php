<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->string('title');
            $table->longText('description');
            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender');
            $table->integer('age');
            $table->integer('acad_id')->unsigned();
            $table->foreign('acad_id')->references('id')->on('acad_ahievement');
            $table->longText('location');
            $table->integer('tele');
            $table->string('email');
   
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
        Schema::dropIfExists('jobs');
    }
}
