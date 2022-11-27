<?php

namespace Database\Factories;

use App\Models\Course;
use Carbon\Carbon;
use Illuminate\Database\Eloquent\Factories\Factory;

class StudentFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        $qualification = ['10th', '12th', 'BCA'];
        $cast = ['sc', 'obc', 'st', 'general'];
        $gender = ['M', 'F'];

        $courses = Course::all();
        $courses = $courses->pluck('id');

        $totalCourse = $courses->count();

        $fees = rand(10000,100000);
        $discount = rand(1000,10000);

        return [
            'full_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'contact_no' => rand(8000000000, 9999999999),
            'dob' => $this->faker->date(),
            // 'dob' => Carbon::now()->addDay(3)->toDateString(),
            'gender' => $gender[array_rand($gender)],
            'cast' => $cast[array_rand($cast)],
            'qualification' => $qualification[array_rand($qualification)],
            'occupation' => $this->faker->jobTitle(),
            'counselling_by' => $this->faker->name(),
            'course_id' => $courses[rand(0, $totalCourse - 1)],
            'authorization' => $this->faker->name(),
            'fees' => $fees,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'start_batch_time' => $this->faker->time(),
            'end_batch_time' => $this->faker->time(),
            'discount' => $discount,
            'net_fees' => $fees - $discount,
            'join_date' => $this->faker->date(),
            "parent_name" => $this->faker->name(),
            "parent_contact" => rand(8000000000, 9999999999),
            "parent_occupation" => $this->faker->jobTitle(),
        ];
    }
}
