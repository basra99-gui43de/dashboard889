<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateLookingForJobsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('looking_for_jobs', function (Blueprint $table) {
            $table->increments('id');
            $table->longText('fullname');
            $table->integer('age');
            $table->longText('img');
            $table->integer('tele');
            $table->string('email');
            $table->longText('cv_url');
            $table->integer('gender_id')->unsigned();
            $table->foreign('gender_id')->references('id')->on('gender');
            $table->integer('acad_id')->unsigned();
            $table->foreign('acad_id')->references('id')->on('acad_ahievement');
            $table->integer('juris_id')->unsigned();
            $table->foreign('juris_id')->references('id')->on('jusrisdiction');
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
        Schema::dropIfExists('looking_for_jobs');
    }
}
