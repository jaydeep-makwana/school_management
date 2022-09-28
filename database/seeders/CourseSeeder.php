<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CourseSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $courses = ['PHP', 'JS', 'JAVA', 'Android', 'Flutter', 'Web Designing', 'Web Development'];

        foreach ($courses as $course) {
            DB::table('courses')->insert(['name' => $course]);
        }
    }
}
