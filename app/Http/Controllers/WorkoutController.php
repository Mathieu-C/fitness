<?php

namespace App\Http\Controllers;

use App\Workout;
use Carbon\Carbon;
use Illuminate\Http\Request;

class WorkoutController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function index()
    {
        return Workout::all();
    }

    public function show($id)
    {
        return Workout::find($id);
    }

    public function create(Request $request)
    {
        $this->validate($request, [
            'name' => 'required|unique:workouts',
            'short_description' => 'required|unique:workouts',
            'description' => 'required|unique:workouts',
        ]);

        $workout = new Workout();

        $workout->user_id = 1;
        $workout->name = $request->name;
        $workout->description = $request->description;
        $workout->short_description = $request->short_description;

        $workout->save();

        return response()->json('Workout created successfully');
    }

    public function update(Request $request, $id)
    {

        $workout = Workout::findOrFail($id);

        $workout->name = $request->name;
        $workout->release_date = Carbon::createFromFormat('Y-m-d', $request->release_date);
        $workout->description = $request->description;

        $workout->album_id = $request->album_id;


        $workout->save();

        return $workout;
    }

    public function destroy($id)
    {
        $workout = Workout::findOrFail($id);
        $workout->delete();

        return response()->json('Workout with id : '. $id .' removed successfully');
    }

    //
}
