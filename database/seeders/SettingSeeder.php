<?php

namespace Database\Seeders;

use App\Models\Setting;
use Illuminate\Database\Seeder;

class SettingSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $inputs = [
            [
                'key' => 'profile',
            ],
            [
                'key' => 'logo',
            ],
            [
                'key' => 'favicon',
            ]
        ];

        foreach ($inputs as $input) {
            Setting::create($input);
        }
    }
}
