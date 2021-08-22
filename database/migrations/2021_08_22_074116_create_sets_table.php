<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSetsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('sets', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->text('description');
      $table->unsignedBigInteger('coach_id');
      // $table->foreign('coach_id')->references('id')->on('coaches');
      $table->timestamps();
    });

    Schema::create('set_group', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('set_id');
      // $table->foreign('set_id')->references('id')->on('sets');
      $table->unsignedBigInteger('group_id');
      // $table->foreign('group_id')->references('id')->on('groups');
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
    Schema::dropIfExists('sets');
    Schema::dropIfExists('set_group');
  }
}
