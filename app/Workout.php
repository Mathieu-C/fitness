<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Workout extends Model
{
    protected $fillable = [ 'name', 'short_description', 'description' ];

    protected $hidden = [];

    public function exercises() {
        return $this->belongsToMany(Exercise::class, 'workout_exercises')
            ->withPivot(['order', 'sets', 'reps', 'duration', 'weight'])
            ->using(WorkoutExercise::class);
    }
}