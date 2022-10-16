<?php

namespace App\Http\Controllers;

use App\Models\Student;

class BirthdayController extends Controller
{
    public function todayBirthday()
    {
        $students = Student::where('dob', Date('Y-m-d'))->get();

        return view('birthdays.todays_birthdays', $students);
    }

    public function upcomingBirthday()
    {
        return view('birthdays.todays_birthdays');
    }
}
