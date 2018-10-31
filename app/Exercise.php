<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Exercise extends Model
{
    protected $fillable = [ 'name', 'description', 'owner_id', 'long_description' ];

    protected $hidden = ['owner_id'];

    public function workouts() {
        return $this->belongsToMany(Workout::class, 'workout_exercises');
    }

    public function owner() {

    }
}