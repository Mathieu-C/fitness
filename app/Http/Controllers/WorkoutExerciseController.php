<?php

namespace App\Http\Controllers;

use App\WorkoutExercise;
use Illuminate\Http\Request;

class WorkoutExerciseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function index()
    {
        return WorkoutExercise::all();
    }

    public function show($id)
    {
        return WorkoutExercise::find($id);
    }

    public function create(Request $request)
    {

        $workoutExercise = new WorkoutExercise();

        $workoutExercise->workout_id = $request->workout_id;
        $workoutExercise->exercise_id = $request->exercise_id;

        $workoutExercise->order = $request->order;
        $workoutExercise->sets = $request->sets;
        $workoutExercise->reps = $request->reps;
        $workoutExercise->duration = $request->duration;
        $workoutExercise->weight = $request->weight;

        $workoutExercise->save();

        return response()->json('WorkoutExercise created successfully');
    }

    public function update(Request $request, $id)
    {

        $workoutExercise = WorkoutExercise::findOrFail($id);

        $workoutExercise->workout_id = $request->workout_id;
        $workoutExercise->exercise_id = $request->exercise_id;

        $workoutExercise->order = $request->order;
        $workoutExercise->sets = $request->sets;
        $workoutExercise->reps = $request->reps;
        $workoutExercise->duration = $request->duration;
        $workoutExercise->weight = $request->weight;

        $workoutExercise->save();

        return $workoutExercise;
    }

    public function destroy($id)
    {
        $workoutExercise = WorkoutExercise::findOrFail($id);
        $workoutExercise->delete();

        return response()->json('WorkoutExercise with id : '. $id .' removed successfully');
    }

    //
}
