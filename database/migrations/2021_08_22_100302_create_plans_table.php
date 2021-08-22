<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreatePlansTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('plan', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title')->unique();
            $table->text('description');
            //$table->unsignedBigInteger('nutritionist_id');
            //$table->foreign('nutritionist_id')->references('id')->on('nutritionist');
            $table->timestamps();
        });

        Schema::create('meal_plan', function (Blueprint $table) {
            $table->enum('type', ['breakfast', 'lunch', 'dinner', 'snack']);
            $table->unsignedBigInteger('plan_id');
            $table->unsignedBigInteger('meal_id');
            $table->foreign('plan_id')->references('id')->on('plan');
            $table->foreign('meal_id')->references('id')->on('meal');
            $table->timestamps();
        });

        Schema::create('item_plan', function (Blueprint $table) {
            $table->integer('quantity')->unsigned();
            $table->timestamp('time');
            $table->unsignedBigInteger('item_id');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plan');
            $table->foreign('item_id')->references('id')->on('item');
            $table->timestamps();
        });

        Schema::create('plan_member', function (Blueprint $table) {
            $table->string('duration');
            //$table->unsignedBigInteger('member_id');
            $table->unsignedBigInteger('plan_id');
            $table->foreign('plan_id')->references('id')->on('plan');
            //$table->foreign('member_id')->references('id')->on('member');
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
        Schema::dropIfExists('plan');
        Schema::dropIfExists('meal_plan');
        Schema::dropIfExists('item_plan');
        Schema::dropIfExists('plan_member');
    }
}
