<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateWorkoutExercisesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('workout_exercises', function (Blueprint $table) {
            $table->unsignedInteger('workout_id');
            $table->unsignedInteger('exercise_id');

            $table->tinyInteger('order');
            $table->tinyInteger('sets');
            $table->tinyInteger('reps');
            $table->smallInteger('duration');
            $table->smallInteger('weight');
            $table->timestamps();

            $table->foreign('workout_id')
                ->references('id')->on('workouts')
                ->onDelete('cascade');
            $table->foreign('exercise_id')
                ->references('id')->on('exercises')
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
        Schema::table('workout_exercises', function (Blueprint $table) {
            $table->dropForeign(['workout_id']);
        });

        Schema::table('workout_exercises', function (Blueprint $table) {
            $table->dropForeign(['exercise_id']);
        });

        Schema::dropIfExists('workout_exercises');
    }
}
