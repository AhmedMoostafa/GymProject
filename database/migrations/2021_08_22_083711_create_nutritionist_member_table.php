<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionistMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritionist_member', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->unsignedBigInteger('nutritionist_id');
            $table->unsignedBigInteger('member_id');
            $table->timestamp('start_date');
            $table->timestamp('end_date');
            $table->timestamps();
            $table->unique(['nutritionist_id','member_id']);

        });
        Schema::table('nutritionist_member', function (Blueprint $table) {

            $table->foreign('nutritionist_id')->references('id')->on('nutritionist')->onDelete('cascade');
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
        Schema::dropIfExists('nutritionist_member');
    }
}
