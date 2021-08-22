<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateGroupsTable extends Migration
{
  /**
   * Run the migrations.
   *
   * @return void
   */
  public function up()
  {
    Schema::create('groups', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->text('description');
      $table->unsignedBigInteger('coach_id');
      // $table->foreign('coach_id')->references('id')->on('coaches');
      $table->timestamps();
    });

    Schema::create('group_member', function (Blueprint $table) {
      $table->bigIncrements('id');
      $table->unsignedBigInteger('group_id');
      // $table->foreign('group_id')->references('id')->on('groups');
      $table->unsignedBigInteger('member_id');
      // $table->foreign('member_id')->references('id')->on('members');
      $table->dateTime('day');
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
    Schema::dropIfExists('groups');
    Schema::dropIfExists('group_member');
  }
}
