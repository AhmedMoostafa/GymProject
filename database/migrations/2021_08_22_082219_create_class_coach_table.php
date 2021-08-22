<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateClassCoachTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('class_coach', function (Blueprint $table) {
            $table->bigIncrements('id');

            $table->timestamps();
            $table->unique(['class_id','coach_id']);
            $table->unsignedBigInteger('class_id');
            $table->unsignedBigInteger('coach_id');


        });
        Schema::table('class_coach', function (Blueprint $table) {

            $table->foreign('class_id')
                ->references('id')
                ->on('classes')
                ->onDelete('cascade');

            $table->foreign('coach_id')
                ->references('id')
                ->on('coaches')
                ->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Class_coach');
    }
}
