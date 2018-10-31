<?php

namespace App\Http\Controllers;

use App\Exercise;
use Illuminate\Http\Request;

class ExerciseController extends Controller
{
    /**
     * Create a new controller instance.
     *
     */
    public function index()
    {
        return Exercise::all();
    }

    public function show($id)
    {
        if (!auth()->user()->hasRole('admin')) {
            return Exercise::find($id);
        }




        return $exercise;
    }

    public function create(Request $request)
    {

        Exercise::create($request->all());


        //$exercise->owner_id = $request->owner_id;
        //$exercise->name = $request->name;
        //$exercise->description = $request->description;

        //$exercise->save();

        return response()->json('Exercise created successfully');
    }

    public function update(Request $request, $id)
    {

        $exercise = Exercise::findOrFail($id);

        $exercise->owner_id = $request->owner_id;
        $exercise->name = $request->name;
        $exercise->description = $request->description;

        $exercise->save();

        return $exercise;
    }

    public function destroy($id)
    {
        $exercise = Exercise::findOrFail($id);
        $exercise->delete();

        return response()->json('Exercise with id : '. $id .' removed successfully');
    }

    //
}
