<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSupplementariesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('supplementaries', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->integer('price');
            $table->string('picture');
            $table->timestamps();
        });

                            ######supplementary_branch######

        Schema::create('supplementary_branch', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->unsignedBigInteger('supplementary_id');
            $table->unsignedBigInteger('branch_id');
            $table->string('quantity');
            $table->timestamps();

            //$table->unique(['supplementary_id','branch_id']);

            $table->foreign('supplementary_id')->references('id')->on('supplementaries')->onDelete('cascade');
            //$table->foreign('branch_id')->references('id')->on('branches')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('supplementaries');
        Schema::dropIfExists('supplementary_branch');
    }
}
