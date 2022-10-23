<?php

namespace App\Http\Controllers;

class BirthdayController extends Controller
{

    public function birthdays()
    {
        return view('birthdays.index');
    }
}
