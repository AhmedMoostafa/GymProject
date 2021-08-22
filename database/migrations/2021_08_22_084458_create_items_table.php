<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateItemsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('item', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->integer('cal')->unsigned()->default(0);
            $table->string('title');
            $table->enum('level', ['green', 'yellow', 'red'])->default('green');
            //$table->unsignedBigInteger('nutritionist_id');
            //$table->foreign('nutritionist_id')->references('id')->on('nutritionist');
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
        Schema::dropIfExists('item');
    }
}
