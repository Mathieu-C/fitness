<?php

namespace App;

use Illuminate\Database\Eloquent\Relations\Pivot;

class WorkoutExercise extends Pivot
{

    protected $table = 'workout_exercises';

    protected $fillable = [ 'workout_id', 'exercise_id', 'order', 'set', 'reps', 'duration', 'weight' ];

    protected $hidden = [];

}