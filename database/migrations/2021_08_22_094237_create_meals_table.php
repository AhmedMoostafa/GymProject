<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMealsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('meal', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            //$table->unsignedBigInteger('nutritionist_id');
            //$table->foreign('nutritionist_id')->references('id')->on('nutritionist');
            $table->timestamps();
        });

        Schema::create('item_meal', function (Blueprint $table) {
            $table->integer('quantity')->unsigned();
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('meal_id');
            $table->foreign('item_id')->references('id')->on('item');
            $table->foreign('meal_id')->references('id')->on('meal');
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
        Schema::dropIfExists('meal');
        Schema::dropIfExists('item_meal');
    }
}
