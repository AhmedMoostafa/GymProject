<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePrivateSessionsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('private_sessions', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->string('title');
      $table->text('description');
      $table->string('link');
      $table->string('duration');
      $table->dateTime('datetime');
      $table->float('price');
      $table->unsignedBigInteger('coach_id');
      // $table->foreign('coach_id')->references('id')->on('coaches');
      $table->timestamps();
    });

    Schema::create('session_member', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('session_id');
      // $table->foreign('session_id')->references('id')->on('sessions');
      $table->unsignedBigInteger('member_id');
      // $table->foreign('member_id')->references('id')->on('members');
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
    Schema::dropIfExists('private_sessions');
    Schema::dropIfExists('session_member');
  }
}
