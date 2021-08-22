<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateExercisesTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('exercises', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->text('description');
      $table->string('duration');
      $table->string('gif');
      $table->float('cal_burnt');
      $table->string('title');
      $table->integer('reps');
      $table->string('image');
      $table->unsignedBigInteger('coach_id');
      // $table->foreign('coach_id')->references('id')->on('coaches');
      $table->timestamps();
    });

    Schema::create('exercise_set', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('exercise_id');
      // $table->foreign('exercise_id')->references('id')->on('exercises');
      $table->unsignedBigInteger('set_id');
      // $table->foreign('set_id')->references('id')->on('sets');
      $table->string('break_duration');
      $table->timestamps();
    });

    Schema::create('exercise_group', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('exercise_id');
      // $table->foreign('exercise_id')->references('id')->on('exercises');
      $table->unsignedBigInteger('group_id');
      // $table->foreign('group_id')->references('id')->on('groups');
      $table->string('break_duration');
      $table->timestamps();
    });

    Schema::create('equipment_exercise', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('equipment_id');
      // $table->foreign('equipment_id')->references('id')->on('equipments');
      $table->unsignedBigInteger('exercise_id');
      // $table->foreign('exercise_id')->references('id')->on('exercises');
      $table->string('break_duration');
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
    Schema::dropIfExists('exercises');
    Schema::dropIfExists('exercise_set');
    Schema::dropIfExists('exercise_group');
    Schema::dropIfExists('equipment_exercise');
  }
}
