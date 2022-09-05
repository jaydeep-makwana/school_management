<?php

namespace Database\Seeders;

use Faker\Factory;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Add_Student extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $faker = Factory::create();
        for ($i = 0; $i < 15; $i++) {

            DB::table('students')->insert([
                'Full_Name' => $faker->firstName() . ' ' . $faker->lastName(),
                'Address' => $faker->address(),
                'Contact_No' => 1234567890,
                'BOD' => date('Y-m-d'),
                // 'cast' => 'SC',
                'gender' => 'male',
                'Qualification' => '12th',
                'Occupation' => '-',
                'Counselling_By' => 'by me',
                //   course detail 
                'Course' => 'php',
                'Authorisation' => 'unknown',
                'Fees' => '1',
                'Duration' => '1 month',
                'Discount' => 'unlimited',
                 
                'Net_Fees' => 111,
                'Discount_Offer' => '-',
                'Join_Date' => date('Y-m-d'),
                //   parents detail 
                'parent_Name' => $faker->firstName() . ' ' . $faker->lastName(),
                'parent_Contact' => 123123123,
                'parent_Occupation' => 'unknown',
            ]);
        }
    }
}
