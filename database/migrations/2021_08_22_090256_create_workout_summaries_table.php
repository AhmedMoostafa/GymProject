<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_summaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('calories_burnt');
            $table->unsignedBigInteger('member_id');
            $table->float('duration');
            $table->timestamps();



        });
        Schema::table('workout_summaries', function (Blueprint $table) {

            $table->foreign('member_id')->references('id')->on('member')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout_summaries');
    }
}
