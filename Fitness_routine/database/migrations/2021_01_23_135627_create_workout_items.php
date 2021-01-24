<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateWorkoutItems extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_items', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('user_id');
            $table->string('full_name', 50);
            $table->string('workout_title',50);
            $table->bigInteger('category_id')->unsigned();
            $table->string('monday', 255);
            $table->string('tuesday', 255);
            $table->string('wednesday', 255);
            $table->string('thursday', 255);
            $table->string('friday', 255);
            $table->string('saterday', 255);
            $table->string('sunday', 255);
            $table->timestamps();
            $table->foreign('user_id')
                ->references('id')
                ->on('users')
                ->onDelete('cascade');
        });
        Schema::table('workout_items', function (Blueprint $table) {
            $table->foreign('category_id')->references('id')->on('categories');
        });

    }


    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('workout_items');
    }
}
