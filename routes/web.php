<?php

/*
|--------------------------------------------------------------------------
| Application Routes
|--------------------------------------------------------------------------
|
| Here is where you can register all of the routes for an application.
| It is a breeze. Simply tell Lumen the URIs it should respond to
| and give it the Closure to call when that URI is requested.
|
*/

$router->get('/', function () use ($router) {
    //return $router->app->version();
    $workout = App\Workout::find(1);

    foreach ($workout->exercises as $exercise)
    {
        var_dump($exercise->pivot->weight);
    }

    return $workout->exercises;

    //foreach ($user->roles as $role) {
    //    echo $role->pivot->created_at;
    //}
});

// Users
$router->get('/users', 'UserController@index');
$router->get('/users/{id}', 'UserController@show');
$router->post('/users', 'UserController@create');
$router->put('/users/{id}', 'UserController@update');
$router->delete('/users/{id}', 'UserController@destroy');

// Exercises
$router->get('/exercises', 'ExerciseController@index');
$router->get('/exercises/{id}', 'ExerciseController@show');
$router->post('/exercises', 'ExerciseController@create');
$router->put('/exercises/{id}', 'ExerciseController@update');
$router->delete('/exercises/{id}', 'ExerciseController@destroy');


// Workouts
$router->get('/workouts', 'WorkoutController@index');
$router->get('/workouts/{id}', 'WorkoutController@show');
$router->post('/workouts', 'WorkoutController@create');
$router->put('/workouts/{id}', 'WorkoutController@update');
$router->delete('/workouts/{id}', 'WorkoutController@destroy');

// Workout exercises
$router->get('/workout-exercises', 'WorkoutExerciseController@index');
$router->get('/workout-exercises/{id}', 'WorkoutExerciseController@show');
$router->post('/workout-exercises', 'WorkoutExerciseController@create');
$router->put('/workout-exercises/{id}', 'WorkoutExerciseController@update');
$router->delete('/workout-exercises/{id}', 'WorkoutExerciseController@destroy');