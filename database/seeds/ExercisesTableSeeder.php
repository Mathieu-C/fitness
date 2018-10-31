<?php

use Illuminate\Database\Seeder;

class ExercisesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('exercises')->insert([
            'owner_id' => 1,
            'name' => 'Squat',
            'description' => 'The squat is a compound, full body exercise',
            'long_description' => 'The squat is a compound, full body exercise that trains primarily the muscles of the thighs, hips and buttocks, quadriceps femoris muscle (vastus lateralis, vastus medialis, vastus intermedius and rectus femoris), hamstrings, as well as strengthening the bones, ligaments and insertion of the tendons throughout the lower body.',
        ]);

        DB::table('exercises')->insert([
            'owner_id' => 1,
            'name' => 'Deadlift',
            'description' => 'The deadlift is a weight training exercise in which a loaded barbell or bar is lifted off the ground to the level of the hips, then lowered to the ground.',
            'long_description' => 'The deadlift is a weight training exercise in which a loaded barbell or bar is lifted off the ground to the level of the hips, then lowered to the ground. It is one of the three powerlifting exercises, along with the squat and bench press.',
        ]);

        DB::table('exercises')->insert([
            'owner_id' => 1,
            'name' => 'Bench press',
            'description' => 'The bench press is an upper body strength training exercise that consists of pressing a weight upwards from a supine position.',
            'long_description' => 'The bench press is an upper body strength training exercise that consists of pressing a weight upwards from a supine position. The exercise works the pectoralis major as well as supporting chest, arm, and shoulder muscles such as the anterior deltoids, serratus anterior, coracobrachialis, scapulae fixers, trapezii, and the triceps. A barbell is generally used to hold the weight, but a pair of dumbbells can also be used.',
        ]);

        DB::table('exercises')->insert([
            'owner_id' => 1,
            'name' => 'Pull-up',
            'description' => 'A pull-up is an upper-body compound pulling exercise.',
            'long_description' => 'A pull-up is an upper-body compound pulling exercise. Although it can be performed with any grip, in recent years some have used the term to refer more specifically to a pull-up performed with a palms-forward position.',
        ]);

        DB::table('exercises')->insert([
            'owner_id' => 1,
            'name' => 'Bent-over row',
            'description' => 'A bent-over row (or barbell row) is a weight training exercise that targets a variety of back muscles.',
            'long_description' => 'A bent-over row (or barbell row) is a weight training exercise that targets a variety of back muscles. Which ones are targeted varies on form. The bent over row is often used for both bodybuilding and powerlifting. It is a good exercise for increasing strength and size.',
        ]);
    }
}
