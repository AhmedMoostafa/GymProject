<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateEventsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('events', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->string('title');
            $table->text('description');
            $table->datetime('start_time');
            $table->datetime('end_time');
            $table->integer('tickets_available');
            $table->decimal('price', 5, 2)->nullable()->default(0.0);
            $table->string('status');
            $table->timestamps();
        });

        //event_user MANY TO MANY relationship.
        Schema::create('event_user', function (Blueprint $table) {
            $table->unsignedbigInteger('event_id');
            $table->unsignedbigInteger('user_id');
            $table->string('status');
            $table->timestamps();

            $table->unique(['event_id','user_id']);
            $table->foreign('event_id')->references('id')->on('events')->onDelete('cascade');
            //$table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('events');
    }
}
