<?php

namespace Database\Factories;

use App\Models\Course;
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
        $gender = ['M', 'F'];
        $qualification = ['10th', '12th', 'BCA'];
        $cast = ['SC', 'OBC', 'ST', 'GEN'];
        $courses = Course::get('id');
        $course =  json_decode($courses, true);

        return [
            'full_name' => $this->faker->name(),
            'address' => $this->faker->address(),
            'contact_no' => 9563265323 ,
            'dob' => $this->faker->date(),
            'gender' => array_rand($gender),
            'cast' => array_rand($cast),
            'qualification' => array_rand($$qualification),
            'occupation' => $this->faker->jobTitle(),
            'counselling_by' => $this->faker->name(),
            'course_id' => array_rand($course),
            'authorisation' => $this->faker->name(),
            'fees' => 5323,
            'start_date' => $this->faker->date(),
            'end_date' => $this->faker->date(),
            'start_batch_time' => $this->faker->time(),
            'end_batch_time' => $this->faker->time(),
            'discount' => 53,
            'net_fees' => 5323,
            'join_date' => $this->faker->date(),
            "parent_name" => $this->faker->name(),
            "parent_contact" =>9563265323,
            "parent_occupation" => $this->faker->jobTitle(),
        ];
    }
}
