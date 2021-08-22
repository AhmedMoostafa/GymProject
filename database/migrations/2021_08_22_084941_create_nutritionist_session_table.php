<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateNutritionistSessionTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('nutritionist_session', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unique(['nutritionist_id','member_id']);
            $table->unsignedBigInteger('nutritionist_id');
            $table->unsignedBigInteger('member_id');
            $table->timestamp('date');
            $table->timestamps();

        });
        Schema::table('nutritionist_session', function (Blueprint $table) {

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
        Schema::dropIfExists('nutritionist_session');
    }
}
