<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateMemberTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('member', function (Blueprint $table) {
            $table->bigIncrements('id');
            $table->boolean('is_checked');
            $table->timestamp('start_date')->nullable();
            $table->timestamp('end_date')->nullable();
            $table->string('medical_physical_history');
            $table->string('medical_allergic_history');
            $table->integer('available_frozen_days');
            $table->integer('available_membership_days');
            $table->integer('active_days');

            $table->timestamps();
            $table->unique('user_id');
            $table->unsignedBigInteger('user_id');
            $table->unsignedBigInteger('membership_id');



        });
        Schema::table('member', function (Blueprint $table) {

            $table->foreign('user_id')->references('id')->on('users')->onDelete('cascade');

            $table->foreign('membership_id')->references('id')->on('memberships')->onDelete('cascade');

        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('Member');
    }
}
