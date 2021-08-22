<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateFitnessSummariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('fitness_summary', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->float('BMI');
            $table->float('weight');
            $table->float('muscle_ratio');
            $table->float('height');
            $table->float('fat_ratio');
            $table->float('fitness_ratio');
            $table->float('total_body_water');
            $table->float('dry_lean_bath');
            $table->float('body_fat_mass');
            $table->float('opacity_ratio');
            $table->float('protein');
            $table->float('SMM');
            $table->timestamp('date');
            $table->timestamps();
            //$table->unsignedBigInteger('member_id');
            //$table->foreign('member_id')->references('id')->on('member');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('fitness_summary');
    }
}
